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

    .rating-btn {
        background: #468c46;
        color: #fff;
        /*padding: 13px;*/
        border-radius: 0;
    }

    .text-break {
        margin-bottom: -6px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: #000;
        font-weight: 500
    }

    .comment-user {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 12px;
        color: #6e6e6e;
        font-weight: 500;
        position: relative;
        bottom: 10px;
    }
</style>
<body style="background: #efefef">

<div>
    <div class="menu-bg mobile-menu">
        <div style="margin-left: 10px; margin-right: 10px;">
            <a style="text-decoration: none" href="<?= $url; ?>"><p><span
                            class="filter_close_btn"> <img src="<?= base_url('assets/svg/left-arrow.svg'); ?>"
                                                           alt="Back button"
                                                           style="height: 14px; width: 14px; margin-right: 8px; margin-bottom: 2px;"></span>
            </a>
            <span class="menu-bg-text">Rating & Reviews</span>
            </p>
        </div>
    </div>
    <div class="container"><p class="text-break" style="">Customer Ratings</p></div>
    <div class="custom-card">
        <div class="container">
            <ul class="product-rate-list">
                <?= rating_bar_display($rating_counts) ?>
            </ul>

            <a href="javascript:void(0)" class="block-title" style="color: #000;">
                <?= product_overall_rating($rating_counts) . ' based on ' . count($rating_counts); ?> ratings <a
                        href="<?= $url . '/add_rating_review'; ?>"
                        style="color: #0b6427; float: right; font-size: 14px; position: relative; top: 1px; text-decoration: none">Write
                    a review</a></a>
        </div>
    </div>
    <?php if ($reviews): ?>
        <div class="container"><p class="text-break" style="">Product Reviews (<?= count($reviews); ?>)</p>
        </div><?php endif; ?>
    <div class="custom-card">
        <div class="container">
            <?php $x = 1;
            if ($reviews) : foreach ($reviews as $review) : ?>
                <div class="comment-block">
                    <ul style="display: inline-block" class="product-caption-rating">
                        <?= single_user_rate($review['rating_score']); ?>
                    </ul>
                    <span style="float: right;" class="comment-date"><?= neatDate($review['published_date']); ?></span>
                </div>
                <p class="comment-title"><?= $review['title']; ?></p>
                <p class="comment-detail"><?= $review['content']; ?></p>
                <p class="comment-user"><strong>Reviewed by:</strong> <?= $review['display_name']; ?></p>
                <hr class="comment-line"/>
                <?php if ($x == 3) : ?>
                    <a style="text-decoration: none; color: #fff;"
                       href="<?= $url; ?>">
                        <button class="btn btn-block rating-btn">Show More Reviews</button>
                    </a>
                    <?php break; endif; ?>
                <?php $x++; endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/js/mobile.js'); ?>"></script>
</html>
