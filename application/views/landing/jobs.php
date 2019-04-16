<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .job_card {
        -webkit-transition: box-shadow .5s linear;
        transition: box-shadow .5s linear;
        background: #fff;
        padding: 20px;
    }
    .job_card:not(:last-child){
        margin-bottom:30px;
    }
    .job_card:hover{
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0, 0, 0, .55);
    }
    .tag{
        text-transform: uppercase;
        border-radius:20px;
        border: 2px solid #21801e;
        width:fit-content;
        padding:5px;
        color:#21801e;
        position: absolute;
        right:100px;
    }
    .job_card_props:not(:last-child){
        border-right: 1px solid #d9d9d9;
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
    <div class="container" style="padding: 30px;margin-top:20px;">
        <div>
            <h3 class="text-center text-uppercase">All onitshamarket.com Jobs</h3>
            <div class="job_card">
                <div class="row job_card_header">
                    <h4 class="text-capitalize col-md-8">Main Job Title</h4>
                    <div class="col-md-4">
                        <div class="tag">new</div>
                        <i class="fas fa-heart pull-right" style="margin-top:10px;"></i>
                    </div>
                </div>
                <div class="job_card_body">
                    <div class="row">
                        <div class="col-md-4 job_card_props">
                            <b>Location</b> <br/> Lagos
                        </div>
                        <div class="col-md-4 job_card_props">
                            <b>Job Type</b> <br/> Full Time
                        </div>
                        <div class="col-md-4 job_card_props">
                            <b>Salary</b> <br/> Not Specified
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-8">
                            Our client is a leader in the Nigeria contruction industry involved in the execution of
                            world-class high-networth goverment and industrial projests
                        </div>
                        <div class="col-md-4 text-right">
                            Job posted 16m ago <br/> <span style="color:#e23312;">Expires: 29/04/2019</span>
                        </div>
                    </div>
                </div>
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
</body>
</html>

