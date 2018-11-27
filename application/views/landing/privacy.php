<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .terms_head {
        color: #48bc6e;
        margin-top: 10px;
    }
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">

    <?php $this->load->view('landing/resources/head_img') ?>
    <?php $this->load->view('landing/resources/head_category') ?>

    <?php $this->load->view('landing/resources/head_menu') ?>
    <div class="container text-center">
        <h2 class="terms_head">Privacy &amp; Security</h2>
        <hr style="width:100%; border:1px solid red;margin-top:-5px;"/>
        <div class="row text-justify" style="padding: 20px;background: #fff;">
            <h3>Welcome to Onitshamarket.com, your reliable online marketplace.</h3>
            <p>
                The web site identified by the uniform resource locator www.onitshamarket.com (the “Site”) is provided
                by Internet Onitshamarket Limited (“Onitshamarket.com”) as a service to our customers.
            </p>
            <p>
                This Security and Privacy Policy (the “Agreement” or “Policy”) is entered into between you as a
                registered user of the site (“Registered User”) and Onitshamarket.com.
            </p>
            <p>
                The security of your personal information is very important to us and we value your trust highly. We
                will
                not sell or loan your personal information to a third party under any circumstances. We will work hard
                to protect the security and privacy of any personal information you provide to us and will only use such
                information as we have described herein. By your use and access of the Site, you accept this Security
                and Privacy Policy.
            </p>
            <div style="height:15px;"></div>
            <h3>What personal information do we collect?</h3>
            <p>
                You may choose to use or access our Site without revealing any personal and transactional information
                about yourself, but you will need to register and create an account in order to make a purchase or take
                advantage of certain features and functions, including, but not limited to, “My Contacts”. If you
                provide us with your information, you consent to the transfer and storage of the information on our
                server located in United States of America (“USA.”).
            </p>
            <p> As set forth in more detail below, Onitshamarket.com collects personal information that you provide when
                using the Site. This information includes your first and last name, email address, a password and other
                information required when you create your Onitshamarket.com account or when you participate in or
                conduct surveys and contests via the Site, email, or other media of Onitshamarket.com. In order to
                protect your confidentiality and verify your identity, we may ask you to confirm your personal
                information when you contact our Customer Service Department.
            </p>
            <p> In addition to the personal information we may collect and process during registration and any surveys,
                we also collect, store and process the following information about our users:
            </p>
            <div style="height:15px;"></div>
            <h4>1. Purchase Information</h4>
            <p>
                When you make a purchase from Onitshamarket.com, we collect your name and payment method information.
                When you create an account at Onitshamarket.com, you can choose to save your billing information in “My
                Profile.” You can also save one or more shipping addresses in your Onitshamarket.com Address Book.
            </p>
        </div>
        <div style="height:15px;"></div>
        <div>
            <p class="lead custom-text">Are You Ready To Shop?</p>
            <a class="btn btn-primary btn-lg" style="border-radius: 0;" href="<?= base_url(); ?>">Start Shopping<i
                        class="fa fa-cart-plus"></i></a>
        </div>
        <div style="height:15px;"></div>
    </div>


    <?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
<script>

</script>
</body>
</html>

