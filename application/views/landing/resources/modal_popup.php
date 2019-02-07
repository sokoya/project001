<div class="modal fade" id="modal_popup" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify" role="document" style="width:350px;margin: 30px auto;">
        <div class="modal-content text-center">
            <div class="modal-header d-flex justify-content-center bg-warning">
                <p class="heading text-justify">
                <h3><b>To Ask A Question</b></h3></p>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <button class="btn btn-default" data-panel="minmax"><i class="demo-psi-chevron-up"></i>
                            </button>
                        </div>
                        <h5 class="text-center panel-heading">Already Have an Account?</h5>
                    </div>
                    <div class="collapse">
                        <div class="panel-body">
                            Please Login
                            <form method="post" class="gap-small" autocomplete="off"
                                  action="<?= base_url('login/process') ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="loginemail"
                                               placeholder="email@sample.com" required/>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="loginpassword"
                                               placeholder="password" required/>
                                    </div>
                                </div>
                                <div class="gap-small"></div>
                                <button class="btn btn-block btn-success" style="margin-top:5px;">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="question_div">
                    <hr class="hr-text" data-content="OR">
                    <form id="form_ask_id">
                        Provide your details for follow up
                        <div class="gap-small"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" id="question_display_name" class="form-control"
                                       placeholder="Full Name" required/>
                            </div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-12">
                                <input type="text" id="question_data" class="form-control" placeholder="Email or Phone"
                                       required/>
                            </div>
                        </div>
                        <div class="gap-small"></div>
                        <button class="btn btn-block btn-success" style="margin-top:5px;" id="btn_fill_form_ask">Ask
                            Question
                        </button>
                    </form>
                </div>

            </div>
            <div class="modal-footer flex-center">
                <a type="button" class="btn  btn-default waves-effect" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>