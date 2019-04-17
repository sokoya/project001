<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .job_card {
        -webkit-transition: box-shadow .5s linear;
        transition: box-shadow .5s linear;
        background: #fff;
        padding: 20px;
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
            <div class="job_card">
                <div class="row job_card_header">
                    <h4 class="text-capitalize col-md-8"><?= ucwords($job->job_title); ?></h4>
                </div>
                <div class="job_card_body">
                    <div class="row">
                        <div class="col-md-4 job_card_props">
                            <b>Location</b> <br/> <?= $job->job_location; ?>
                        </div>
                        <div class="col-md-4 job_card_props">
                            <b>Job Type</b> <br/> <?= ucwords( $job->job_type); ?>
                        </div>
                        <div class="col-md-4 job_card_props">
                            <b>Salary</b> <br/> <?= (!empty( $job->salary_range)) ? '₦ ' . $job->salary_range : 'Not disclosed'; ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-8">
                            <b>Posted on:</b> <?= date('l, dS F, Y', strtotime( $job->date_posted));?>
                        </div>
                        <div class="col-md-4 text-right">
                            Share Link
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <?= html_entity_decode($job->job_description); ?>
                </div>
            </div>
        </div>
        <div style="height:15px;"></div>
        <div class="text-center">
            <p class="lead custom-text">Are You Qualified?</p>
            <a class="btn btn-primary btn-lg" style="border-radius: 0;" href="#!">Apply Now <i
                        class="fas fa-file-signature"></i></a>
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

