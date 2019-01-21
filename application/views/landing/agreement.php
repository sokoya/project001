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

    <?php if ($this->agent->is_mobile()) : ?>
        <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>
    <?php else: ?>
        <?php $this->load->view('landing/resources/head_img') ?>
        <?php $this->load->view('landing/resources/head_menu') ?>
    <?php endif; ?>
    <div class="container text-center">
        <div class="row text-justify" style="padding: 20px;background: #fff;margin-top:20px;">
            <h2 class="terms_head text-center">Registration Agreement</h2>
            <p class="text-center">
                BEFORE YOU COMPLETE THE REGISTRATION PROCESS AND BECOME OUR REGISTERED BUYER, PLEASE READ THE FOLLOWING
                TERMS CAREFULLY. IF YOU DO NOT ACCEPT ALL OF THE REGISTRATION AGREEMENT, PLEASE DO NOT CLICK ‘’CREATE MY
                ACCOUNT” BUTTON.
            </p>
            <div style="height:15px;"></div>
            <h3>Introduction</h3>
            <h4>Welcome to <?= lang('app_name');?>, your reliable online marketplace.</h4>
            <p>
                The web site identified by the uniform resource locator www.onitshamarket.com (the “Site”) is provided
                by Internet Onitshamarketing Ltd (“<?= lang('app_name');?>”) as a service to our customers.
            <p/>
            <p>This registration agreement (referred to throughout this site as "the Agreement") is entered into
                between you as the registered user of the site (the “the Registered User or User”) and
                <?= lang('app_name');?>.
            <p/>
            <p>Please review the following basic rules that govern your use and access on the site. Please also note
                that your click of “Create My Account” button constitutes your unconditional agreement to follow and be
                bound by this Agreement. If you do not accept all of the terms of this Agreement, please do not click
                the “Accept the Agreement” button.
            </p>
            <div style="height:15px;"></div>
            <h4>1. Application of Registration Agreement</h4>
            <p>
                1.1 For your registration and purchase on the Site, you should accept this Agreement, the Terms of Use,
                the terms and conditions related to them and the Security and Privacy policy of <?= lang('app_name');?>.
                Meanwhile, during your purchase and transaction process on the Site, certain Membership Agreement and
                related terms and conditions between you as a Registered User and <?= lang('app_name');?> will bind.
                Therefore, besides this Agreement, we recommend you to read those relative terms, conditions and
                information carefully. Additionally, your acceptance of this Agreement also means that the aforesaid
                relative terms, conditions and the Security and Privacy policy of <?= lang('app_name');?> will apply to your
                purchase and transaction process on the Site.
            <p/>
            <p>1.2 Terms has not been defined or stipulated in this Agreement shall be interpreted in accordance with
                the definition(s) or provision(s) of the Terms of use of <?= lang('app_name');?>.
            <p/>
            <p> 1.3 Except as explicitly stated otherwise, the registration, services, functions and features on the
                Site is free of charge for our Registered Users, however, <?= lang('app_name');?> reserves the right to charge
                them in the future for whatever reason.
            <p/>
            <p> 1.4 After your registration, you will get a unique Account ID and Password from <?= lang('app_name');?> and
                the Site. Each Use shall take responsibility solely for the transaction outcome occurred under this
                Account ID and Password, and for the confidentiality of your Account ID and Password. You should use
                this Account ID and Password alone, and, without prior written consent from <?= lang('app_name');?>, you
                should not transfer your Account ID and Password to others for any use. <?= lang('app_name');?> shall never
                take responsibility for any loss or damages related to your incorrect use or transfer of the Account ID
                or Password.
            <p/>
            <p> 1.5 In its sole discretion, <?= lang('app_name');?> may suspend or terminate any account, part of function and
                service of any account, for whatever reason, including but not limited to, any delay of payment
                delivery, breach of contract, infringement of third party rights, or creating any liability for the Site
                or <?= lang('app_name');?>.
            <p/>
            <p> 1.6 Please also note that the services, functions and features from the Site that the registered user
                may enjoy may differ with the country or region you are living or transacting, and certain functions and
                services on the Site may require special verification or be preserved for paying members only.
            </p>
            <div style="height:15px;"></div>
            <h4>2. The purchase on the Site</h4>
            <p>
                2.1 You must be registered on the Site in order to make purchases on the Site and/or access some
                Services. Your status as a Registered User and the purchase process are governed by the Agreement and
                any terms and conditions related thereto. <?= lang('app_name');?> may reject a User’s application for
                registration for any reason. Upon registration on the Site, <?= lang('app_name');?> shall assign an account
                (the “<?= lang('app_name');?> Account ID”) and a password (the “Password”) to each Registered User.
            <p/>
            <p>2.2 Each User will be required to provide information or material about your entity, business or
                products/services as part of the registration process on the Site or your use of any Service or the
                <?= lang('app_name');?> account. Each User represents, warrants and agrees that (a) such information and
                material, whether submitted during the registration process or thereafter throughout the continuation of
                the use of the Site or Service, is true, accurate, current and complete, and (b) you will maintain and
                promptly amend all information and material to keep it true, accurate, current and complete.
            <p/>
            <p> 2.3 By confirming your purchase at the end of the checkout process, you agree to accept and pay for the
                item(s) purchased. You realize that any delay in the process of delivery payment may constitute a
                contract breach, and you shall be solely responsible for such breach.
            <p/>
            <p> 2.4 Each User understands and accepts that the price listed for the product on the Site and/or the price
                paid for the product includes the commission due to <?= lang('app_name');?>.
            <p/>
            <p> 2.5 You understand that by using and accessing the Site or any Services provided on the Site, you may
                encounter content that may be deemed by some to be offensive, indecent, or objectionable, which content
                may or may not be identified as such. You agree to use the Site and any Service at your sole risk, and
                that <?= lang('app_name');?> shall have no liability to you for Content that may be deemed to be offensive,
                indecent, or objectionable.
            <p/>
            <p> 2.6 Each User understands and accepts that the product and content listing or displaying on the Site may
                relate to copyrights, trademarks, trade secrets, patents and other personal or proprietary rights of a
                third party. Further, each User agrees that the User who uploads or lists that content and information
                on the Site shall be solely responsible for any violation of third party rights. The Site and
                <?= lang('app_name');?> shall not be liable for any infringement or purchase dispute related to the
                intellectual property and/or other personal or proprietary rights of third party.
            <p/>
            <p> 2.7 When required by the government, law enforcement body, or oblige whose legitimate right has been
                injured, or forced by subpoena or other legal document, <?= lang('app_name');?> may disclose the User’s
                identity and contact information. User agrees not to bring any action or claim against <?= lang('app_name');?>
                for such disclosure.
            </p>
            <div style="height:15px;"></div>
            <h4>3. Transactions between Buyers and Sellers</h4>
            <p>
                3.1 Each Registered User understands and agrees that <?= lang('app_name');?> is not a traditional seller or
                mart. Throughout the Site, what <?= lang('app_name');?> provides is only an online platform or venue for
                information exchange and transaction between buyers and sellers. Although <?= lang('app_name');?> will monitor
                the regular operation of the Site to fulfill the duty of care, <?= lang('app_name');?> does not review and
                check each posted content and listing to search for the infringement and illegal activity. Besides, due
                to the limitation of current technology, searching for the infringement and illegal activity in our Site
                is beyond our competence and capability.
            <p/>
            <p> 3.2 Despite this Agreement, the terms and conditions linked to this Agreement, Security and Privacy
                policy of <?= lang('app_name');?> and other terms and conditions throughout the Site, no agency relationship
                will be created between <?= lang('app_name');?> and the seller or buyer concerning the listing and
                transaction, whether or not such transactions are entered into via the Site.
            <p/>
            <p> 3.3 Registered Users hereby acknowledges that although <?= lang('app_name');?> tries its best to provide the
                users with accurate information and listing posted by sellers, and do general verifications about the
                identity of the sellers, there still may be risks of purchasing with people online. Therefore, we
                encourage you, the registered user, to use relevant tools available, reasonable judgment, as well as
                common sense, to make the deal online.
            <p/>
            <p> 3.4 In no event shall <?= lang('app_name');?> be responsible for any infringement or transaction dispute,
                including, but not limited to, transaction disputes about quality, safety, breach of warranty,
                lawfulness or availability of the products or services and the payment from buyers, as well as any
                intellectual property infringement by sellers.
            <p/>
            <p> 3.5 The users (including the seller and buyer) agree to release and indemnify <?= lang('app_name');?> and its
                agents, affiliates, directors, officers and employees from all claims, demands, actions, proceedings,
                costs, expenses and damages (including, but not limited to, any actual, special, incidental or
                consequential damages) arising out of or in connection with any transactional dispute about the
                products, listing, or information on the Site.
            <p/>
            <p> 3.6 In order to help the sellers and the Registered Users solve and settle any transactional disputes
                effectively and efficiently, <?= lang('app_name');?> has established the “Handling Procedures for
                Transactional Dispute”. Here, the sellers and Registered Users shall agree that when the Registered
                Users file the transactional disputes with <?= lang('app_name');?>, the sellers and the Registered Users
                should comply with the “Handling Procedures for Transactional Dispute”, and permit <?= lang('app_name');?> to
                make a final binding decision regarding the dispute.
            </p>
            <div style="height:15px;"></div>
            <h4>4. Limitation of Liability</h4>
            <p>
                4.1 To the maximum extent permitted by law, this Site is provided by <?= lang('app_name');?> on an “as is”,
                “as available” and “with all facts” basis. <?= lang('app_name');?> makes no representations or warranties of
                any kind, express or implied, as to the operation of the Site or the information, content, materials, or
                products included on this Site. To the full extent permissible by applicable law, <?= lang('app_name');?>
                hereby expressly disclaims any and all warranties, express or implied, including, but not limited to,
                any warranties of condition, quality, durability, performance, accuracy, reliability, non-infringement,
                merchantability or fitness for a particular purpose. Without limiting the foregoing, <?= lang('app_name');?>
                disclaims any and all warranties, express or implied, for any merchandise offered on this Site. All such
                warranties, representations, conditions and undertakings are hereby excluded. You acknowledge, by your
                use or access of the Site, that your use or access of the site is at your sole risk. This disclaimer
                does not apply to any product warranty offered by the manufacturer of the item. This disclaimer
                constitutes an essential part of this Agreement.
            <p/>
            <p> 4.2 Under no circumstances and under no legal or equitable theory, whether in tort, contract, strict
                liability or otherwise, shall <?= lang('app_name');?> or any of its affiliates, employees, directors,
                officers, agents, vendors or suppliers be liable to you or to any other person for any indirect,
                special, incidental or consequential losses or damages of any nature arising out of or in connection
                with the use of or inability to use the Site, including, without limitation, damages for lost profits,
                loss of goodwill, loss of data, work stoppage, accuracy of results, or computer failure or malfunction,
                even if an authorized representative of <?= lang('app_name');?> has been advised of or should have known of
                the possibility of such damages.
            <p/>
            <p> 4.3 In addition, in no event shall <?= lang('app_name');?> be liable for damages stemming from any one of the
                following, no matter it is special, direct, indirect, punitive, incidental or consequential damages, or
                related to contract, negligence, tort or otherwise:
                a) Any disputes related to goods, services, or information purchased or obtained from a seller or a
                third-party via the Site, including, but not limited to, disputes about quality, safety, warranty,
                lawfulness or availability of such goods, services or information;<br/>
                b) Any violation of Third Party Rights on the Site;<br/>
                c) Unauthorized access to data or private information of any User on the Site; or<br/>
                d) Statements or conducts of any User of the Site.
            <p/>
            <p>4.4 Notwithstanding any of the foregoing provisions, if <?= lang('app_name');?>, our employees, agents,
                affiliates, representatives or anyone acting on our behalf is found to be liable, our liability will not
                exceed the commissions paid by you in connection with your use of the Site during the three month period
                preceding the date on which the claim arose.
            </p>
            <div style="height:15px;"></div>
            <h4>5. Indemnification</h4>
            <p>
                You agree to defend, indemnify and hold <?= lang('app_name');?> and its affiliate, directors, officers and
                employees harmless from and against any and all losses, claims, liabilities, damages, costs and
                expenses, including attorneys’ fees, arising from or related to (1) your use of the Site, (2) your
                breach of any representations and/or warranties made by you to <?= lang('app_name');?> and (3) claims asserted
                by third party rights claimants or other third parties relating to products offered or displayed on the
                Site.
            </p>
            <div style="height:15px;"></div>
            <h4>6. Termination</h4>
            <p>
                The Agreement is effective unless and until terminated by either you or <?= lang('app_name');?>. You may
                terminate this Agreement at any time, provided that you discontinue any further use of this Site.
                <?= lang('app_name');?> also may terminate this Agreement at any time and may do so immediately without
                notice, and accordingly deny you access to the Site, if in <?= lang('app_name');?>’s sole discretion you fail
                to comply with any term or provision of this Agreement. Upon any termination of the Agreement by either
                you or <?= lang('app_name');?>, you must promptly destroy all materials downloaded or otherwise obtained from
                this Site, as well as all copies of such materials, whether made under the Terms of Use or otherwise.
                <?= lang('app_name');?>’s right to any Contents, and the provisions of Sections 2, 3, 4, 5, 7, and 8, shall
                survive any termination of this Agreement.
            </p>
            <div style="height:15px;"></div>
            <h4>7. Notice</h4>
            <p>
                7.1 Except as explicitly stated otherwise, all notice or demand to or upon <?= lang('app_name');?> shall be in
                writing and delivered to <?= lang('app_name');?> by mail to the following address: eCommerce Store, Onitsha
                Main Market
                Onitsha, Anambra State, Attn: Legal Department. Notice shall be deemed effective when received by
                <?= lang('app_name');?> in any of the above-mentioned manner.
            <p/>
            <p>7.2 All notices or demands to or upon a User shall be effective if delivered personally, by e-mail to the
                e-mail address provided to <?= lang('app_name');?> during the registration process (as updated from time to
                time, if applicable), or by posting such notice or demand on an area of the Site that is publicly
                accessible without a charge. Notice to a User shall be deemed to be received by such User if and when:
                (1) <?= lang('app_name');?> is able to demonstrate that communication, whether in physical or electronic form,
                has been sent to such User, or (2) immediately upon <?= lang('app_name');?> posting such notice on an area of
                the Site that is publicly accessible without charge.
            <p/>
            <p> 7.3 You agree that all agreements, notices, demands, disclosures and other communications that
                <?= lang('app_name');?> sends to you electronically satisfy the legal requirement that such communication
                should be in writing.
            </p>
            <div style="height:15px;"></div>
            <h4>8. General</h4>
            <p>
                8.1 <?= lang('app_name');?> reserves the right to update or modify this Registration Agreement at any time
                without prior notice to you. Your use of the Site following any such change constitutes your
                unconditional agreement to follow and be bound by the Registration Agreement as changes.
            <p/>
            <p> 8.2 Headings used in the Agreement are for reference purposes only and in no way define or limit the
                scope of the section.
            <p/>
            <p> 8.3 If any provision of this Agreement is held to be unenforceable for any reason, such provision shall
                be deleted or reformed to the extent necessary to make it enforceable and the other terms of this
                Agreement shall remain in full force and effect.
            <p/>
            <p> 8.4 The failure of <?= lang('app_name');?> to act with respect to a breach of this Agreement by you or others
                does not constitute a waiver and shall not limit <?= lang('app_name');?>’s rights with respect to such breach
                or any subsequent breaches.
            <p/>
            <p> 8.5 Any action or proceeding arising out of or related to this Agreement or your use of this Site must
                be submitted to the Nigerian international Economic and Trade Arbitration Commission for arbitration
                which shall be conducted in accordance with the Commission’s arbitration rules in effect at the time of
                the application for arbitration. The arbitral award shall be final and binding upon both parties.
            <p/>
            <p> 8.6 This Agreement shall be governed by and construed under the laws of Nigeria without regard to
                conflict of law provisions.
            <p/>
            <p> 8.7 If there is any conflict between the English version and another language version of this Agreement,
                the English version shall prevail.
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
<?php if ($this->agent->is_mobile()) : ?>
    <?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
<?php else : ?>
    <?php $this->load->view('landing/resources/script'); ?>
<?php endif; ?>
</body>
</html>

