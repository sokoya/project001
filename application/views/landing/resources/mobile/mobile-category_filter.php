<div id="ont_filter" class="filterbar">
    <div class="w-bg top_menu">
        <a href="javascript:void(0)" class="update_fil filter_btn_submit" style="float: right">Clear
            Filter</a>
        <p><span class="filter_close_btn"><i class="fa fa-arrow-left" aria-hidden="true"></i></span> &nbsp;Filter
        </p>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading filter-head filter-first">Price</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <input id="price-range"  type="hidden"/>
                </div>
            </div>
        </div>
    </div>
    <?php if (!empty($brands)): ?>
        <div class="panel panel-default">
            <div
                class="panel-heading filter-head">Brand
                <span style="color: #4c4c4c !important; float: right"><i class="fa fa-minus close-panel" aria-hidden="true" data-target="brand_static_vl"></i></span>
            </div>
            <div class="panel-body" id="brand_static_vl">
                <?php foreach ($brands as $brand) : ?>
                    <?php if(!empty( $brand->brand_name )) :?>
                        <div class="carrito-checkbox">
                            <label class="list-label">
                                <input class="filter" type="checkbox" name="filterset"
                                       id="<?= trim(preg_replace("/[^a-z0-9-]/", '_', strtolower($brand->brand_name))); ?>"
                                       data-type="brand_name"
                                       data-value="<?= trim($brand->brand_name); ?>"/><?= ucfirst($brand->brand_name); ?>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <hr class="panel-line"/>
                    <?php endif;?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (!empty($colours)) : ?>
        <div class="panel panel-default">
            <div
                class="panel-heading filter-head">Main Colour
                <span style="color: #4c4c4c !important; float: right"><i class="fa fa-minus close-panel"
                                                                         aria-hidden="true"
                                                                         data-target="color_static_vl"></i></span>
            </div>
            <div class="panel-body" id="color_static_vl">
                <?php foreach ($colours as $colour) : if (!empty($colour->colour_name)):?>
                    <div class="carrito-checkbox">
                        <label class="list-label">
                            <input class="filter" type="checkbox" name="filterset"
                                   id="<?= trim(preg_replace("/[^a-z0-9-]/", '_', strtolower($colour->colour_name))); ?>"
                                   data-type="main_colour"
                                   data-value="<?= trim($colour->colour_name); ?>"/><?= ucfirst($colour->colour_name); ?>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <hr class="panel-line"/>
                <?php endif; endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($features) : ?>
        <?php $x = 1;
        foreach ($features as $feature => $feature_value) : ?>
            <div class="panel panel-default">
                <div class="panel-heading filter-head"><?= preg_replace("/[^A-Za-z 0-9]/", ' ', $feature); ?>
                    <span style="color: #4c4c4c !important; float: right"><i class="fa fa-minus close-panel" aria-hidden="true" data-target="<?= $feature ?>_vl"></i></span>
                </div>
                <div class="panel-body" id="<?= $feature ?>_vl">
                    <?php foreach ($feature_value as $key => $value) : ?>
                        <div class="carrito-checkbox">
                            <label class="list-label">
                                <input class="filter" type="checkbox" name="filterset"
                                       id="<?= trim(preg_replace("/[^a-z0-9-]/", '_', strtolower($value))) ?>"
                                       data-type="<?= trim($feature); ?>"
                                       data-value="<?= trim(preg_replace("/[^A-Za-z0-9-]/", '_', $value)) ?>"/><?= $value; ?>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <hr class="panel-line"/>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>