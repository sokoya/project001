<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .terms_head {
        color: #48bc6e;
        margin-top: 10px;
    }

    p:not(.foot-link), h3:not(.foot-link), h4:not(.foot-link), p div {
        color: grey;
    }

    <?php if ($this->agent->is_mobile()) : ?>
    p {
        font-size: 13px;
        line-height: 15px;
    }

    h2 {
        font-size: 20px !important;
        text-align: left;
    }

    h3 {
        font-size: 18px !important;
        text-align: left;
    }

    h4 {
        font-size: 16px !important;
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
            <h2 class="terms_head text-center">Registration Agreement</h2>
            <p class="text-center" style="text-transform:uppercase;">
                The following describes the terms on which <?= lang('app_name'); ?> offers you access to our services.
            </p>
            <div style="height:15px;"></div>
            <h4>Introduction</h4>
            <p>
                Welcome to <?= lang('app_name'); ?>. By using the <?= lang('app_name'); ?> website including its related
                sites,
                services and tools (the "Website"), you agree to the following terms, including those available by
                hyperlink, with Internet Onitshamarketing Limited, and its affiliates (together
                "<?= lang('app_name'); ?>" or
                the "Company"), and the general principles for this Website. If you have any questions, please refer to
                our Help section.
            </p>
            <p>
                This Agreement is effective on January 1, 2015 for current users, and immediately upon acceptance by new
                users.
            <p/>
            <div style="height:15px;"></div>
            <h4>1. Scope</h4>
            <p>
                1.1 Before you become a member of the Website, you must read and accept all of the terms and conditions
                in, and linked to, this User Agreement and Privacy Policy. We strongly recommend that, as you read this
                User Agreement, you also access and read the linked information. By accepting this User Agreement, you
                agree that this User Agreement and Privacy Policy will apply whenever you use our Website and services,
                or when you use the tools we make available to interact with our Website and services.
            </p>
            <div style="height:15px;"></div>
            <h4>2. Your Account</h4>
            <p>
                2.1 If you use this Website, you are responsible for maintaining the confidentiality of your buyer or
                seller account with onitshamarket.com ("Account") and password and for restricting access to your
                computer, and you agree to accept responsibility for all activities that occur under your account or
                password. If you are under 18 years old, you may use this Website only with authorization from a parent
                or legal guardian.
            <p/>
            <p>2.2 The Company reserves the right to refuse service, terminate accounts, remove or edit content, or
                cancel orders at its sole discretion.
            <p/>
            <div style="height:15px;"></div>
            <h4>3. Using this Website</h4>
            <p>
                3.1 While using this Website, you will not:
            <div style="margin-left:20px;color:grey;">
                • post content or items in an inappropriate category or areas on our Website or services;<br>
                • violate any laws, third party rights, or our policies such as the Prohibited and Restricted
                Items policies;<br>
                • use our Website or services if you are not able to form legally binding contracts, are under the age
                of 18, or are temporarily or indefinitely suspended from our Website;<br>
                • manipulate the price of any item or interfere with other user's listings;<br>
                • circumvent or manipulate our fee structure, the billing process, or fees owed to the Company;<br>
                • post false, inaccurate, misleading, defamatory, or libelous content (including personal
                information);<br>
                • take any action that may undermine the feedback or ratings systems;<br>
                • transfer your Account to another party without the Company's consent;<br>
                • distribute or post spam, chain letters, or pyramid schemes;<br>
                • distribute viruses or any other technologies that may harm the Website, or the interests or property
                of users of the Website;<br>
                • copy, modify, or distribute content from the Website and the Company's copyrights and trademarks;
                or<br>
                • harvest or otherwise collect information about users, including email addresses, without their
                consent; or<br>
                • use existing user accounts or create new user accounts in order to circumvent or avoid buying or
                selling limits, restrictions, holds or other policy consequences
            </div>
            </p>
            <p>
                3.2 Violations of this policy may result in a range of actions, including:
            <div style="margin-left:20px;color:grey;">
                • Cancellation of Item Listing(s)<br>
                • Loss of Settlement Amount<br>
                • Limits placed on account privileges<br>
                • Loss of "Power Seller" status<br>
                • Account suspension / termination<br>
                • Criminal charges / claim for damages
            </div>
            </p>
            <div style="height:15px;"></div>
            <h4>4. Abusing our Website</h4>
            <p>
                4.1 We keep our Website and services safe and working properly. Please report problems, offensive
                content and
                policy violations to us.
            </p>
            <p>
                4.2 Our Brand Protection Program (BPP) works to ensure that listed items do not infringe upon the
                copyright,
                trademark or other intellectual property rights of third parties. If you believe that your intellectual
                property rights have been violated, please notify our BPP team and we will investigate.
            </p>
            <p>
                4.3 Without limiting other remedies, we may limit, suspend, or terminate our service and user accounts,
                prohibit
                access to our sites and their content, delay or remove hosted content, and take technical and legal
                steps to
                keep users off the sites if we think that they are creating problems or possible legal liabilities,
                infringing the intellectual property rights of third parties, or acting inconsistently with the letter
                or
                spirit of our policies (for example, and without limitation, policies related to shill bidding,
                conducting
                off-site transactions, feedback manipulation, circumventing temporary or permanent suspensions or users
                who
                we believe are harassing our employees or other users). Additionally, we may, in appropriate
                circumstances
                and at our discretion, suspend or terminate accounts of users who may be repeat infringers of
                intellectual
                property rights of third parties. We also reserve the right to cancel unconfirmed accounts or accounts
                that
                have been inactive for a long time.
            </p>
            <div style="height:15px;"></div>
            <h4>5. Purchase and Payment</h4>
            <p>
                5.1 You should carefully read the item detail page and review information such as price, option price,
                shipping
                charges, etc. and terms and conditions for sales before purchasing an item.
            </p>
            <p>
                5.2 We take no responsibility and assume no liability for any loss or damages to a buyer arising from
                shipping
                information and/or payer information entered by the buyer or wrong remittance by the buyer in connection
                with the payment for the items purchased. We reserve the right to check whether a buyer is duly
                authorized
                to use certain payment method, and may suspend the transaction until such authorization is confirmed or
                cancel the relevant transaction where such confirmation is not available.
            </p>
            <div style="height:15px;"></div>
            <h4>6. Delivery</h4>
            <p>
                6.1 On receipt of the payment from the buyer, the Company shall instruct the seller to take necessary
                actions for delivery and the seller should ship and enter delivery information including the name of the
                delivery company, the tracking number, etc. through onitshamarket.com Sales Manager within 3 business
                days from the date of the delivery instruction. If the seller fails to do so, the Company may cancel the
                transaction and shall not be responsible or liable for any loss or damages to the seller due to such
                cancellation.
            <p/>
            <p>6.2 Sellers shall take all reasonable actions for buyers to receive purchased items within the time
                period specified by the seller on the item detail page. If a seller fails to deliver the purchased item
                within such period or the item was not received by the buyer due to a reason not attributable to the
                buyer (such as delivering to the wrong address), the seller shall bear all liabilities relating thereto.
                If any transaction is cancelled due to a reason attributable to the seller (e.g. non-delivery of the
                purchased items), the Company may take actions against the seller.
            <p/>
            <p> 6.3 The Company may at its option provide overseas delivery service and other services related to
                delivery in association with third-party service providers.
            </p>
            <div style="height:15px;"></div>
            <h4>7. Cancellation, Return and Refund</h4>
            <p>
                7.1 Buyers may cancel purchases at any time before shipment. Once shipped, purchases will be subject to
                return process rather than cancellation process.
            <p/>
            <p> 7.2 Buyers may request for return of purchased items at any time within 7 days from the date of receipt.
                With respect to return-related matters, relevant laws and regulations shall prevail over the terms and
                conditions suggested by sellers.
            <p/>
            <p> 7.3 Return costs shall be borne by the party attributable to the return request, such as:
            <div style="margin-left:20px;color:grey;">
                • the buyer, where the return is due to his/her change of mind; and<br>
                • the seller, where the return is due to the defects in the item, delivery delay or delivery of the
                wrong or different item
            </div>
            <p/>
            <p> 7.4 Upon completion of the cancellation or the return process, the Company shall refund the purchase by
                immediately canceling the debit card transaction authorization in the case of payment by debit card or
                by depositing the amount paid by the buyer in the onitshamarket.com account of the buyer in the case of
                payment by cash. Buyers may at any time request to withdraw from the onitshamarket.com account of the
                buyer and the request amount shall be remitted to the buyer's bank account within 2 business days.
            <p/>
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

