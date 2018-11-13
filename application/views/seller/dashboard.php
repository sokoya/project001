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
                    
<div class="pad-all text-center">
    <h3>Hello <?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?></h3>
    <p>Welcome back to your dashboard!</p>
</div>
                    </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-bordered-info panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="demo-psi-cart-coin icon-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">241</p>
                                    <p class="mar-no">Orders</p>
                                    <!--Sparkline pie chart -->
                                    <div>
                                        <div class="pad-all">
                                            <p class="mar-no">
                                                <span class="pull-right text-bold">34</span> Completed
                                            </p>
                                            <p class="mar-no">
                                                <span class="pull-right text-bold">79</span> Total
                                            </p>
                                        </div>
                                        <div class="pad-all">
                                            <div class="pad-btm">
                                                <div class="progress progress-sm">
                                                    <div style="width: 45%;" class="progress-bar progress-bar-info">
                                                        <span class="sr-only">45%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pad-btm">
                                                <div class="progress progress-sm">
                                                    <div style="width: 89%;" class="progress-bar progress-bar-info">
                                                        <span class="sr-only">89%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-bordered-mint panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="demo-psi-credit-card-2 icon-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">2841</p>
                                    <p class="mar-no">Sales</p>
                                    <!--Sparkline pie chart -->
                                    <div>
                                        <div class="pad-all">
                                            <p class="mar-no">
                                                <span class="pull-right text-bold">34</span> Completed
                                            </p>
                                            <p class="mar-no">
                                                <span class="pull-right text-bold">79</span> Total
                                            </p>
                                        </div>
                                        <div class="pad-all">
                                            <div class="pad-btm">
                                                <div class="progress progress-sm">
                                                    <div style="width: 45%;" class="progress-bar progress-bar-mint">
                                                        <span class="sr-only">45%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pad-btm">
                                                <div class="progress progress-sm">
                                                    <div style="width: 89%;" class="progress-bar progress-bar-mint">
                                                        <span class="sr-only">89%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-bordered-purple panel-colorful media middle pad-all">
                                <div class="media-left">
                                    <div class="pad-hor">
                                        <i class="demo-psi-refresh icon-3x"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-semibold">1</p>
                                    <p class="mar-no">Disputes</p>
                                    <!--Sparkline pie chart -->
                                    <div>
                                        <div class="pad-all">
                                            <p class="mar-no">
                                                <span class="pull-right text-bold">34</span> Completed
                                            </p>
                                            <p class="mar-no">
                                                <span class="pull-right text-bold">79</span> Total
                                            </p>
                                        </div>
                                        <div class="pad-all">
                                            <div class="pad-btm">
                                                <div class="progress progress-sm">
                                                    <div style="width: 45%;" class="progress-bar progress-bar-purple">
                                                        <span class="sr-only">45%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pad-btm">
                                                <div class="progress progress-sm">
                                                    <div style="width: 89%;" class="progress-bar progress-bar-purple">
                                                        <span class="sr-only">89%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
					    <div class="row">
					        <div class="col-lg-7">
					            <div id="demo-panel-network" class="panel">
					                <div class="panel-heading">
					                    <div class="panel-control">
					                        <button id="demo-panel-network-refresh" class="btn btn-default btn-active-primary" data-toggle="panel-overlay" data-target="#demo-panel-network"><i class="demo-psi-repeat-2"></i></button>
					                        <div class="dropdown">
					                            <button class="dropdown-toggle btn btn-default btn-active-primary" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical"></i></button>
					                            <ul class="dropdown-menu dropdown-menu-right">
					                                <li><a href="#">Action</a></li>
					                                <li><a href="#">Another action</a></li>
					                                <li><a href="#">Something else here</a></li>
					                                <li class="divider"></li>
					                                <li><a href="#">Separated link</a></li>
					                            </ul>
					                        </div>
					                    </div>
					                    <h3 class="panel-title">Sales Track</h3>
					                </div>
					
					
					                <!--chart placeholder-->
					                <div class="pad-all">
					                    <div id="demo-chart-network" style="height: 255px"></div>
					                </div>
					
					
					                <!--Chart information-->
					                <div class="panel-body">
					
					                    <div class="row">
					                        <div class="col-lg-8">
					                            <p class="text-semibold text-uppercase text-main">CPU Temperature</p>
					                            <div class="row">
					                                <div class="col-xs-5">
					                                    <div class="media">
					                                        <div class="media-left">
					                                            <span class="text-3x text-thin text-main">43.7</span>
					                                        </div>
					                                        <div class="media-body">
					                                            <p class="mar-no">°C</p>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="col-xs-7 text-sm">
					                                    <p>
					                                        <span>Min Values</span>
					                                        <span class="pad-lft text-semibold">
					                                        <span class="text-lg">27°</span>
					                                        <span class="labellabel-success mar-lft">
					                                            <i class="pci-caret-down text-success"></i>
					                                            <smal>- 20</smal>
					                                        </span>
					                                        </span>
					                                    </p>
					                                    <p>
					                                        <span>Max Values</span>
					                                        <span class="pad-lft text-semibold">
					                                        <span class="text-lg">69°</span>
					                                        <span class="labellabel-danger mar-lft">
					                                            <i class="pci-caret-up text-danger"></i>
					                                            <smal>+ 57</smal>
					                                        </span>
					                                        </span>
					                                    </p>
					                                </div>
					                            </div>
					
					                            <hr>
					
					                            <div class="pad-rgt">
					                                <p class="text-semibold text-uppercase text-main">Today Tips</p>
					                                <p class="text-muted mar-top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
					                            </div>
					                        </div>
					
					                        <div class="col-lg-4">
					                            <p class="text-uppercase text-semibold text-main">Bandwidth Usage</p>
					                            <ul class="list-unstyled">
					                                <li>
					                                    <div class="media pad-btm">
					                                        <div class="media-left">
					                                            <span class="text-2x text-thin text-main">754.9</span>
					                                        </div>
					                                        <div class="media-body">
					                                            <p class="mar-no">Mbps</p>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li class="pad-btm">
					                                    <div class="clearfix">
					                                        <p class="pull-left mar-no">Income</p>
					                                        <p class="pull-right mar-no">70%</p>
					                                    </div>
					                                    <div class="progress progress-sm">
					                                        <div class="progress-bar progress-bar-info" style="width: 70%;">
					                                            <span class="sr-only">70% Complete</span>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li>
					                                    <div class="clearfix">
					                                        <p class="pull-left mar-no">Outcome</p>
					                                        <p class="pull-right mar-no">10%</p>
					                                    </div>
					                                    <div class="progress progress-sm">
					                                        <div class="progress-bar progress-bar-primary" style="width: 10%;">
					                                            <span class="sr-only">10% Complete</span>
					                                        </div>
					                                    </div>
					                                </li>
					                            </ul>
					                        </div>
					                    </div>
					                </div>
					
					
					            </div>
					            <!--===================================================-->
					            <!--End network line chart-->
					
					        </div>
					        <div class="col-lg-5">

                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Order Status</h3>
                                    </div>

                                    <!--Data Table-->
                                    <!--===================================================-->
                                    <div class="panel-body">
                                        <div class="pad-btm form-inline">
                                            <div class="row">
                                                <div class="col-sm-6 table-toolbar-left">
                                                    <button class="btn btn-purple"><i class="demo-pli-add icon-fw"></i>Add</button>
                                                    <button class="btn btn-default"><i class="demo-pli-printer icon-lg"></i></button>
                                                    <div class="btn-group">
                                                        <button class="btn btn-default"><i class="demo-pli-information icon-lg"></i></button>
                                                        <button class="btn btn-default"><i class="demo-pli-trash icon-lg"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 table-toolbar-right">
                                                    <div class="form-group">
                                                        <input type="text" autocomplete="off" class="form-control" placeholder="Search" id="demo-input-search2">
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-default"><i class="demo-pli-download-from-cloud icon-lg"></i></button>
                                                        <div class="btn-group dropdown">
                                                            <button class="btn btn-default btn-active-primary dropdown-toggle" data-toggle="dropdown">
                                                                <i class="demo-pli-dot-vertical icon-lg"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Invoice</th>
                                                    <th>User</th>
                                                    <th>Order date</th>
                                                    <th>Amount</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Tracking Number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53431</a></td>
                                                    <td>Steve N. Horton</td>
                                                    <td><span class="text-muted">Oct 22, 2014</span></td>
                                                    <td>$45.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-success">Paid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53432</a></td>
                                                    <td>Charles S Boyle</td>
                                                    <td><span class="text-muted">Oct 24, 2014</span></td>
                                                    <td>$245.30</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-info">Shipped</div>
                                                    </td>
                                                    <td class="text-center">CGX0089734531</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53433</a></td>
                                                    <td>Lucy Doe</td>
                                                    <td><span class="text-muted">Oct 24, 2014</span></td>
                                                    <td>$38.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-info">Shipped</div>
                                                    </td>
                                                    <td class="text-center">CGX0089934571</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53434</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td><span class="text-muted">Oct 15, 2014</span></td>
                                                    <td>$77.99</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-info">Shipped</div>
                                                    </td>
                                                    <td class="text-center">CGX0089734574</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53435</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td><span class="text-muted">Oct 12, 2014</span></td>
                                                    <td>$18.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-success">Paid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53437</a></td>
                                                    <td>Charles S Boyle</td>
                                                    <td><span class="text-muted">Oct 17, 2014</span></td>
                                                    <td>$658.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-danger">Refunded</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #536584</a></td>
                                                    <td>Scott S. Calabrese</td>
                                                    <td><span class="text-muted">Oct 19, 2014</span></td>
                                                    <td>$45.58</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-warning">Unpaid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr class="new-section-xs">
                                        <div class="pull-right">
                                            <ul class="pagination text-nowrap mar-no">
                                                <li class="page-pre disabled">
                                                    <a href="#">&lt;</a>
                                                </li>
                                                <li class="page-number active">
                                                    <span>1</span>
                                                </li>
                                                <li class="page-number">
                                                    <a href="#">2</a>
                                                </li>
                                                <li class="page-number">
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <span>...</span>
                                                </li>
                                                <li class="page-number">
                                                    <a href="#">9</a>
                                                </li>
                                                <li class="page-next">
                                                    <a href="#">&gt;</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--===================================================-->
                                    <!--End Data Table-->

                                </div>
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
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">
                            
                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab (Contact list)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-warning">3</span> Family
                                    </p>

                                    <!--Family-->
                                    <div class="list-group bg-trans">
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/2.png" alt="Profile Picture">
												<i class="badge badge-success badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Stephen Tran</p>
							                    <small class="text-muteds">Availabe</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/7.png" alt="Profile Picture">
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Brittany Meyer</p>
							                    <small class="text-muteds">I think so</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/1.png" alt="Profile Picture">
												<i class="badge badge-info badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Jack George</p>
							                    <small class="text-muteds">Last Seen 2 hours ago</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/4.png" alt="Profile Picture">
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Donald Brown</p>
							                    <small class="text-muteds">Lorem ipsum dolor sit amet.</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/8.png" alt="Profile Picture">
												<i class="badge badge-warning badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Betty Murphy</p>
							                    <small class="text-muteds">Idle</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="img/profile-photos/9.png" alt="Profile Picture">
												<i class="badge badge-danger badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Samantha Reid</p>
							                    <small class="text-muteds">Offline</small>
							                </div>
							            </a>
                                    </div>

                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-success">Offline</span> Friends
                                    </p>

                                    <!--Works-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                        </a>
                                    </div>


                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">News</p>

                                    <div class="pad-hor">
                                        <p>Lorem ipsum dolor sit amet, consectetuer
                                            <a data-title="45%" class="add-tooltip text-semibold text-main" href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                        </p>
                                        <small><em>Last Update : Des 12, 2014</em></small>
                                    </div>


                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab (Contact list)-->


                                <!--Second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">

                                    <!--Monthly billing-->
                                    <div class="pad-all">
                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">Billing &amp; reports</p>
                                        <p>Get <strong class="text-main">$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2018.</p>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pad-all">
                                        <span class="pad-ver text-main text-sm text-uppercase text-bold">Amount Due On</span>
                                        <p class="text-sm">August 17, 2018</p>
                                        <p class="text-2x text-thin text-main">$83.09</p>
                                        <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                    </div>


                                    <hr>

                                    <p class="pad-all text-main text-sm text-uppercase text-bold">Additional Actions</p>

                                    <!--Simple Menu-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item"><i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                        <a href="#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                    </div>


                                    <hr>

                                    <div class="text-center">
                                        <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                        Questions?
                                        <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                        <small><em>We are here 24/7</em></small>
                                    </div>
                                </div>
                                <!--End second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Third tab (Settings)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-3">
                                    <ul class="list-group bg-trans">
                                        <li class="pad-top list-header">
                                            <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                                <label for="demo-switch-1"></label>
                                            </div>
                                            <p class="mar-no text-main">Show my personal status</p>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                                <label for="demo-switch-2"></label>
                                            </div>
                                            <p class="mar-no text-main">Show offline contact</p>
                                            <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                                <label for="demo-switch-3"></label>
                                            </div>
                                            <p class="mar-no text-main">Invisible mode </p>
                                            <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                        </li>
                                    </ul>


                                    <hr>

                                    <ul class="list-group pad-btm bg-trans">
                                        <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                                <label for="demo-switch-4"></label>
                                            </div>
                                            Online status
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                                <label for="demo-switch-5"></label>
                                            </div>
                                            Show offline contact
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                                <label for="demo-switch-6"></label>
                                            </div>
                                            Show my device icon
                                        </li>
                                    </ul>



                                    <hr>

                                    <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                    <div class="pad-all">
                                        <p class="text-main">Upgrade Progress</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                        </div>
                                        <small>15% Completed</small>
                                    </div>
                                    <div class="pad-hor">
                                        <p class="text-main">Database</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                        </div>
                                        <small>17/23 Database</small>
                                    </div>

                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Third tab (Settings)-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
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



    <?php $this->load->view('seller/templates/scripts'); ?>
</body>
</html>
