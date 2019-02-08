<!--<div id="cookieConsent" class="text-center" style="z-index: 999;position: fixed;bottom:5px;width:100%;padding:10px 20px 10px;font-size:12px;background-color:#3b4045;color:#ffffff;display:none;-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);-->
<!--    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);">-->
<!--    <p class="pt-3 pr-2">We use cookies to improve your website experience</p>-->
<!--    <a type="button" class="btn btn-primary" style="-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);-->
<!--    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);border-radius: 0;">Learn more <i-->
<!--                class="fa fa-book ml-1"></i></a>-->
<!--    <a type="button" class="btn btn-outline-primary cookieConsentOK" style="-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);-->
<!--    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;border: 1px solid #fff;color:#fff;">That's-->
<!--        Fine</a>-->
<!--    <a style="top:20px;right:10px;color:#fff;padding: 3px;font-size: 14px;width: 25px;height: 25px;border-radius: 100%;position: absolute;z-index: 22;" href="javascript:;" id="closeCookie"><i class="fa fa-times"></i></a>-->
<!--</div>-->
<script>
    if (!base_url) {
        let base_url = "<?= base_url(); ?>";
    }
</script>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/js/owl-carousel.js'); ?>"></script>
<script src="<?= base_url('assets/js/ionrangeslider.js'); ?>"></script>
<script src="<?= base_url('assets/js/jqzoom.js'); ?>"></script>
<script src="<?= base_url('assets/js/mobile.js'); ?>"></script>
<script src="<?= base_url('assets/js/jqzoom.js'); ?>"></script>
<script src="<?= base_url('assets/js/magnific.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/custom.js'); ?>"></script>
<script src="<?= $this->user->auto_version('assets/js/search.js'); ?>"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script>
    (function () {
        var cookie = false;
        var cookieContent = $('#cookieConsent');
        checkCookie();

        if (cookie === false) {
            setTimeout(function () {
                cookieContent.fadeIn(500);
            }, 5000);
        }

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i].trim();
                if (c.indexOf(name) === 0) return c.substring(name.length, c.length);
            }
            return "";
        }

        function checkCookie() {
            var check = getCookie("onitshamarket");
            if (check !== "") {
                return cookie = true;
            } else {
                return cookie = false;
            }
        }

        $("#closeCookieConsent, .cookieConsentOK").click(function () {
            setCookie("onitshamarket", "accepted", 365);
            cookieContent.fadeOut(500);
        });
        $("#closeCookie").click(function () {
            cookieContent.fadeOut(500);
        });
    })();
</script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>