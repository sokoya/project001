<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .terms_head {
        color: #48bc6e;
        margin-top: 10px;
    }
    <?php if ($this->agent->is_mobile()) : ?>
    p {
        font-size: 13px;
        line-height: 15px;
    }
    h4{
        font-size:16px !important;
        text-align: left;
    }
    <?php endif?>
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
    <div class="container text-center">
        <div class="row text-justify" style="padding: 20px;background: #fff;margin-top:20px;">
            <h2 class="terms_head text-center">Privacy &amp; Security</h2>
            <div style="height:15px;"></div>
            <h3>Welcome to <?= lang('app_name'); ?>, your reliable online marketplace.</h3>
            <p>
                The web site identified by the uniform resource locator www.onitshamarket.com (the “Site”) is provided
                by Internet Onitshamarket Limited (“<?= lang('app_name'); ?>”) as a service to our customers.
            </p>
            <p>
                This Security and Privacy Policy (the “Agreement” or “Policy”) is entered into between you as a
                registered user of the site (“Registered User”) and <?= lang('app_name'); ?>.
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
            <p> As set forth in more detail below, <?= lang('app_name'); ?> collects personal information that you provide when
                using the Site. This information includes your first and last name, email address, a password and other
                information required when you create your <?= lang('app_name'); ?> account or when you participate in or
                conduct surveys and contests via the Site, email, or other media of <?= lang('app_name'); ?>. In order to
                protect your confidentiality and verify your identity, we may ask you to confirm your personal
                information when you contact our Customer Service Department.
            </p>
            <p> In addition to the personal information we may collect and process during registration and any surveys,
                we also collect, store and process the following information about our users:
            </p>
            <div style="height:15px;"></div>
            <h4>1. Purchase Information</h4>
            <p>
                When you make a purchase from <?= lang('app_name'); ?>, we collect your name and payment method information.
                When you create an account at <?= lang('app_name'); ?>, you can choose to save your billing information in “My
                Profile.” You can also save one or more shipping addresses in your <?= lang('app_name'); ?> Address Book.
            </p>
            <div style="height:15px;"></div>
            <h4>2. Services Account Information</h4>
            <p>
                We collect personal information from users who wish to use any of the <?= lang('app_name'); ?> services,
                including but not limited to, <?= lang('app_name'); ?>’s Transaction Platform. In order to use these services
                you must provide your email address and password or create an account at <?= lang('app_name'); ?>.
            </p>
            <div style="height:15px;"></div>
            <h4>3. Cookies and Other Computer Information</h4>
            <p>
                When you visit the Site, you will be assigned a permanent “cookie” (a small text file) to be stored on
                your computer’s hard drive. The purpose of the cookie is to identify you when you visit the Site so that
                we can enhance and customize your online purchasing experience.
            </p>
            <p>You can choose to browse on the Site without cookies, but without these identifier files you will not be
                able to complete a purchase or take advantage of certain features of the Site. These features include
                storing your shopping cart for later use and providing a more personalized future shopping experience.
                Each browser is different, so check the “Help” menu of your browser to learn how to change your cookie
                preferences.
            </p>
            <p> We also collect certain technical information from your computer each time you request a page during a
                visit to the Site. This information may include your Internet Protocol (IP) address, your computer’s
                operating system, browser type and the address of a referring web site, if any. We collect this
                information to enhance the quality of your experience during your visit to the Site and will not sell or
                loan this information to any third parties.
            </p>
            <p> We also contract with third parties to provide us with data collection and reporting services regarding
                our customers’ activities on the Site and to track and measure the performance of our marketing efforts.
                These third parties may use cookies and may receive anonymous information about your browsing and buying
                activity on this Site. None of your personally identifiable information (such as your name, address,
                email address, etc.) will be received by or shared with these third parties.
            </p>
            <div style="height:15px;"></div>
            <h4>4. Publishing Information</h4>
            <p>
                When you submit any information on the Site during your use or access, including, but not limited to,
                information on the <?= lang('app_name'); ?> blog, the rating system, or product catalog, you are deemed to have
                given your permission to <?= lang('app_name'); ?> to publish such information, and <?= lang('app_name'); ?> and the
                Site hereby enjoy an irrevocable, worldwide and royalty-free, sub-licensable license to use all
                information provided by such user to exercise the copyright, compilation, database and publicity rights
                any user has in such material or information, in any media form.
            </p>
            <div style="height:15px;"></div>
            <h3>How we use your personal information?</h3>
            <p>
                We do not sell, loan, trade or exchange any user’s personal information without such user’s consent. The
                information we collect on the Site may be used to enhance your shopping experience in the following
                ways:
            </p>
            <p style="font-style: italic;">Deliver merchandise and services that you purchase online; Register you as a
                member of <?= lang('app_name'); ?>;
                Prevent fraud; Confirm your orders; Resolve disputes and prevent prohibited and illegal activities;
                Enforce our Terms of Use and related agreements; Respond to your customer-service inquiries or requests;
                Communicate great values and featured items to you; Find and stock the products you want; and Customize,
                measure and improve our services and your purchase experience.
            </p>
            <div style="height:15px;"></div>
            <h3>When and with whom can we share your personal information?</h3>
            <p>
                We do not sell or loan your personal information to any third parties under any circumstances. We will
                share your personal customer information only with our agents, representatives, service providers, and
                contractors for limited purposes, including, but not limited to, fulfilling customer orders, offering
                certain products and services in connection with the Site, communicating to customers, providing
                customer service, storing, sharing and retrieving customers’ photo images in our Photo Center, enhancing
                and improving clients’ purchase experience, enabling access to our partners’ web sites, providing a
                personalized purchase experience and preventing fraud and completing payment method processing.
            </p>
            <p>Aside from the purposes described above, we will not share your personal information with any other third
                parties unless we have your express permission or there are special circumstances, such as when
                <?= lang('app_name'); ?> is required by the government, law enforcement body, obligee whose legitimate right
                has been injured, subpoena or other legal document to share such information, or if we believe it to be
                reasonably necessary to protect the safety of any person; to address fraud, security or technical
                issues; or to protect <?= lang('app_name'); ?>’s rights or property. We may also share aggregated demographic
                and statistical information with our partners. This is not linked to any personal information that can
                identify any individual person.
            </p>
            <div style="height:15px;"></div>
            <h3>How can you control the use of your personal information?</h3>
            <p>
                You can modify or delete your personal information at any time. Simply go to My Account. Log in with
                your ID and password, then edit or delete your personal information at your discretion.
            </p>
            <div style="height:15px;"></div>
            <h3>How can we protect the security of your personal information?</h3>
            <p>
                Your personal information is protected by the password you created when you created an account on the
                Site (or another password you chose after changing a previous password). Please keep this password
                confidential. No Customer Service Associate or any other representative of <?= lang('app_name'); ?> will ever
                ask you for your password. The confidentiality of your password is yours to protect. You may change it
                at anytime by going to My Account. Log in with your email address and password, then click “Modify
                Details, Email & Password” and enter a new password.
            </p>
            <div style="height:15px;"></div>
            <h3>Minors</h3>
            <p>
                <?= lang('app_name'); ?> does not intentionally collect personal information about minors or other persons
                without full civil conduct capacity, but based on the properties of Internet, there is no way for
                <?= lang('app_name'); ?> and the Site to distinguish the age or capacity of the users. By accepting this
                Agreement through your use or access of the Site, you certify that you are a person over 18 years old
                with full capacity and ability to form a legally binding contract in the jurisdiction in which you are
                resident or in which you are entering into this Agreement. If you do not agree to (or cannot comply
                with) any of the terms of this Agreement, do not use the Site.
            </p>
            <p>Meanwhile, if a minor or other person does not have full civil conduct capacity and has provided personal
                information to us without the proper consent of their parent or legal guardian, such parent or legal
                guardian should contact us to remove such personal information.

            </p>
            <div style="height:15px;"></div>
            <h3>Security</h3>
            <p>
                Your information is stored on our servers located in the USA, and we adopt lots of tools, means and
                technologies to protect them against unauthorized access, use and disclosure. For instance, we use a
                technology called Secure Sockets Layer (SSL), which encrypts (or encodes) sensitive information before
                it is sent over the Internet. However, we are limited in our efforts by the technologies currently
                available, and no data transmission or storage over Internet can be guaranteed to be perfectly safe.
                Therefore, although we work very hard to protect your information and privacy, we do not promise or
                guarantee that your information will always be private and safe.
            </p>
            <div style="height:15px;"></div>
            <h3>General</h3>
            <p>
                We realize that making purchases on the Site, or any other web site, requires trust on your part. We
                value your trust very highly and pledge to you, our clients that we will work hard to protect the
                security and privacy of any personal information you provide to us and that your personal information
                will only be used as set forth in this Policy. This includes your name, address, phone number, email
                address or checking account information, in addition to any other personal information that can be
                linked to you, personally.
            </p>
            <p><?= lang('app_name'); ?> may provide links to certain third party web sites. This Security and Privacy Policy
                applies only to activities conducted and personal information collected on the Site. Other web sites may
                have their own policies regarding privacy and security. We encourage you to review the privacy policies
                on these sites before you use and access them. You are solely responsible for your use and access of
                other web sites.
            </p>
            <p><?= lang('app_name'); ?> will obtain your consent before allowing the download of any data from the Site, and
                <?= lang('app_name'); ?> will not automatically download any data to your computer system. Once you consent to
                the initial download of any data, you may receive automatic updates or patches pertaining to such
                software. You understand and agree that any material, including but not limited to downloaded software,
                required or automated updates, modifications, reinstallations, or software otherwise obtained through
                the use of the Site is done at your own discretion and risk and that you will be solely responsible for
                any damages to your computer system or loss of data that may result from any such material.
            </p>
            <p> <?= lang('app_name'); ?> reserves the right to update or modify this Security and Privacy Policy at any time
                without prior notice to you. If <?= lang('app_name'); ?> makes a change that, in <?= lang('app_name'); ?>’s sole
                discretion, is material, <?= lang('app_name'); ?> will notify you via e-mail to the email address associated
                with your account. Your use of the Site following any such change constitutes your unconditional
                agreement to follow and be bound by the Security and Privacy Policy as amended. <?= lang('app_name'); ?> may
                transfer this Policy and all or part of its rights, obligations and interests to any party or entity in
                its sole discretion; however, a User may not assign its rights, obligations and interests under this
                Policy to any party or entity.
            </p>
            <p> Terms which have not been defined or stipulated in this Agreement shall be interpreted in accordance
                with the definition(s) or provision(s) of the Terms of Use of <?= lang('app_name'); ?>.
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

