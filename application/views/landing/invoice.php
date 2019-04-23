<?php $this->load->view('landing/resources/head_base'); ?>
<link rel="stylesheet" href="<?= $this->user->auto_version(base_url('assets/css/home.css')); ?>">
<style>
    .heading-red{
        color: #ff3434;
        font-weight: bold;
    }

    hr.divider {
        border-color: #49a251;
        height: 3px;
    }

    table {
        border: 1px solid #49a251;
        border-collapse: collapse;
    }
    th,
    td {
        border: 1px solid #49a251;
        width: 100%;
        padding: 5px;
    }

    td > img {
        width: 60%;
        align-content: center;
    }


</style>
</head>
<body style="background: #fff;">
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;">
    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>


    <div class="container">
        <div class="gap-big"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 table-responsive">

                <table align="center" border=0" cellpadding="0" cellspacing="0" width="600"
                       style="border-collapse: collapse;border: 1px solid #cccccc;">

                    <tr>
                        <td align="center" style="padding: 10px 0 10px 0; display: block">
                            <img src="<?= base_url('assets/img/onitshamarket-logo.png'); ?>" alt="Onitsha market logo" width="150"
                                 height="44"/>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 30px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
                            <p>Dear Sokoya,</p>
                            <p>Thank you for shopping with us. Your order <b>345456929</b> has been placed successfully  here is the
                                summary of the order:
                            </p>
                            <p>If you have any questions about this order, please contact us at <b>++234 813 680 3006</b>
                                Remember to include your reference number - <b>345456929</b> when contacting us.</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 3px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
                            <p><b>You ordered for:</b></p>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%"
                                   style="border-collapse: collapse; border: 1px solid #cccccc;">
                                <thead>
                                <tr>
                                    <th style="background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px"></th>
                                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                        ITEM
                                    </th>
                                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                        QUANTITY
                                    </th>
                                    <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                        PRICE
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td align="center">
                                        <img src="https://res.cloudinary.com/onitshamarket/image/upload/q_auto/f_auto/onitshamarket/product/kr8bqhraihjfneyynmvi.jpg"
                                             alt="image" height="80" width="80"/></td>
                                    <td width="50%" align="center">Lontor Rechargeable Lamp With An In-Built Power Bank</td>
                                    <td align="center">1</td>
                                    <td align="center">₦ 2,970</td>
                                </tr>
                                </tbody>
                            </table>
                            <br/>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%"
                                   style="font-size: 13px;border-collapse: collapse; border: 1px solid #cccccc">
                                <tr>
                                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>SHIPPING COST: Courier (DHL)</b></td>
                                    <td style="padding: 6px 6px 6px 6px" align="right">₦ 1,300</td>
                                </tr>
                                    <td style="padding: 6px 6px 6px 6px; font-size: 12px"><b>DATE ORDERED</b></td>
                                    <td style="padding: 6px 6px 6px 6px" align="right">Prepaid</td>
                                </tr>
                            </table>
                            <p>If you would like to know more about our services, please also refer to these FAQs from our
                                customers.</p>
                            <p>Happy Shopping!</p>
                            <p><b>Onitshamarket Team</b></p>
                        </td>
                    </tr>

                    <tr style="color: #153643; font-family: Arial, sans-serif; font-size: 12px;">
                        <td style="padding: 10px 10px 10px 10px; border: 1px solid #cccccc;" align="center">
                            Schoolville Limited, 530A Aina Akingbala Street, omole phase 2. Ikeja, Lagos State, Ikeja, Lagos, 282828,
                            Nigeria, https://www.onitshamarket.com
                        </td>
                    </tr>

                </table>

            </div>
        </div>
    </div>

    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
        <?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/footer'); ?>
        <?php $this->load->view('landing/resources/script'); ?>
    <?php endif; ?>
</div>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript">

</script>
<script>

</script>
</body>
</html>
