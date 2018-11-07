<!DOCTYPE HTML>
<html>
<head>
    <title><?= !isset($title) ? 'Welcome ' : ucwords($title) ?> | <?= lang('app_name'); ?></title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="<?= !empty($keywords) ? ucwords($keywords) : ''; ?>" />
    <meta name="description" content="<?= !empty($description) ? $description : ''; ?>">
    <meta name="robots" content="nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url('assets/landing/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/landing/css/font-awesome.css');?>">
    <link rel="shortcut icon" href="<?= base_url('assets/landing/img/favicon.png'); ?>" type="image/png">
    <style>
        #invoice{
            padding: 30px;
        }
        a{
            color:#49a251;
        }
        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #49a251
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #49a251
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #49a251
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td,.invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: #49a251;
            font-size: 1.2em
        }

        .invoice table .qty,.invoice table .total,.invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: #49a251
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: #49a251;
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #49a251;
            font-size: 1.4em;
            border-top: 1px solid #49a251
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px!important;
                overflow: hidden!important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice>div:last-child {
                page-break-before: always
            }
        }
    </style>
</head>
<body>
<div id="invoice" class="container-fluid">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
<!--            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>-->
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div class="main_invoice">
            <header>
                <div class="row">
                    <div class="col-md-6">
                        <a target="_blank" href="https://lobianijs.com">
                            <img style="height:100px;" src="<?= base_url('assets/landing/img/onitshamarket-logo.png'); ?>" data-holder-rendered="true" class="img-responsive" />
                        </a>
                    </div>
                    <div class="col-md-6 company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                                OnitshaMarket
                            </a>
                        </h2>
                        <div>530A, Aina Akingbala Street, Ikeja, Lagos, NG.</div>
                        <div>(123) 456-789</div>
                        <div>www.onitshamarket.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">John Doe</h2>
                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                        <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: 01/10/2018</div>
                        <div class="date">Due Date: 30/10/2018</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-left">PRODUCT</th>
                        <th class="text-right">QUANTITY</th>
                        <th class="text-right">HOURS</th>
                        <th class="text-right">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="no">04</td>
                        <td class="text-left"><h3>
                                <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                                    Youtube channel
                                </a>
                            </h3>
                            <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                                Useful videos
                            </a>
                            to improve your Javascript skills. Subscribe and stay tuned :)
                        </td>
                        <td class="unit">$0.00</td>
                        <td class="qty">100</td>
                        <td class="total">$0.00</td>
                    </tr>
                    <tr>
                        <td class="no">01</td>
                        <td class="text-left"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
                        <td class="unit">$40.00</td>
                        <td class="qty">30</td>
                        <td class="total">$1,200.00</td>
                    </tr>
                    <tr>
                        <td class="no">02</td>
                        <td class="text-left"><h3>Website Development</h3>Developing a Content Management System-based Website</td>
                        <td class="unit">$40.00</td>
                        <td class="qty">80</td>
                        <td class="total">$3,200.00</td>
                    </tr>
                    <tr>
                        <td class="no">03</td>
                        <td class="text-left"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
                        <td class="unit">$40.00</td>
                        <td class="qty">20</td>
                        <td class="total">$800.00</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">SUBTOTAL</td>
                        <td>$5,200.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">TAX 25%</td>
                        <td>$1,300.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">GRAND TOTAL</td>
                        <td>$6,500.00</td>
                    </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A copy of this invoice has been sent to the email attached to your account.</div>
                </div>
            </main>
            <footer>
                 <p style="font-size: 14px;">&copy; ontishamarket.com</p>
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
</body>
<script src="<?= base_url('assets/landing/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/landing/js/bootstrap.js'); ?>"></script>

<script>
    $('#printInvoice').click(function(){
        Popup($('.invoice')[0].outerHTML);
        function Popup(data)
        {
            window.print();
            return true;
        }
    });
</script>
</html>