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
                    <div class="col-lg-6">
                        <div id="demo-panel-network" class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sales Track</h3>
                            </div>


                            <!--chart placeholder-->


                            <!--Chart information-->
                            <div class="panel-body">

                                <div class="row" style="padding-right:20px;">
                                    <div id="demo-morris-line-legend" class="text-center"></div>
                                    <div id="demo-morris-line"
                                         style="height: 268px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <svg height="268" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                             style="width:100%;overflow: hidden; position: relative; left: -0.5px;">
                                            <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Onitshamarket.com
                                            </desc>
                                            <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                            <text x="33.90625" y="231" text-anchor="end" font="10px &quot;Arial&quot;"
                                                  stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0
                                                </tspan>
                                            </text>
                                            <path fill="none" stroke="#000000" d="M46.40625,231H639"
                                                  stroke-opacity="0.1" stroke-width="0.5"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <text x="33.90625" y="179.5" text-anchor="end" font="10px &quot;Arial&quot;"
                                                  stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    7.5
                                                </tspan>
                                            </text>
                                            <path fill="none" stroke="#000000" d="M46.40625,179.5H639"
                                                  stroke-opacity="0.1" stroke-width="0.5"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <text x="33.90625" y="128" text-anchor="end" font="10px &quot;Arial&quot;"
                                                  stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    15
                                                </tspan>
                                            </text>
                                            <path fill="none" stroke="#000000" d="M46.40625,128H639"
                                                  stroke-opacity="0.1" stroke-width="0.5"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <text x="33.90625" y="76.5" text-anchor="end" font="10px &quot;Arial&quot;"
                                                  stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    22.5
                                                </tspan>
                                            </text>
                                            <path fill="none" stroke="#000000" d="M46.40625,76.5H639"
                                                  stroke-opacity="0.1" stroke-width="0.5"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <text x="33.90625" y="25" text-anchor="end" font="10px &quot;Arial&quot;"
                                                  stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    30
                                                </tspan>
                                            </text>
                                            <path fill="none" stroke="#000000" d="M46.40625,25H639" stroke-opacity="0.1"
                                                  stroke-width="0.5"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <text x="514.2434210526317" y="243.5" text-anchor="middle"
                                                  font="10px &quot;Arial&quot;" stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal"
                                                  transform="matrix(1,0,0,1,0,6)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    2005
                                                </tspan>
                                            </text>
                                            <text x="451.8651315789474" y="243.5" text-anchor="middle"
                                                  font="10px &quot;Arial&quot;" stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal"
                                                  transform="matrix(1,0,0,1,0,6)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    2003
                                                </tspan>
                                            </text>
                                            <text x="389.4868421052632" y="243.5" text-anchor="middle"
                                                  font="10px &quot;Arial&quot;" stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal"
                                                  transform="matrix(1,0,0,1,0,6)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    2001
                                                </tspan>
                                            </text>
                                            <text x="327.10855263157896" y="243.5" text-anchor="middle"
                                                  font="10px &quot;Arial&quot;" stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal"
                                                  transform="matrix(1,0,0,1,0,6)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    2009
                                                </tspan>
                                            </text>
                                            <text x="264.73026315789474" y="243.5" text-anchor="middle"
                                                  font="10px &quot;Arial&quot;" stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal"
                                                  transform="matrix(1,0,0,1,0,6)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    2007
                                                </tspan>
                                            </text>
                                            <text x="202.35197368421052" y="243.5" text-anchor="middle"
                                                  font="10px &quot;Arial&quot;" stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal"
                                                  transform="matrix(1,0,0,1,0,6)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    2005
                                                </tspan>
                                            </text>
                                            <text x="139.9736842105263" y="243.5" text-anchor="middle"
                                                  font="10px &quot;Arial&quot;" stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal"
                                                  transform="matrix(1,0,0,1,0,6)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    2003
                                                </tspan>
                                            </text>
                                            <text x="77.59539473684211" y="243.5" text-anchor="middle"
                                                  font="10px &quot;Arial&quot;" stroke="none" fill="#8f9ea6"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 11px sans-serif;"
                                                  font-size="11px" font-family="sans-serif" font-weight="normal"
                                                  transform="matrix(1,0,0,1,0,6)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                    2001
                                                </tspan>
                                            </text>
                                            <path fill="none" stroke="#177bbb"
                                                  d="M46.40625,107.4C54.20353618421053,97.10000000000001,69.79810855263159,58.47500000000002,77.59539473684211,66.20000000000002C85.39268092105263,73.92500000000001,100.9872532894737,158.89999999999998,108.78453947368422,169.2C116.58182565789474,179.49999999999997,132.17639802631578,152.03333333333336,139.9736842105263,148.60000000000002C147.77097039473682,145.16666666666669,163.36554276315792,150.3166666666667,171.16282894736844,141.73333333333335C178.96011513157896,133.15000000000003,194.5546875,78.21666666666667,202.35197368421052,79.93333333333334C210.14925986842104,81.65,225.7438322368421,158.9,233.54111842105263,155.46666666666667C241.33840460526315,152.03333333333333,256.9329769736842,53.324999999999996,264.73026315789474,52.46666666666667C272.52754934210526,51.608333333333334,288.12212171052636,142.5916666666667,295.9194078947369,148.60000000000002C303.7166940789474,154.60833333333335,319.31126644736844,103.10833333333333,327.10855263157896,100.53333333333333C334.9058388157895,97.95833333333333,350.5004111842105,132.29166666666666,358.29769736842104,128C366.09498355263156,123.70833333333333,381.68955592105266,61.05000000000001,389.4868421052632,66.20000000000002C397.2841282894737,71.35000000000001,412.87870065789474,158.9,420.67598684210526,169.2C428.4732730263158,179.5,444.0678453947369,152.03333333333336,451.8651315789474,148.60000000000002C459.6624177631579,145.16666666666669,475.25699013157896,150.31666666666666,483.0542763157895,141.73333333333335C490.8515625,133.15,506.44613486842115,81.65,514.2434210526317,79.93333333333334C522.0407072368422,78.21666666666667,537.6352796052632,131.43333333333334,545.4325657894738"
                                                  stroke-width="2"
                                                  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <circle cx="46.40625" cy="107.4" r="4" fill="#177bbb" stroke="#ffffff"
                                                    stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="77.59539473684211" cy="66.20000000000002" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="108.78453947368422" cy="169.2" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="139.9736842105263" cy="148.60000000000002" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="171.16282894736844" cy="141.73333333333335" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="202.35197368421052" cy="79.93333333333334" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="233.54111842105263" cy="155.46666666666667" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="264.73026315789474" cy="52.46666666666667" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="295.9194078947369" cy="148.60000000000002" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="327.10855263157896" cy="100.53333333333333" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="358.29769736842104" cy="128" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="389.4868421052632" cy="66.20000000000002" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="420.67598684210526" cy="169.2" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="451.8651315789474" cy="148.60000000000002" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="483.0542763157895" cy="141.73333333333335" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="514.2434210526317" cy="79.93333333333334" r="4" fill="#177bbb"
                                                    stroke="#ffffff" stroke-width="1"
                                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                        </svg>
                                        <div class="morris-hover morris-default-style"
                                             style="left: 585.391px; top: 36px; display: none;">
                                            <div class="morris-hover-row-label">2009</div>
                                            <div class="morris-hover-point" style="color: #177bbb">
                                                value:
                                                19
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <p class="text-semibold text-uppercase text-main">Today</p>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <span class="text-3x text-thin text-main"
                                                              style="font-size:18px;font-weight:bolder;">&#8358; 25,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="col-xs-12 text-sm" style="margin-top:5px;">
                                            <p>
                                                <span>Min Sale</span>
                                                <span class="pad-lft text-semibold">
					                                        <span class="text-lg">&#8358;22,000</span>
					                                        <span class="labellabel-danger mar-lft">
					                                            <i class="pci-caret-down text-success"></i>
					                                            <smal>+ &#8358;3000</smal>
					                                        </span>
					                                        </span>
                                            </p>
                                            <p>
                                                <span>Max Sale</span>
                                                <span class="pad-lft text-semibold">
					                                        <span class="text-lg">&#8358;52,000</span>
					                                        <span class="labellabel-success mar-lft">
					                                            <i class="pci-caret-up text-danger"></i>
					                                            <smal>- &#8358;27,000</smal>
					                                        </span>
					                                        </span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <p class="text-uppercase text-semibold text-main">Total Sales</p>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="media pad-btm">
                                                    <div class="media-left">
                                                        <span class=" text-thin text-main text-bold" style="font-size: 18px;">&#8358;750,000</span>
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
                    <div class="col-lg-6">

                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Order Status</h3>
                            </div>

                            <!--Data Table-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <div id="demo-dt-basic_wrapper"
                                     class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="demo-dt-basic_length"><label>Show <select
                                                            name="demo-dt-basic_length" aria-controls="demo-dt-basic"
                                                            class="form-control input-sm">
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="demo-dt-basic_filter" class="dataTables_filter pull-right">
                                                <label><input type="search" class="form-control input-sm"
                                                              placeholder="Search"
                                                              aria-controls="demo-dt-basic"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="demo-dt-basic"
                                                   class="table table-striped dataTable no-footer dtr-inline collapsed"
                                                   cellspacing="0" width="100%" role="grid"
                                                   aria-describedby="demo-dt-basic_info" style="width: 100%;">
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
                                                    <td>&#8358; 45.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-success">Paid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53434</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td><span class="text-muted">Oct 15, 2014</span></td>
                                                    <td>&#8358; 77.99</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-info">Shipped</div>
                                                    </td>
                                                    <td class="text-center">CGX0089734574</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53435</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td><span class="text-muted">Oct 12, 2014</span></td>
                                                    <td>&#8358; 18.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-success">Paid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53437</a></td>
                                                    <td>Charles S Boyle</td>
                                                    <td><span class="text-muted">Oct 17, 2014</span></td>
                                                    <td>&#8358; 658.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-danger">Refunded</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #536584</a></td>
                                                    <td>Scott S. Calabrese</td>
                                                    <td><span class="text-muted">Oct 19, 2014</span></td>
                                                    <td>&#8358; 45.58</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-warning">Unpaid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="demo-dt-basic_info" role="status"
                                                 aria-live="polite">Showing 1 to 5 of 57 entries
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="demo-dt-basic_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="demo-dt-basic_previous"><a href="#"
                                                                                       aria-controls="demo-dt-basic"
                                                                                       data-dt-idx="0" tabindex="0"><i
                                                                    class="demo-psi-arrow-left"></i></a></li>
                                                    <li class="paginate_button active"><a href="#"
                                                                                          aria-controls="demo-dt-basic"
                                                                                          data-dt-idx="1"
                                                                                          tabindex="0">1</a></li>
                                                    <li class="paginate_button "><a href="#"
                                                                                    aria-controls="demo-dt-basic"
                                                                                    data-dt-idx="2" tabindex="0">2</a>
                                                    </li>
                                                    <li class="paginate_button "><a href="#"
                                                                                    aria-controls="demo-dt-basic"
                                                                                    data-dt-idx="3" tabindex="0">3</a>
                                                    </li>
                                                    <li class="paginate_button disabled" id="demo-dt-basic_ellipsis"><a
                                                                href="#" aria-controls="demo-dt-basic" data-dt-idx="4"
                                                                tabindex="0">…</a></li>
                                                    <li class="paginate_button "><a href="#"
                                                                                    aria-controls="demo-dt-basic"
                                                                                    data-dt-idx="5" tabindex="0">6</a>
                                                    </li>
                                                    <li class="paginate_button next" id="demo-dt-basic_next"><a href="#"
                                                                                                                aria-controls="demo-dt-basic"
                                                                                                                data-dt-idx="6"
                                                                                                                tabindex="0"><i
                                                                    class="demo-psi-arrow-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
