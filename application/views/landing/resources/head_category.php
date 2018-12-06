<?php $categories = $this->db->query("SELECT * FROM categories WHERE pid = 0 LIMIT 10")->result(); ?>
<nav class="navbar navbar-default navbar-main-white navbar-pad-top navbar-first">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/landing/img/onitshamarket-logo.png'); ?>" id="navbar-img"
                     alt="<?= lang('app_name'); ?>" title="<?= lang('app_name'); ?>"/>
            </a>
        </div>
        <form method="get" action="<?= base_url('search') ?>"
              class="navbar-form navbar-left navbar-main-search navbar-main-search-category" role="search">
            <select name="category" id="all-category" class="navbar-main-search-category-select">
                <option value="">All Categories</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category->name; ?>"><?= ucwords($category->name); ?></option>
                <?php endforeach; ?>
            </select>
            <div class="form-group ">
                <input class="form-control site-search form-search" required name="q" autocomplete="off" type="text"
                       placeholder="Search the Entire Store..."/>
            </div>
            <div class="src-cover">
                <ul class="market-search">
                </ul>
            </div>
            <a class="fa fa-search navbar-main-search-submit" href="#"></a>
        </form>
        <ul class="nav navbar-nav navbar-right navbar-mob-item-left" style="padding:-2px;">
            <li>
                <a href="#"><span>Save big</span> on our App <i class="fa fa-arrow-down"></i></a>
            </li>
            <li>
                <a href="#"><span>About</span> <?= lang('app_name'); ?></a>
            </li>
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                        data-target="#main-nav-collapse" area_expanded="false"><span
                            class="sr-only">Main Menu</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
        </ul>
    </div>
</nav>
