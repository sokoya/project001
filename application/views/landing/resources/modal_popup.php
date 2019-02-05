<div class="modal fade" id="modal_popup" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify" role="document">
        <div class="modal-content text-center">
            <div class="modal-header d-flex justify-content-center bg-default">
                <p class="heading">Ask Question</p>
            </div>
            <div class="modal-body">
                Please Login
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="email@sample.com"/>
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="password"/>
                        </div>
                    </div>
                    <button class="btn btn-block btn-success" style="margin-top:5px;">Login</button>
                </form>
                OR
                <form>
                    Provide your details for follow up
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="full name"/>
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="email or phone"/>
                        </div>
                    </div>
                    <button class="btn btn-block btn-success" style="margin-top:5px;">Ask Question</button>
                </form>
            </div>
            <div class="modal-footer flex-center">
                <a type="button" class="btn  btn-default waves-effect" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

<button onclick="$('#modal_popup').modal('show')">Trigger</button>