<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .custom-card {
        background: #fff;
        padding-top: 8px;
        padding-bottom: 8px;
        margin-bottom: 2px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
    }

    .product-price > span {
        float: right;
        padding: 10px;
        background: #c9ffd3;
        color: #55a455;
        font-weight: 600;
        font-size: 15px;
    }

    .block-title {
        color: #468c46;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 13px;
    }

    .block-title > span {
        float: right;
        color: #2e2e2e;
    }

    .mobile-menu {
        font-family: "Open Sans", cursive;
        font-weight: 600;

    }

    .mobile-menu > div > p {
        margin: 0;
    }

    .text-break {
        margin-bottom: -6px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: #000;
        font-weight: 500
    }

    .comment-date {
        color: #777;
        font-size: 12px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .comment-title {
        color: #333;
        font-size: 14px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    .comment-detail {
        color: #404040;
        font-size: 13px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        position: relative;
        top: -5px;
    }

    .comment-line {

        margin-top: -10px;
        margin-bottom: 16px;
    }

    .comment-block {
        margin-top: ;
    }

    .menu-bg {
        background: #fff;
        padding: 8px 5px 13px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
    }

    .menu-bg-text {
        position: relative;
        top: 2px;
        left: 10px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 20px;
        font-weight: 500;
        color: #222;
    }

    .text-break {
        margin-bottom: -6px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: #000;
        font-weight: 500
    }

    .body_text {
        font-size: 13px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        position: relative;
    }
</style>
<body style="background: #efefef">

<div>
    <div class="menu-bg mobile-menu">
        <div style="margin-left: 10px; margin-right: 10px;">
            <a style="text-decoration: none"
               href="<?= $url; ?>"><p><span
                            class="filter_close_btn"> <img src="<?= base_url('assets/svg/left-arrow.svg'); ?>"
                                                           alt="Back button"
                                                           style="height: 14px; width: 14px; margin-right: 8px; margin-bottom: 2px;"></span>
            </a>
            <span class="menu-bg-text">Product Description</span>
            </p>
        </div>
    </div>
    <?php if ($product_description): ?>
        <div class="container"><p class="text-break">Description</p></div>
        <div class="custom-card">
            <div class="container">
                <p class="body_text"><?= html_entity_decode($product_description->product_description); ?></p>
            </div>
        </div>
        <div class="container"><p class="text-break">Specifications</p></div>
        <div class="custom-card">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Specification</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <?php $specs = json_decode($product_description->attributes); ?>
                    <tbody>
                    <?php if (!empty($specs)): foreach ($specs as $spec => $value) : ?>
                        <tr>
                            <td><?= trim($spec); ?></td>
                            <td><?php if (is_array($value)) : foreach ($value as $val) echo ucwords($val) . ', '; else: echo ucwords($value); endif; ?></td>
                        </tr>
                    <?php endforeach; else : ?>
                        <td colspan="2">No Specification for this product</td>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php if(!empty($product_description->in_the_box)) : ?>
            <div class="container"><p class="text-break">What's in the box</p></div>
            <div class="custom-card">
                <div class="container">
                    <p class="body_text"><?= html_entity_decode($product_description->in_the_box); ?></p>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
    <?php endif; ?>
</body>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/mobile.js'); ?>"></script>
<script>
    $(function(){
        $('.prod_description > p > img').each(function() {
            $(this).css({'width': '50%', 'text-align' : 'left'});
            $(this).addClass('img-responsive');
            $(this).attr('Onitshamarket');
        });
    });

</script>
</html>
