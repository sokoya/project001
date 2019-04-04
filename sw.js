importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.1.1/workbox-sw.js');
var CACHE_NAME = 'om-sw-cache-v1.21';
var urlsToCache = [
  './',
  './catalog/phones-tablets/',
  './catalog/electronics/',
  './catalog/computing/',
  './catalog/home-office/',
  './catalog/fashion/',
  './catalog/health-beauty/',
  './catalog/gaming/',
  './catalog/grocery/',
  './catalog/baby-products/',
  './catalog/toys-games/',
  './catalog/other-categories/',
  './explore/',
  './new-arrivals/',
  './offline.html',
];

if(workbox){console.log('workbox loaded');}else{console.log("error workbox not loaded")}
workbox.routing.registerRoute(
  new RegExp('https://fonts.(?:googleapis|gstatic).com/(.*)'),
  new workbox.strategies.CacheFirst({
    cacheName: 'google-fonts',
    plugins: [
      new workbox.expiration.Plugin({
        maxEntries: 60,
        maxAgeSeconds: 60 * 60 * 24 * 365,
      }),
      new workbox.cacheableResponse.Plugin({
        statuses: [0, 200]
      }),        
    ],
  }),
);
workbox.routing.registerRoute(
  new RegExp('https://use.fontawesome.com/(.*)'),
  new workbox.strategies.CacheFirst({
    cacheName: 'fa-fonts',
    plugins: [
      new workbox.expiration.Plugin({
        maxEntries: 60,
        maxAgeSeconds: 60 * 60 * 24 * 365,
      }),
      new workbox.cacheableResponse.Plugin({
        statuses: [0, 200]
      }),        
    ],
  }),
);
async function unableToResolve (err) {
  console.log('WORKER: fetch request failed in both cache and network; '+ err);
  const cache = await caches.open(CACHE_NAME);
  console.log("Cache Located");
  return cache.match('./offline.html');
}
self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      }
    )
  );
});
self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return response
        if (response) {
          return response;
        }
        return fetch(event.request, {
          credentials: 'include',
          //mode: "no-cors",
        }).then(
        function(response) {
          // Check if we received a valid response
          if(!response || response.status !== 200 || response.type !== 'basic') {
            return response;
          }
          var responseToCache = response.clone();
          caches.open(CACHE_NAME)
            .then(function(cache) {
              cache.put(event.request, responseToCache);
            });
          return response;
        }
      ).catch(unableToResolve);
    })
  );
});
self.addEventListener('activate', function(event) {
  var cacheWhitelist = [CACHE_NAME, 'google-fonts', 'fa-fonts'];
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});