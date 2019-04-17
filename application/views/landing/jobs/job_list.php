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
            
            <?php if( $jobs ) :
                foreach( $jobs as $job ):
            ?>
                <a title="<?= $job->job_title; ?>" href="<?= base_url('jobs-at-onitshamarket/' . urlify($job->job_title) .'/' . $job->job_code.'/')?>">
                    <div class="job_card">

                        <div class="row job_card_header">
                            <h4 class="text-capitalize col-md-8"><?= $job->job_title; ?></h4>
                            <div class="col-md-4">
                                <div class="tag"><?= date('l, dS F, Y', strtotime( $job->date_posted));?></div>
                            </div>
                        </div>
                        <hr />
                        <br />
                        <div class="job_card_body">
                            <div class="row">
                                <div class="col-md-4 job_card_props">
                                    <b>Location</b> <br/> <?= ucfirst($job->job_location); ?>
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
                                    <?= word_limiter(html_entity_decode($job->job_description), 20, '&#8230;'); ?>
                                </div>
                                <div class="col-md-4 text-right">
                                    <?php if( $job->due_date ) : ?>
                                        <span style="color:#e23312;">
                                        Expires: <?= date('Y/m/d', strtotime( $job->due_date)); ?>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            <?php endforeach; else :?>
                <div class="container view_constraint text-center">
                    <img src="<?= base_url('assets/img/404cart.jpg'); ?>" class="img-responsive img_cart_404" style="margin:auto;max-width:200px;"/>
<!--                    <h2 class="hide_it_sm">Uh Oh!!</h2>-->
                    <h5 style="padding-top: 20px;">Sorry, no job vacancy listed on the site now. Kindly check back later.</h5>
                    <h5 style="margin-bottom:auto;" class="hide_it_sm">Go Back <a style="color: #0b6427;" href="<?=base_url()?>">Home</a></h5>
                </div>
            <?php endif; ?>
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

