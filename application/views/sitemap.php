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
        <loc><?= base_url('pages/terms/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('pages/privacy/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc><?= base_url('pages/agreement/'); ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>

</urlset>