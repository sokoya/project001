<aside class="category-filters">
    <div class="category-filters-section">
        <h3 class="widget-title-sm custom-widget-text">Category</h3>
        <?php if ($count_in_total > $total_count):?>
        <a class="btn btn-danger btn-sm" id="clear_filter" style="position:absolute;right:30px;top:15px;">Clear Filter</a>
        <?php endif;?>
        <ul class="cateogry-filters-list">
            <li></li>
            <?php foreach ($sub_categories as $category) : ?>
                <li>
                    <a href="<?= base_url('catalog/' . $category->slug . '/'); ?>">
                        <?= $category->name; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="category-filters-section">
        <h3 class="widget-title-sm custom-widget-text">Price</h3>
        <input id="price-range" type="hidden"/>
    </div>
    <?php if (!empty($brands)): ?>
        <div class="category-filters-section">
            <h3 class="widget-title-sm custom-widget-text">Brand</h3>
            <?php foreach ($brands as $brand) :
                if (!empty( $brand->brand_name )):
                ?>
                <div class="carrito-checkbox">
                    <label class="tree-input">
                        <input class="filter" type="checkbox" data-type="brand_name"
                               id="<?= trim(preg_replace("/[^a-z0-9-]/", '_', strtolower($brand->brand_name))); ?>"
                               name="filterset"
                               data-value="<?= trim(strtolower($brand->brand_name)); ?>"><?= ucfirst($brand->brand_name); ?>
                        <span class="checkmark"></span>
                        <span class="category-filters-amount">(<?= $brand->brand_count; ?>)</span>
                    </label>
                </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if (!empty($colours)) : ?>
        <div class="category-filters-section">
            <h3 class="widget-title-sm custom-widget-text">Main Colour</h3>
            <?php foreach ($colours as $colour) : if (!empty($colour->colour_name)):?>
                <div class="carrito-checkbox">
                    <label class="tree-input">
                        <input class="filter" type="checkbox" data-type="main_colour"
                               id="<?= trim(preg_replace("/[^a-z0-9-]/", '_', strtolower($colour->colour_name))); ?>"
                               name="filterset"
                               data-value="<?= trim(strtolower($colour->colour_name)); ?>"/><?= ucfirst($colour->colour_name); ?>
                        <span class="checkmark"></span>
                        <span class="category-filters-amount">(<?= $colour->colour_count; ?>)</span>
                    </label>
                </div>
            <?php endif; endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($features) : ?>
        <div class="category-filters-section">
            <?php $x = 1;
            foreach ($features

            as $feature => $feature_value) : ?>
            <div class="accordion" id="<?= trim($feature); ?>">
                <div class="panel no-outline feature-attribute">
                    <div class="panel-header feature-attribute">
                        <div class="panel-title" data-toggle="collapse"
                             data-target="#<?= trim($feature) . '-1'; ?>" aria-expanded="true"
                             aria-controls="<?= trim($feature) . '-1'; ?>">
                            <h3 class="widget-title-sm custom-widget-text tree-root">
                                <?= preg_replace("/[^A-Za-z 0-9]/", ' ', $feature); ?>
                            </h3>
                        </div>
                    </div>
                    <div id="<?= trim($feature) . '-1'; ?>" class="collapse"
                         aria-labeledby="<?= $feature; ?>" data-parent="#<?= trim($feature); ?>">
                        <div class="panel-body">
                            <?php foreach ($feature_value as $key => $value) : ?>
                                <div class="carrito-checkbox">
                                    <label class="tree-input">
                                        <input class="filter" type="checkbox" name="filterset"
                                               id="<?= trim(preg_replace("/[^a-z0-9-]/", '_', strtolower($value))) ?>"
                                               data-type="<?= trim($feature); ?>"
                                               data-value="<?= trim(preg_replace("/[^a-z0-9-]/", '_', strtolower($value))) ?>"/><?= $value; ?>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</aside>