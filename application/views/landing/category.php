<?php $this->load->view('landing/resources/head_base'); ?>
<style type="text/css">
    .feature-attribute:hover {
        cursor: pointer;
    }

    .product {
        min-height: 300px !important;
        max-height: 300px !important;
    }

    .carrito-checkbox {
        display: block;
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
        cursor: pointer;
        font-size: 14px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .carrito-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .checkmark {
        cursor: pointer;
        position: absolute;
        top: 0;
        left: 0;
        padding: 3px;
        margin-top: 2px;
        height: 15px;
        width: 15px;
        border: solid 1px #74c68366;;
        background-color: #fff;
    }

    .carrito-checkbox:hover input ~ .checkmark {
        border-color: #74c68366;
    }

    .carrito-checkbox input:checked ~ .checkmark {
        background-color: #74c683;
    }

    .quick_view_link:hover {
        color: #0b6427;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .carrito-checkbox input:checked ~ .checkmark:after {
        display: block;
        color: white;
    }

    /* Style the checkmark/indicator */
    .carrito-checkbox .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

</style>
</head>
<body>

<div class="global-wrapper clearfix" id="global-wrapper">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>

    <?php if (empty($products)) : ?>
        <div class="container">
            <div class="row">
                <div style="height:168px"></div>
                <h2 class="text-center">Oops! Sorry, we couldn't find products on this section.</h2>
                <p class="text-center">
                    Please check your spelling for typographic error.<br/>
                    <span class="text-danger">You can also:</span>
                <ul class="text-center">
                    <li style="list-style-type: none">Try a different keyword search.</li>
                </ul>
                </p>
                <p class="text-muted text-sm text-center">You can browse for more product <a
                            style="text-decoration: none; color: #0b6427;" href="<?= base_url(); ?>">Find
                        product</a> or <a href="<?= PAGE_CONTACT_US ?>">contact us</a> if still not working.</p>
                <div style="height:110px"></div>
            </div>
        </div>
    <?php else : ?>
        <div class="container">
            <div class="row">
                <header class="page-header">
                    <ol class="breadcrumb page-breadcrumb">
                        <li><a href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="active"><?= ucwords($category_detail->name); ?>
                        </li>
                    </ol>
                    <div class="category-selections clearfix">
                        <a class="btn btn-custom-primary"
                           href="<?= base_url('catalog/' . urlify($category_detail->name) . '/?order_by=best_rating'); ?>">Best
                            Rating</a>
                        <a class="btn btn-custom-primary" title="Filter by best seller" href="<?= current_url(); ?>">Best
                            Seller</a>
                    </div>
                </header>
            </div>
            <div class="cat-notify">
                <p class="n-head"><?= $category_detail->name; ?></p>
                <p class="n-body"><strong><?= $total_count . ' results'; ?></strong></p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?php $this->load->view('landing/resources/category_filter'); ?>
                </div>
                <div class="col-md-9">
                    <div id="processing"
                         style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
                        <div class="text"
                             style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
                            <img src="<?= base_url('assets/load.gif'); ?>" alt="Processing...">
                            Processing your request. <strong
                                    style="color: rgba(2.399780888618386%,61.74193548387097%,46.81068368248487%,0.843);">Please
                                Wait! </strong>
                        </div>
                    </div>
                    <?php if (count($products) < 1): ?>
                        <h2 class="text-center">Oops! No active product on this section, please filter again.</h2>
                    <?php endif; ?>
                    <div id="category_body">
                        <div class="row filter_data" data-gutter="15">
                            <?php $p_count = 0;
                            foreach ($products as $product) : ?>
                                <?php $p_count++; ?>
                                <div class="col-md-3 <?php if ($p_count % 4 == 0) { ?> product_div <?php } ?> product-<?php echo $p_count ?> v-items clearfix">
                                    <div id="arrow-<?= $product->id ?>" class="arrow-up"></div>
                                    <div class="product">
                                        <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)): ?>
                                            <ul class="product-labels">
                                                <li style="text-transform: capitalize;"><?= get_discount($product->sale_price, $product->discount_price); ?></li>
                                            </ul>
                                        <?php endif; ?>

                                        <div class="product-img-wrap">
                                            <div class="product-quick-view-cover">
                                                <div style="position: relative; left: -50%;">
                                                    <!--                                                    --><?php //$image_name = explode('/', $product->image_name); ?>
                                                    <button data-title="<?= $product->product_name ?>"
                                                            data-pr_id="<?= $product->id; ?>"
                                                            data-qv="<?php if ($p_count % 4 == 0) { ?>true<?php } ?>"
                                                            data-qvc="<?php echo $p_count ?>"
                                                            data-image="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                                            data-arrow="arrow-<?= $product->id ?>"
                                                            data-url="<?= base_url(urlify($product->product_name, $product->id)); ?>"
                                                            class="btn btn-primary product-quick-view-btn">Quick view
                                                    </button>
                                                </div>
                                            </div>
                                            <img class="product-img lazy cat-lazy"
                                                 data-src="https://res.cloudinary.com/onitshamarket/image/upload/w_280,h_240,c_pad/onitshamarket/product/<?= $product->image_name; ?>"
                                                 style=""
                                                 src=" data:image/gif;base64,R0lGODlhKgAqAPcAAAAAAAEUBQlVEw6LIBGdJROiJxunLR2oLiGpLyCpMiCpNCCpNCCpNSCpNSCpNB+pMx6oMR2oMRunMBqnLximLhalLhWkLRSkLRKjLBCjLA+iKw2iKgyhKAuhJwqgJwqgJgmgJgmgJgigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQifJQifJQifJQifJQifJQifJQifJQifJQifJQifJQieJQyZJxiILTBmOkhISElJSUpKSktLS0xMTE1NTU5OTk9PT1BQUFFRUVJSUlNTU1JaUFJgTlJsSFB6QU+FO06ONk2VMkyaL0ufLEqlKkqsKEuwJk60JFG4IVO6IFW7Hla8Hle9HVm+HFy/HFm+Hle9I1W9KlS8MlO8PVK8S1O8VFW9W1a9YVa9ZFW9ZVW9ZlW9Z1W9Z1a+aFe+aVi+a1q/bFzAbl7BcWHCc2LCdGPDdWTDdmTDdmTDdmTDdmTDdmTDdmTDdmXEd2XEd2XEd2XEd2XEd2XEd2XEd2XEd2jFeWvGfG/HgHXKhXvMi4PPkYjRlo7Tm5bWop7ZqaLbrKXcr6fdsands6retKzftq7ft7HhurPhvLbjvrjjwLnkwbvkwr3lxL/mx8LnycToy8Xpy8bpy8Xox8TowsPou8LnscHnl8Dmcr7lTr3kNL/lGr/lDcLmC8TnCsrpCdTtB9rvBuLyBen1BOz2BO32BO32BO32BO32BO32BO32BO32BO32BO32BO32BO32Be32B+z2C+v2IOr1Nuj1Uef1gej1qOj2xen21en23+r25ur26+r37Ov37ez37u347+/48PL58/T69fb79/n8+fn8+vr8+vr8+vv9+/v9+/z9/Pz9/P7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAwDqACwAAAAAKgAqAAAI/gDVCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFh+BGUTJEh44hSqPAXTyoylAGEShTosxgSNVIgdUMqRRxhhatMzMNVbs4ioFKBLR6Ce1FC4FKBqMqbpopIuhQobSYbpo4iumXp0+/ME0KsZrPmWewDsU5k8HOhzKZmhEr1AxTEYYeqnorwgDbXgboumyY9m1YrGTfxmUI7iRdmriE4gr8NoPIhVUPp0RgVDJKrgopWd48kxLDvpw3D1ZIJ3RoOgxLm96MeiHo1XRHJ9QMW7JnyLUlY05YOHfjx659M5WtcK5wlXv5HkdJfKHX42YjRva9++HS3FMp9lyN9GLM0DpfG6oraZgpy+Ti1WXc2PFjyPTw48ufT7++/ZEBAQAh+QQJAwDyACwAAAAAKgAqAIcAAAABAQEKIAcNKQkTQA0ccxcllBwtpB0yrB41sB44sR46sx08sx09tB08tB07sx05sh42sR4ysB8trh8prCAkqyEhqiEeqCEbpyIZpiIYpiIXpSIUpCMMoSQJoCQIoCQIoCQIoCQIoCQIoCQIoCQIoCQIoCQIoCQIoCQIoCQIoCQIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUJoCYJoCYKoCYKoCcMoSgNoikOoioPoisQoywQoywSpC4UpC8VpTAWpTEYpjMZpjQapzUbpzYeqDggqToiqjwlqz4orEEsrkU0sEw7s1JDtllIuF5NumJRvGVTvGdUvWhVvWlXvmtZv21cwG9ewXBgwnJhwnNjw3Vjw3Zkw3Zkw3Zkw3Zkw3Zkw3Zkw3Zkw3Zkw3ZlxHNlxHBlxGxoxWRtxlJyyEJ4yjF8zCZ9zB9+zBp+zBeCzhWH0BOM0RKP0xGS1BGS1BGS1BKR0xOR0xOP0xSO0haN0hiL0RuJ0CCI0CaHzy6GzzqH0ESJ0EyL0VWM0l+O02uO03aP04GO04yN05SO05qR1J2U1qGX16Ob2Kef2qqj266m3LCo3bKp3rOr3rSt37av4Lix4bqz4by04r224r6347+347+448C448C447+55L265LG75KG95Y/A5nzC52vE51jG6EXJ6THL6hvN6hDM6g3O6wrO6wjR7AjT7QfW7gfa7wbh8gXl9AXp9QTs9gTt9gTt9gTt9gTt9gTt9gTt9gTt9gTt9gTt9gfq9Rbm9C7f8ljY8IPT7qfR7brP7cTO7MzO7NDP7NPS7tfW79rZ8N3e8uHj9Obn9enp9uvr9+3t9+/u+O/v+PDz+vT2+/b3+/j5/Pn6/Pr7/fv7/fv7/fv8/fz9/v39/v3+/v7+/v7+/v7+/v7+/v7///////////////////////////////////////////////////////8I/gDlCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFh+dWXVoTJsyaS6vOXTxYbY2SFShTolSyptpIgd7WqEzZoE8fCSnXeLu4ysrMFQpyERsarE9KK6sqhvq5QoPQoVCNpgw1cRXTFX2gas3FQWVSiN58MhWkVSsElVZ2PpR5NVBZqApmrnlY7SrKPW+J5erw02VDtlc7PNUqVW7DcyftrphAdqivwjOViFxoVTHNPQ0qKP6q8JLlzzMvMQQM+vPchWFKlw7DMLXqz6wXkn599XRn2pZFU8a9mSFi3kwl/wX+0/bCusRV+h2efIVxhmGTp41YGThniEt5U6XY8zXSizFLHet8Ka9k4p8sl5OXl3Fjx48h18ufT7++/fv4RwYEACH5BAkDAPcALAAAAAAqACoAhwAAAAELAwZDEAlyGgqVIRCiIxGjIxGjIxOkIxSkIxSkIxSlIxWlIxWlIxalJBalJRelJhemJximKRqnLBunLhyoMB2oMh2oNB2oNR6oNh6pNx6pOB6pOB6oNx2oNxyoNhunNRmmMxalMRSkLhKjLRCjKw+iKg6iKQ6iKA2iJwyhJguhJQuhJQuhJQqhJAqgJAmgJAigJAigJAigJAigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQifJQifJQifJQifJQifJQifJQifJQifJQifJQifJQifJQifJQubJhiLLjZnQElTS09PT1BQUFFRUVJSUlNTU1RUVFVVVVZWVlleUltlT15sTWBzSmN+RGWHP2eWOmqjM22wKm65JG++H2/CHG/EGnDFGXDGGHDGGHHGF3HHF3PIFnXJFnfKFXrLFXzMFYDNFIbPE4zREpDTEpHTEZDTEozRFYnQGIXPHILOIH/NJXvLK3XJNG7GP2fESmXDTmDBVV3AWlu/Xlm/YVe+Y1e+ZFa+Zla+aFe+aVi+a1m/bFu/bl3Ab1/BcWDCc2LCdGPDdWPDdmTDdmTDdmTDdmTDdmTDdmXEd2XEd2XEd2XEd2XEd2XEd2XEd2bEd2bEeGfFeWrFe23HfnHIgXTJhHnLiX3NjYPPkYXQk4fRlYfR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pdyvqN2yqt60q9+1rd+2ruC4sOC5suG7tOK8teK9tuK+tuO/t+O/uOPAuOPAueTBueTBueTBueTBuuTBu+XDveXFwObHwefIw+jKxejLx+nNyOrOyerPyuvQzezT0e3W1e/a2/He4PPj5fXo6Pbq6/ft7Pfu7vjv7/jw8Pnx8/r09vv2+Pz4+vz6+vz6+vz6+/37+/37/P38/P38/P38/f79/v7+/v7+/v7+/v7+////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CP4AxwkcSLCgwYMIEypcyLChw4cQI0qcSLGixYfZcI2y06aNnVG4sl08aMxOlBkoU6KMYsfYSIHO7KicOdOOs4u4stDcmTILroqreApNuWoirqFIZ/yE6ExnUqFZbj6U+XSonYfGqiZ12ZCqVqFXGWY7+XXGEz+ECAUis1LkwqNluxBSRJcuH5RLFY4qOyNQ3b9gZoxi6LWqlb9//cwIq7BN2TCI6wKa0Yah469dItNVXHlh4aqCNItZzHBvWTCGECsWzBBu2S+ACh0aVCZl3oRj+fKM4taz7p2MF2b9PZNrV+IpgzNsijxqRNe6bz8MqrsoxZxffV6MWdXmy3ElyRfSZGn8+7iMGzt+DGm+vfv38OPLnz8yIAAh+QQJAwDyACwAAAAAKgAqAIcAAAABAQEHDQMuXA1HlhRQrhhWuRhavhldvxhjwhdnwxdoxBdnxBdlwxdgwRlewBpbvxtVvRxRux1Nuh9HuCFAtSM3siYysCgurioqrS0nrC8kqzEiqjQgqTYfqTUeqTQdqDMcqDMapzEZpjEXpjAVpS8UpS0SpCwRoysQoysQoykOoigNoicMoSYLoSYKoCYKoCYJoCYJoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUInyUInyUInyUInyUInyUInyUInyUInyUInyUInyUNoSkToi4dnjUwkkJGg1JXel1Xgl9XimFXkGJYm2RYpmZXr2hXtWlWuGlWumlVu2lVvGlVvGlVvWlWvWlWvWpXvmtZv2xbv25dwHBfwXJhwnNiwnRjw3Vk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ACoAhwAAAAELAwQ8DwZuGgyJHyCkICOpIGTCF4nQEpXVEJzYD57ZD5fWEI/TEYXPEn/NE3jKFHLIFWzFFmXDF17AGFi+GVW9GlK8Gk66G0u5HEa3HUG1Hj20HzmyIDWxIjOwIzCvJC2uJimsKSWrLCSrLiOqMCGqMSCpMR2oMBqnLhemKxWlKhKkKRCjKQ6iKAyhJwuhJgmgJQigJQigJAigJAigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQigJQifJQifJQifJQifJQifJQifJQifJQifJQifJQifJQifJQmeJQyaJxePLjZuQU5XUFRaVVRhV1VoWVZuWlZ0XFd6XVeCX1eKYVeQYlibZFimZlevaFe1aVa4aVa6aVW7aVW8aVW8aVW9aVa9aVa9ale+a1m/bFu/bl3AcF/BcmHCc2LCdGPDdWTDdmTDdmTDdmTDdmTDdmTDdmTDdmTDdmXEd2XEd2XEd2XEd2XEd2XEd2XEd2XEd2XEd2XEd2bEeGfEeWnFemzGfW/HgHXJhXvMioTPkobQlIjRlorRmIzSmY7Tm5LUnpXVoZjXpJrXppzYqJ/ZqqLbraXbr6fcsandsqretKzeta3ft6/gubHgurPhu7TivLXivbbivrfjv7fjv7jjwLjjwLnkwbnkwbnkwbrkwrvlw77mxcDnyMPoycToysXpy8bpzMbpzcbpzMbpycfpw8fpvMjqrsrqms3rddDsVNPtNdPtJNTtFdXtD9buC9nvCNvwB9/xBuHyBeTzBef0BOv1BO32BO32BO32BO32BO32BO32BO32BO73Bu73Ce73EO73Ke73Uu73du74me74vu/41u/45u/46+/47+/48PD58fH58/P69PX69vf79/n8+fr8+vr9+vv9+/z9/Pz9/P3+/f7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////wj+ANsJHEiwoMGDCBMqXMiwocOHECNKnEixosWH404xymPGTB5Gp8ZdPCgrTwsZKFOibJFH1kiB2PKonDkzD7aLp0zQ3JnSxKmKmXgKTZlp4qmhSGX8hIhNZ1KhJm4+lPl0aJ6HsqomddmQqlahVxmOO/lVaAuRC4+WHbpUIaO1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dmTDdmTDdmXEdmXEdmXEdWXEc2XEcWbEaWfEYmnFWmnFT2rFRW3GOnHILnPIKHXJI3jKIHzMHYHOG4bPGY3SFpXVE5rXEaLaD6zeDbXhDMHmCsXnCcnpCc3qCNDsCNXtB9rvBuDxBePzBeb0Ben1BOz2BO32BO32BO32BO32BO32BO32BO32BO32BO32BO32BO32BO32BOz2COn1D+XzGeDyJtrvNNTtQ8/rUMjpY7Tigqndkqvenq/gq67fsK3fs63ftq7gt7DgubHhurPhu7TivLXivrbjv7fjv7jjwLjjwLjjwLnkwbvkwrzlxL7mxcHnyMToysXpzMbpzcjqzsnqz8vr0dDt1dTu2Nnw3d7y4eP05uf16en26+v37e347+748PH58vP69PX69vf79/n8+fr8+vv9+/v9+/z9/Pz9/P3+/f7+/v7+/v7+/v7+/v7+/v7+/v///////////////////////////////////////////////////////////////////////////////////////wj+ANUJHEiwoMGDCBMqXMiwocOHECNKnEixosWH34jN0oMGjZ5ZxL5dPOhMDwcQKFOi5KDH2UiB1vSonDlTj7WLxCrQ3JmyArGKt3gKTXlrIrGhSEH8hGhNZ1KhFW4+lPl0qJ6HzqomddmQqlahVxl+O/lVKAeRC4+WHbpU4ay1Q2cx9AqXZliFaOryRMMwr16afBfS/YvybsK3hFXKTVt1QSJGihYIbZtwbNJDljxp5qRo59muSBdg0kza0yG7DrMOZVSadCSaXEELhdRaMyYFKg0zbCr0UW1PlhL0lPpQ7U5Evx2ppPww6M4EtEtbkoyyKMWcOxc0yuSJEyTqPi8ixuS5oHxKmy/VlSRLk2Xs9Ooybuz4MST8+/jz69/Pv//IgAAh+QQJAwDuACwAAAAAKgAqAIcAAAAEDAIIFwUMIQcPMQsTUREtkRkvnhw5rh06sB47sh8+tB8+tB89tCA8syE6syI5siM3sSU0sSgxsCovrywsrS4prDEmqzMkqzUiqjYgqTYeqDYdqDYbpzUZpjMXpTEVpS8TpC4SpC0Roy0PoisOoioNoikMoSgKoCcKoCYJoCYJoCYIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCQIoCUIoCUIoCUIoCUI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ZcR3ZcR3ZcR3ZcR3ZcR3ZcR3ZcR3ZsR4Z8R5acV6bMZ9b8eAdcmFf86OiNGVi9KYjtObj9Ock9WfltaimNekm9imndmooNqrotutpdyvqN2yqt6zq961rt+3seG6tOK9tuK+uOPAueTBu+TCveXEv+bGwefIw+jKxenLxenMxenLxOjKwujGwOe5vOWituJ5seBZr99Er98ur98eseAVsuAQueMNv+ULxOcKzusI2O8H4vIF6vUE7fYE7fYE7fYE7fYE7fYE7fYG7fYK7fYm7fdH7fdl7feI7ves7vjI7vjh7vju7/jw8Pnx8fny8vnz9Pr19vv3+Pz4+vz6+vz6+/37+/37/P38/P38/f79/f79/f79/v7+/v7+/v7+/v7+////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CP4AuQkcSLCgwYMIEypcyLChw4cQI0qcSLGixYfRPCnSQ4aMHkWeol08WEoPihcoU6JEoafUSIHH9KicOVPPsYueHNDcmdKBp4qXeApNeWmip6FIX/yEeExnUqEObj6U+XSonoelqiZ12ZCqVqFXGUY7+VUoCpELj5YdulShorVDFTH0CpdmWIVk6vIkwzCvXpp8F9JFecGN4Q9l7yZ8q9INrVyQY134Kjdt41uQM8uaXLVtwrEoTcTKTNpN1bNdCdcinRlWVcUKs764sJp1LtdPuaZWMdq26aSwFzZ94QYz6c1Jo0ZU6ziz5KeeHwZ9gcGwGxFPi1LM+dXnxZivpRuOLEmWJkvdLwVm3NjxY8j08OPLn0+/vv36AQEAIfkECQMA5AAsAAAAACoAKgCHAAAACA0CDxoEFiUGMGcPN4YUPZ0YT7YZVr0ZWb4ZW78YYMEYZMIXZcMXaMQXZMMXYMEYWb8ZTroaSLgbQ7YcQLUcPrQdOrMdNrEeMa8eLK4fKawgJqsgIakhHaghGKYiEqQjD6IkDqIkDqIkDqIkDqIkC6EkCqAkCaAkCaAkCKAkCKAkCKAkCKAkCKAkCKAkCKAkCKAkCKAkCKAkCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCqAmCqAnC6EnDKEpDqIqD6IrD6MrEaMtE6QvFaUwFqUxGaYzGqc1HKg2Hqg4H6k5IKk6Iqo7Iqo8JKo9KKxBLa1FMq5JNrBNPLJSQrVYSLddS7lgTrpiULtkUbtmVLxnVb1pVr1qV75rWb9sW8BuXcBwYMJyYsJ0Y8N1Y8N1ZMN2ZMN2ZMN2ZMN2ZMN2ZMN2ZcR3ZcR3ZcR3ZcR3ZcR3ZcR3ZcR3ZcR3ZcR3ZsR4Z8V5acV7bMZ9cMiBecuIg8+JitKDlNVynNhmottWqt1Frt81s+EptuIft+IYteETt+IQuOIOvOQNwOUMw+YLxugKyukJzOoIz+sI0uwH1u4H2e8G3PAG4fIF5vMF6vUE7PYE7fYE7fYE7fYE7fYE7fYE7fYE7fYE7fYE7fYE7fYE7fYF7PYI6vUN5/QW4vIk2vA70exYxOh8u+SWtOKpsuGysOC4suG6s+G7tOK9teK9tuO+t+O/t+PAuOPAuOPAueTBuuTCvOXDv+bGwefIw+jKxunMx+rOyerPyuvQy+vR0O3V1O7Z2fDd3vLi4vPl5vXo6Pbq6/ft7Pfu7vjv7/jw8fny9Pr19/v3+Pz5+vz6+vz6+/37+/37+/37/P38/P38/f79/f79/v7+/v7+/v7+/v7+////////////////////////////////////////////////////////////////////////////////////////////////////////////////CP4AyQkcSLCgwYMIEypcyLChw4cQI0qcSLGixYfZegmaI0bMHEG9sl08aGxOEhooU6JMMsfYSIHP5qicOXPOs4u9qNDcmZJKr4qzeApNOWtir6FIafyE+ExnUqFUbj6U+XTonIfGqiZ12ZCqVqFXGWY7+VVoEpELj5YdulShoLVDBTH0CpdmWIVi6vIUwzBvSg4OGDFyMGEt34VeMTDyxNiTpQdl7yZ8i3JxY8aTLnyVmxYlhkuXGzv42jbhWBoSQovWerYrjQqaVHsaXVWywqwgLF/OVLgqV9cSJoWm/dT2wqY0JjCaZGmw1qgR1dLgoCEE6YlB4RalmPOrz4sxaxxLHVmSLE2Wv18KzLix48eQ6uPLn0+/vv379gMCACH5BAkDAP8ALAAAAAAqACoAhwAAAAVqGAefJAefJAefJAefJAefJAefJAifJAig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0pmO05uS1J6V1qGY16Sa2Kac2Kie2amh2qyk266m3LCo3bKq3rSs3rWt37ew4Lmx4bqz4by14r22476347+448C448C55MG65MK85cO+5sXB58jD6MnE6MrF6MvF6czF6czF6czE6MjC6MTA57295a6445mz4XSv31Wr3jeo3SSn3B2p3Res3hOw3xC14Q685AzJ6QnU7Qff8Qbm9AXq9QTs9gTt9gTt9gTt9gTt9gTt9gTt9gft9g3t9hns9kDt92jt94rt96ru+Mbu+Nvv+OHw+e3y+fP0+vX3+/j8/fz9/v3+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7+/v7////////////////////////////////////////////////////////////+/v7+/v7+/v7+//7///////////////////////////////////////8I/gDHCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFh9dILcpjxkyeRaSuXTzIKk+TGChTomySh9VIgdPyqJw5M8+0i6Su0NyZ8gqpipl4Ck2ZaSKpoUhj/IQ4TWdSoVduPpT5dGieh6xQspiACxeEEFVVumwo04MuYmiJ8coQFuVVhtdO5kqbdleKtk1ELjyKgS5dCm2VMlwUY4LftBACL2Iok8JhtInbvlVoJoaHX4eDYQhshmHlGBAOR27beSFV0L7Q+hotebBKERgufAiccvFe2kOXKoyLe2desr1pTl6YNbjYqcbdMnXaO2rEo8F1QwyKuyjFnG19XoxZ1ebLcSVPFvpu+Z1gxo0dP4Ysz769+/fw48sfGRAAIfkECQMA/wAsAAAAACoAKgCHAAAABgwCDiEGFjQJNnQQPpQWRacZWLoYXr8YY8IXZMMXYsIYXsAYXL8ZWr8ZWL4ZVr0aU7waUbsaTLobSLgcRLYdQbUdPbMeOrIfN7EfNLAgMK8hLK0iKKwjIqokIKkkHqgkHKckGqclF6YlFKQmEaMnD6IoDqInDaIoDaEoDKEoC6EoCqAnCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCKAlCaAmCqEnC6EnDKEoDaIpD6IrEKMsEqQtE6QvFKQwFqUxGaYzG6c2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icKUicWUiceViMmViMuViMyViM6ViM6Vh8+Vh9CVh9CVidGXi9KYjdKajtObkNSdk9Wgltaimdekm9imndmooNqro9utptywqN2yqt60rN+2rt+3sOC5seG6s+G7tOK9teK9tuO+t+O/t+O/uOPAuOPAueTBueTBueTBueTBuuTCvOXEv+bGwefIw+jKxOjLxunNyOrOyerPyuvQzOvS0e3W1e/a2vDe4PPj5PTn5/Xp6vbs6/ft7fjv7vjw8Pjx8vnz9fv2+Pv4+fz5+vz6+vz6+/37+/37/P38/P38/P38/f79/v7+/v7+/v7+/v7+////////////////////////////////////////////////////////////////////////////////////////////////////////////////////CP4AxwkcSLCgwYMIEypcyLChw4cQI0qcSLGixYfZcnHSgwaNHk65sl08aEyPhQQoU6K0oMfYSIHP9KQUwaLFCZUp9Ty7mGtDyhc8gAitMQJngg25KrJS2UKoUyA1LhhNwGpiLpUWbjx1ymJqgqQQn/lMOWKrUxleN+x8KFNlWbNA0HrV89CYUQo24KrwitJlw7Y4WZilUYFvAroMs52c2iKH0xkgDCewIHLhVb4fUKgoITklWIWcOotOyYkh4NGSEStEg1o0GoasW0t+vfC07KmqE4a+zbe0Zd58PydUDNwo5b/FceZWaDd5Sr/InS9fKDa52oiXgQt/uJR3VYo9WyAjvRhztM6X40ouNt4SPcGMGzt+DOm+vv37+PPr3z8yIAAh+QQJAwDqACwAAAAAKgAqAIcAAAABFAUJVRMOiyARnSUToicbpy0dqC4hqS8gqTIgqTQgqTQgqTUgqTUgqTQfqTMeqDEdqDEbpzAapy8Ypi4WpS4VpC0UpC0SoywQoywPoisNoioMoSgLoScKoCcKoCYJoCYJoCYIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUIoCUInyUInyUInyUInyUInyUInyUInyUInyUInyUInyUIniUMmScYiC0wZjpISEhJSUlKSkpLS0tMTExNTU1OTk5PT09QUFBRUVFSUlJTU1NSWlBSYE5SbEhQekFPhTtOjjZNlTJMmi9LnyxKpSpKrChLsCZOtCRRuCFTuiBVux5WvB5XvR1ZvhxcvxxZvh5XvSNVvSpUvDJTvD1SvEtTvFRVvVtWvWFWvWRVvWVVvWZVvWdVvWdWvmhXvmlYvmtav2xcwG5ewXFhwnNiwnRjw3Vkw3Zkw3Zkw3Zkw3Zkw3Zkw3Zkw3ZlxHdlxHdlxHdlxHdlxHdlxHdlxHdlxHdoxXlrxnxvx4B1yoV7zIuDz5GI0ZaO05uW1qKe2ami26yl3K+n3bGp3bOq3rSs37au37ex4bqz4by2476448C55MG75MK95cS/5sfC58nE6MvF6cvG6cvF6MfE6MLD6LvC57HB55fA5nK+5U695DS/5Rq/5Q3C5gvE5wrK6QnU7Qfa7wbi8gXp9QTs9gTt9gTt9gTt9gTt9gTt9gTt9gTt9gTt9gTt9gTt9gTt9gXt9gfs9gvr9iDq9Tbo9VHn9YHo9ajo9sXp9tXp9t/q9ubq9uvq9+zr9+3s9+7t+O/v+PDy+fP0+vX2+/f5/Pn5/Pr6/Pr6/Pr7/fv7/fv8/fz8/fz+/v7+/v7+/v7+/v7+/v7+/v7///////////////////////////////////////////////////////////////////////////////////////8I/gDVCRxIsKDBgwgTKlzIsKHDhxAjSpxIsaLFh+BGUTJEh44hSqPAXTyoylAGEShTosxgSNVIgdUMqRRxhhatMzMNVbs4ioFKBLR6Ce1FC4FKBqMqbpopIuhQobSYbpo4iumXp0+/ME0KsZrPmWewDsU5k8HOhzKZmhEr1AxTEYYeqnorwgDbXgboumyY9m1YrGTfxmUI7iRdmriE4gr8NoPIhVUPp0RgVDJKrgopWd48kxLDvpw3D1ZIJ3RoOgxLm96MeiHo1XRHJ9QMW7JnyLUlY05YOHfjx659M5WtcK5wlXv5HkdJfKHX42YjRva9++HS3FMp9lyN9GLM0DpfG6oraZgpy+Ti1WXc2PFjyPTw48ufT7++/ZEBAQA7AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA"
                                                 alt="<?= $product->product_name; ?>"
                                                 title="<?= $product->product_name; ?>">
                                        </div>
                                        <a class="product-link" title="<?= $product->product_name ?>"
                                           href="<?= base_url(urlify($product->product_name, $product->id)); ?>"></a>

                                        <div class="product-caption">
                                            <?php if ($product->from_overseas == 1) : ?>
                                                <span><small><i class="fas fa-plane-arrival text-success"></i> Shipped From Overseas</small></span>
                                            <?php else : ?>
                                                <br/>
                                            <?php endif; ?>
                                            <ul class="product-caption-rating">
                                                <?php
                                                $rating_counts = $this->product->get_rating_counts($product->id);
                                                echo rating_star_generator($rating_counts);
                                                ?>
                                                <span class="text-sm pull-right"><strong><?= ($product->brand_name == 'others' || empty($product->brand_name)) ? 'Universal' : $product->brand_name; ?></strong></span>
                                            </ul>
                                            <h5 class="cs-title"><?= character_limiter(ucwords(str_replace('generic', '', $product->product_name)), 10, '...'); ?></h5>
                                            <div class="product-caption-price">
                                                <?php if (discount_check($product->discount_price, $product->start_date, $product->end_date)) : ?>
                                                    <span class="cs-price-tl"><?= ngn($product->discount_price); ?></span>
                                                    <span class="cs-price-tl-discount"><sup><?= ngn($product->sale_price); ?> </sup></span>
                                                <?php else : ?>
                                                    <span class="cs-price-tl"><?= ngn($product->sale_price); ?> </span>
                                                <?php endif; ?>

                                                <?php if (!$this->session->userdata('logged_in')) : ?>
                                                    <a href="<?= base_url('login'); ?>">
                                                        <span style="margin-right:3px;"
                                                              class="pull-right category-favorite">
                                                                <i class="fas fa-heart"
                                                                   title="Add <?= $product->product_name; ?> to your wishlist"></i>
                                                        </span>
                                                    </a>
                                                <?php else : ?>
                                                    <?php if ($this->product->is_favourited($profile->id, $product->id)) : ?>
                                                        <span style="margin-right:3px;"
                                                              class="pull-right category-favorite wishlist-btn"
                                                              data-pid="<?= $product->id; ?>">
                                                            <i class="fas fa-heart"
                                                               title="Remove <?= $product->product_name; ?> from your wishlist"></i>
                                                        </span>
                                                    <?php else : ?>
                                                        <span style="margin-right:3px;"
                                                              class="pull-right category-favorite wishlist-btn"
                                                              data-pid="<?= $product->id; ?>">
                                                            <i class="fas fa-heart"
                                                               title="Add <?= $product->product_name; ?> to your wishlist"></i>
                                                        </span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <br/>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <?= $pagination ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
        </div>
    <?php endif; ?>
    <div class="gap"></div>
    <?php $this->load->view('landing/resources/footer'); ?>
</div>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/js/ion.rangeSlider.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    if (!base_url) {
        let base_url = "<?= base_url(); ?>";
    }
    let current_url = "<?= current_url()?>";
    catalog_url = "<?= base_url('catalog/' . $category_detail->slug . '/') ?>";

</script>
<script src="<?= $this->user->auto_version('assets/js/quick-view.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<script>
    window.addEventListener('load', function () {
        let allimages = document.getElementsByTagName('img');
        for (let i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
    }, false);
    <?php //?>
    $(window).on('scroll', function() {
        if ((document.documentElement.scrollTop > 260) && (document.documentElement.scrollTop < ($('#category_body').outerHeight() - 230))) {
            $('.category-filters').css({
                "height": "96vh",
                "position":"fixed",
                "overflow-y":"scroll",
                "overflow-x":"hidden",
                "width":"280px",
                "top": 10,
            });
        } else {
            $('.category-filters').css({
                "height": "unset",
                "position":"unset",
                "overflow-y":"unset",
                "overflow-x":"unset",
                "top": "unset",
            });
        }
    });
    $("#price-range").ionRangeSlider({
        type: "double",
        min: <?= $min ?>,
        max: <?= $max; ?>,
        grid: true,
        prefix: "&#8358;",
        onFinish: function (data) {
            let main_location = window.location.href;
            let location = main_location.split("?");
            let fs = location[1];
            let nu_loc = "";
            if (fs != undefined) {
                if (main_location.indexOf("?price_min") !== -1) {
                    let reg_match = main_location.match(/price_min=(.*)&price_max=(.*)&/);
                    if (reg_match !== null) {
                        nu_loc = main_location.replace(/price_min=(.*)&price_max=(.*)&/, "");
                    } else {
                        nu_loc = main_location.replace(/\?price_min=(.*)&price_max=(.*)/, "");
                    }
                } else if (main_location.indexOf("&price_min") !== -1) {
                    let reg_match = main_location.match(/&price_min=(.*)&price_max=(.*)&/);
                    if (reg_match !== null) {
                        nu_loc = main_location.replace(/&price_min=(.*)&price_max=(.*)&/, "&");
                    } else {
                        nu_loc = main_location.replace(/&price_min=(.*)&price_max=(.*)/, "");
                    }
                }
                let test_location = nu_loc.split("?");
                if (test_location[1] === undefined) {
                    window.location = nu_loc + '?price_min=' + data.from + '&price_max=' + data.to;
                } else {
                    window.location = nu_loc + '&price_min=' + data.from + '&price_max=' + data.to;
                }
            } else {
                window.location = catalog_url + '?price_min=' + data.from + '&price_max=' + data.to;
            }
        }
    });

    let my_range = $("#price-range").data("ionRangeSlider");
    let min = '<?= $price_min; ?>';
    let max = '<?= $price_max; ?>';
    if (min != '' && max != '') {
        my_range.update({
            from: min,
            to: max
        });
    }

    $('.wishlist-btn').on('click', function () {
        let product_id = $(this).data('pid');
        let _this = $(this);
        $.ajax({
            url: base_url + 'ajax/favourite',
            method: 'POST',
            data: {
                id: product_id
            },
            success: response => {
                let parsed_response = JSON.parse(response);
                if (parsed_response.action === 'remove') {
                    _this.removeClass('category-favorite-active').addClass('.category-favorite');
                    _this.find('i').attr('title', 'Add to your wishlist');

                } else {
                    _this.removeClass('category-favorite').addClass('.category-favorite-active');
                    _this.find('i').attr('title', 'Remove from your wishlist');

                }
                notification_message(parsed_response.msg, 'fa fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('Sorry an error occurred please try again. ', 'fa fa-info-circle', error);
            }
        })
    });

    $(document).ready(function () {
        let main_location = window.location.href;
        let location = main_location.split("?");
        let filtering_settings = location[1];
        if (filtering_settings != undefined) {
            let fs_array = filtering_settings.split("&");
            for (let w = 0; w < fs_array.length; w++) {
                let kv = fs_array[w].split("=");
                let checks = kv[1].split(",");
                for (let z = 0; z < checks.length; z++) {
                    $("#" + (unescape(checks[z]).toLowerCase()).replace(/\s+/g, '_')).prop("checked", true);
                }
            }
        }

        function load_page(url) {
            window.location = url;
        }

        let url = '';
        let filter_string = '';
        let filter_list = {};
        $('.filter').change(function () {
            let location = main_location.split("?");
            let filtering_settings = location[1];
            if (filtering_settings != undefined) {
                let fs_array = filtering_settings.split("&");
                for (let w = 0; w < fs_array.length; w++) {
                    let kv = fs_array[w].split("=");
                    let key = kv[0];
                    filter_list[key] = kv[1].split(",");
                }
            }
            <?php // console.log("fiter_list" + JSON.stringify(filter_list));?>
            filter_string = '';
            let value = $(this).data('value');
            let key = $(this).data('type');
            if (filter_list[key]) {
                if (jQuery.inArray(escape(value), filter_list[key]) !== -1) {
                    let index = filter_list[key].indexOf(escape(value));
                    filter_list[key].splice(index, 1);
                    if (filter_list[key].length < 1) {
                        delete filter_list[key];
                    }
                } else {
                    filter_list[key].push(value)
                }
            } else {
                filter_list[key] = [value];
            }
            console.log(filter_list);
            url = '';
            jQuery.each(filter_list, function (obj) {
                filter_string = '';
                jQuery.each(filter_list[obj], function (id, values) {
                    if (filter_string === '') {
                        filter_string += values;
                    } else {
                        filter_string += ',' + values;
                    }
                });
                if (url === '') {
                    url += `?${obj}=${filter_string}`
                } else {
                    url += `&${obj}=${filter_string}`
                }
                <?php // console.log(url);
                // console.log("fiter_list after" + JSON.stringify(filter_list));?>
            });
            url = (url === "") ? catalog_url : url;
            load_page(url);
        });

        $('#clear_filter').on('click', function () {
            window.location = catalog_url;
        });
    });
</script>
</body>
</html>
