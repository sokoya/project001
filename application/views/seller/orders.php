<?php $this->load->view('seller/templates/meta_tags'); ?>
</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">
    <!--NAVBAR-->
    <!--===================================================-->
    <?php $this->load->view('seller/templates/head_navbar'); ?>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">
            <div id="page-head">
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Product</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                <!--Breadcrumb-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <ol class="breadcrumb">
                    <li><a href="#"><i class="demo-pli-home"></i></a></li>
                    <li><a href="#">Manage</a></li>
                    <li class="active"><?= cleanit($this->uri->segment(2)); ?> products</li>
                </ol>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End breadcrumb-->
            </div>
            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Showing all <?= ucfirst($this->uri->segment(3)) ?> order</h3>
                    </div>
                    <div class="panel-body">
                        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th colspan="2">Product Name</th>
                                <th>Buyer's name</th>
                                <th class="min-tablet">Ordered On</th>
                                <th class="min-tablet">Qty (Amount)</th>
                                <td class="min-tablet">Order Desc.</td>
                                <th class="min-desktop">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($orders as $order) : ?>
                                <tr>
                                    <td colspan="2">
                                        <span><img width="65" src="<?= base_url('data/products/'. $order->pid .'/'. $order->image_name); ?>"></span>
                                        <?= $order->product_name; ?>
                                        <a href="<?= base_url('seller/order/detail/'. $order->orid); ?>"></a>
                                    </td>
                                    <th><?= $order->customer_name; ?></th>
                                    <td><?= neatDate($order->order_date); ?></td>
                                    <td><?= $order->qty .'<span class="text text-danger"> ( ' . ngn($order->amount) .' )</span>'; ?></td>
                                    <td><?= $order->product_desc; ?></td>
                                    <td><i class="fa fa-plus"></i></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End page content-->

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->



        <!--ASIDE-->
        <!--===================================================-->
        <?php $this->load->view('seller/templates/aside_menu'); ?>
        <!--===================================================-->
        <!--END ASIDE-->

        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <?php $this->load->view('seller/templates/menu'); ?>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

    </div>


    <!-- FOOTER -->
    <!--===================================================-->
    <?php $this->load->view('seller/templates/footer'); ?>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--JAVASCRIPT-->
<!--=================================================-->


<?php $this->load->view('seller/templates/scripts'); ?>
<script>
    $(document).ready(function (x) {
        $('#demo-dt-basic').dataTable( {
            "responsive": true,
            "language": {
                "paginate": {
                    "previous": '<i class="demo-psi-arrow-left"></i>',
                    "next": '<i class="demo-psi-arrow-right"></i>'
                }
            }
        } );
    });
</script>
</body>
</html>
