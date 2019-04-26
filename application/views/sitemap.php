<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url();?></loc>
        <priority>1.0</priority>
        <changefreq>hourly</changefreq>
    </url>
    <?php foreach($products as $product ){  ?>
        <url>
            <loc><?= base_url(urlify($product->product_name, $product->id)); ?></loc>
            <priority>0.2</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } ?>
    <url>
        <loc><?= base_url('new-arrivals/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('explore/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('page/terms/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('page/privacy/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('page/social_responsibility/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('page/agreement/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('page/shopping_help/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('page/about_onitshamarket/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('jobs-at-onitshamarket/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('seller/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>

</urlset>