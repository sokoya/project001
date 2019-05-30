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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TB9XP2T"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                            <b>Role:</b> Accounting & Audit Assessments
                        </div>
                        <div class="col-md-4 text-right">
                            Job posted 16m ago  |  <span style="color:#e23312;">Expires: 29/04/2019</span>
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <b>Job Summary</b>
                    <ul>
                        <li>Point Value</li>
                        <li>Point Value</li>
                        <li>Point Value</li>
                        <li>Point Value</li>
                    </ul>
                </div>
                <hr/>
                <div>
                    <b>Job Description</b>
                    <p class="text-justify">
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                    </p>
                </div>
                <hr/>
                <div>
                    <b>Responsibilities</b>
                    <ul>
                        <li>Point Value</li>
                        <li>Point Value</li>
                        <li>Point Value</li>
                        <li>Point Value</li>
                    </ul>
                </div>
                <hr/>
                <div>
                    <b>Required Skills</b>
                    <p class="text-justify">
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                        The real story behind the job and other details that can be found for inclusion
                    </p>
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

