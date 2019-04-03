var CACHE_NAME = 'om-sw-cache-v1';
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
  './offline.html'
];
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
      })
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
