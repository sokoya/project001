
<div class="modal fade" id="review_modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <div class="col-md-12">
                            <div class='starrr' id='star1'></div>
                        </div>
                        <div class="col-md-12">
                            <div class="rating-text"></div>
                        </div>
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