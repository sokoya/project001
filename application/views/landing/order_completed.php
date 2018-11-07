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
                    <div class="col-xs-12 col-md-offset-5 text-center">
                        <a target="_blank" href="javascript:void(0);">
                            <img style="height:100px;" src="<?= base_url('assets/landing/img/onitshamarket-logo.png'); ?>" data-holder-rendered="true" class="img-responsive" />
                        </a>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col-md-6 invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to"><?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?></h2>
                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                        <div class="email"><a href="mailto:john@example.com"><?= $profile->email?></a></div>
                    </div>
                    <div class="col-md-6 invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: <span class="invoice_date"></span></div>
                        <div class="date">Due Date: <span class="invoice_due"></span></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0" class="table-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-left">PRODUCT</th>
                        <th class="text-right">QUANTITY</th>
                        <th class="text-right">PRICE</th>
                        <th class="text-right">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="no">01</td>
                        <td class="text-left"><h3>iPhone X
                            </h3>
                            to improve your Javascript skills. Subscribe and stay tuned :)
                        </td>
                        <td class="qty">100</td>
                        <td class="unit">$0.00</td>
                        <td class="total">$0.00</td>
                    </tr>
                    <tr>
                        <td class="no">02</td>
                        <td class="text-left"><h3>Samsung S9+</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
                        <td class="qty">30</td>
                        <td class="unit">$40.00</td>
                        <td class="total">$1,200.00</td>
                    </tr>
                    <tr>
                        <td class="no">03</td>
                        <td class="text-left"><h3>Acer Aspire Edge 5</h3>Developing a Content Management System-based Website</td>
                        <td class="qty">80</td>
                        <td class="unit">$40.00</td>
                        <td class="total">$3,200.00</td>
                    </tr>
                    <tr>
                        <td class="no">04</td>
                        <td class="text-left"><h3>Synix Smart T.V.</h3>Optimize the site for search engines (SEO)</td>
                        <td class="qty">20</td>
                        <td class="unit">$40.00</td>
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
    (function(){
        var fullDate = new Date();
        var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);

        var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
        console.log(currentDate);
        $('.invoice_date').text(currentDate);
    })();
    $('.invoice_due').text(currentDate);
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