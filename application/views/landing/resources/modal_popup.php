<!--<div class="modal fade" id="modal_popup" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--    <div class="modal-dialog modal-sm modal-notify" role="document" style="width:320px;margin: 30px auto;">-->
<!--        <div class="modal-content text-center">-->
<!--            <div class="modal-header d-flex justify-content-center bg-warning">-->
<!--                <p class="heading text-justify">-->
<!--                <h3><b>Make Enquiry</b></h3></p>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <p>-->
<!--                    <a style="border: 1px solid green;width:100%;cursor:pointer;color:green;text-decoration: none;padding:5px 20px 5px;" data-toggle="collapse" data-target="#collapseLogin"-->
<!--                            aria-expanded="false" aria-controls="collapseExample">-->
<!--                        Already Have an account?-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="collapse" id="collapseLogin">-->
<!--                    <div class="card card-body">-->
<!--                        Please Login-->
<!--                        <form method="post" class="gap-small" autocomplete="off"-->
<!--                              action="--><?//= base_url('login/process') ?><!--">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-12">-->
<!--                                    <input type="email" class="form-control" name="loginemail"-->
<!--                                           placeholder="email@sample.com" required/>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row" style="margin-top:5px;">-->
<!--                                <div class="col-md-12">-->
<!--                                    <input type="password" class="form-control" name="loginpassword"-->
<!--                                           placeholder="password" required/>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="gap-small"></div>-->
<!--                            <button class="btn btn-block btn-success" style="margin-top:5px;">Login</button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div id="question_div">-->
<!--                    <hr class="hr-text" data-content="OR">-->
<!--                    <form id="form_ask_id">-->
<!--                        Provide your detail to notify you-->
<!--                        <div class="gap-small"></div>-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <input type="text" id="question_display_name" class="form-control"-->
<!--                                       placeholder="Full Name" required/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="row" style="margin-top:5px;">-->
<!--                            <div class="col-md-12">-->
<!--                                <input type="text" id="question_data" class="form-control" placeholder="Email or Phone"-->
<!--                                       required/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="gap-small"></div>-->
<!--                        <button class="btn btn-block btn-success" style="margin-top:5px;" id="btn_fill_form_ask">Ask-->
<!--                            Question-->
<!--                        </button>-->
<!--                    </form>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--            <div class="modal-footer flex-center">-->
<!--                <a type="button" class="btn  btn-default waves-effect" data-dismiss="modal">Cancel</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--Order-->

<div class="modal fade" id="modal_popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify" role="document" style="width:380px;margin: 30px auto;">
        <div class="modal-content text-center">
            <div class="modal-header d-flex justify-content-center bg-warning">
                <p class="heading text-justify">
                <h3><b>Welcome Sokoya</b></h3></p>
            </div>
            <div class="modal-body">
                <div class="row" >
                    <div class="card card-body">
                        You recently purchase <b>Item Name</b>, kindly rate and review this item to make OM a better place. (This is optional)
                    </div>
                </div>
                <div class="row">
                    <?php $user = $this->product->get_rating_review('product_rating', 'rating_score', 4, 80);
                        if (!$user):
                            ?>
                            <div class="col-md-12">
                                <div class='starrr' id='star1'></div>
                            </div>
                            <div class="col-md-12">
                                <div class="rating-text"></div>
                            </div>
                    <?php endif; ?>
                </div>
                <div id="question_div">
                    <hr class="hr-text" data-content="Write A Review">
                    <form id="review_form" onsubmit="return false">

                        <div class="form-group">
                            <input type="text" name="title" placeholder="Title of the review"
                                   id="review_title"
                                   class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="display_name" placeholder="Display name"
                                   id="review_name"
                                   value=""
                                   class="form-control" required>
                        </div>
                        <div class="form-group">
                            <textarea title="review" id="review_detail" name="review" rows="2"
                                      class="form-control" required
                                      placeholder="Write your review on this product."></textarea>
                        </div>
                        <input type="submit" class="btn btn-success" id="review_submit_button"
                               value="Post Review">
                    </form>
                </div>
            </div>
            <div class="modal-footer flex-center">
                <a type="button" class="btn  btn-default waves-effect" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>