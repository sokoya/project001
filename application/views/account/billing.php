<?php $this->load->view('landing/resources/head_base'); ?>
<style>
	.req {
		color: red;
	}

	.add_form {
		display: none;
	}
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container market-dashboard-cover">

		<?php $this->load->view('account/includes/sidebar'); ?>
		<div class="col-md-8">
			<?php $this->load->view('account/includes/sidebar-mobile'); ?>
			<?php $this->load->view('landing/msg_view'); ?>
			<div class="row">
				<h3 class="market-sidebar-header-r hidden-sm hidden-md hidden-xs col-md-6">My Billing Address</h3>
				<a href="#" class="btn btn-primary add_new_add" style="border-radius: 0px !important; float:right;"
				   id="add_new_add">
					<strong><i class="fa fa-plus"></i> Add New Address
					</strong>
				</a>
				<a href="#" class="btn btn-danger btn_can_update"
				   style="border-radius: 0px !important; float:right;display:none;" id="btn_can_update">
					<strong><i class="fa fa-times"></i> Cancel
					</strong>
				</a>
			</div>
			<hr class="market-sidebar-line-r"/>
			<div class="alert alert-warning">
				<i class="fa fa-warning"></i> Due to severe wildfire conditions in Calabar, deliveries To and From
				several area in the state may arrive latter than expected. To view the most up to date status for your
				order, please go to the Orders page
			</div>
            <div id="status"></div>

			<div class="add_form" id="add_address">
                <div>
                    <h4 class="modal-title" id="add_title">Add New Address</h4>
                    <p style="font-size:11px;color:red;">All fields with * are required.</p>
                </div>
                <div class="add_body">
                    <div class="row">
                        <form id="add_add_form" method="POST" action="#">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label for="f_name" class="control-label">First Name <span
                                            class="req">*</span></label>
                                    <input type="text" class="form-control" id="f_name" name="first_name"
                                           value="" required=""
                                           title="Please enter you first name" placeholder="First Name">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label">Phone Number <span
                                            class="req">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value=""
                                           required=""
                                           title="Please enter you phone number" placeholder="080XXXXXXXX">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="state_id" class="control-label">State <span class="req">*</span></label>
                                    <select class="form-control" id="state_id" name="state">
                                        <option selected>--select--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label for="l_name" class="control-label">Last Name <span
                                            class="req">*</span></label>
                                    <input type="text" class="form-control" id="l_name" name="last_name"
                                           value="" required=""
                                           title="Please enter you last name" placeholder="Last Name">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="phone2" class="control-label">Additional Phone Number</label>
                                    <input type="tel" class="form-control" id="phone2" name="phone2" value=""
                                           title="Please enter you phone number" placeholder="080XXXXXXXX">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="area_id" class="control-label">Area <span
                                            class="req">*</span></label>
                                    <select class="form-control" id="area_id" name="area">
                                        <option selected>--select--</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label for="address" class="control-label">Address <span
                                            class="req">*</span></label>
                                    <textarea class="form-control" name="address" id="address" rows="4"
                                              placeholder="Delivery Address"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <button type="" id="btn_add_add"
                                        class="btn btn-success btn-block"
                                        style="border-radius: 0px !important;"><strong>Add Address</strong>
                                </button>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <button id="btn_up_add" type="submit"
                                        class="btn btn-primary btn-block"
                                        style="display:none;border-radius: 0px !important;"><strong>Update
                                        Address</strong></button>
                            </div>
                            <input type="hidden" name="address_type" id="address_type"/>
                            <input type="hidden" name="update_aid" id="update_aid"/>
                        </form>
                    </div>
                </div>
			</div>
			<div class="gap gap-small"></div>
			<div class="row ">
				<?php foreach ($addresses as $address) : ?>
					<div class="col-md-6">
						<div class="market-dashboard-card">
							<div class="row">
								<h5 class="col-md-8"><?php if ($address->primary_address == 0) {
										echo '<a href="javascript:;" id="btn_set_default">Set As Default Address</a>';
									} else {
										echo 'Default Address';
									} ?></h5>
								<h5 class="col-md-4"><a onclick='get_specific_add("<?= $address->id; ?>")'
														href="javascript:void(0);" class="btn_edt_add" style="float: right;" data-id="<?= $address->id; ?>">Edit</a>
								</h5>
							</div>
							<hr/>
							<p>
								<i class="fa fa-user" style="color:dimgrey; font-size:18px;"></i>&nbsp;&nbsp;&nbsp;<?= ucwords($address->first_name) . ' ' . ucwords($address->last_name); ?>
							</p>
							<p>
								<i class="fa fa-map-marker" style="color:dimgrey; font-size:18px;"></i>&nbsp;&nbsp;&nbsp;<?= $address->address; ?>
							</p>
							<p>
								<i class="fa fa-phone" style="color:dimgrey; font-size:18px;"></i>&nbsp;&nbsp;&nbsp;<?= $address->phone; ?> <?php if (!empty($address->phone2)) echo ', ' . $address->phone2; ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

		</div>
	</div>
</div>

<div class="gap gap-small"></div>
<?php $this->load->view('landing/resources/footer'); ?>
<?php $this->load->view('landing/resources/script'); ?>
<script>
	let base_url = "<?= base_url();?>"

	function toTitleCase(str) {
		return str.replace(/(?:^|\s)\w/g, function (match) {
			return match.toUpperCase();
		});
	}
</script>

<script>
	let innercodered = "<strong><i class=\"fa fa-times\"></i> Cancel\n" +
		"                    </strong>";
	let innercodenorm = "<strong><i class=\"fa fa-plus\"></i> Add New Address\n" +
		"                    </strong>";
	let state_drop = $('#state_id');

	$('.add_new_add').on('click', function () {
	    $('#address_type').val('new');
		$.getJSON(base_url + 'account/fetch_states', function (d) {
			state_drop.children('option:not(:first)').remove();
			$.each(d, function (k, v) {
				state_drop.append($('<option></option>').attr('value', v.id).text(toTitleCase(v.name)));
			})
		});
		if ($('#add_new_add').hasClass('btn-primary')) {
			$('#add_address').css({
				display: 'block'
			});
			$('#add_new_add').html(innercodered);
			$('#add_new_add').removeClass('btn-primary');
			$('#add_new_add').addClass('btn-danger');

		} else {
			$('#add_address').css({
				display: 'none'
			});
			$('#add_new_add').html(innercodenorm);
			$('#add_new_add').removeClass('btn-danger');
			$('#add_new_add').addClass('btn-primary');
		}
	})
	var selected_state_id;
	state_drop.change(function () {
		selected_state_id = $('#state_id option:selected').attr('value');
		$.ajax({
			url: base_url + 'account/fetch_areas',
			method: 'get',
			data: {sid: selected_state_id},
			dataType: 'json',
			success: function (d) {
				$('#area_id > option:not(:first)').remove();
				$.each(d, function (k, v) {
					$('#area_id').append($('<option></option>').attr('value', v.id).text(toTitleCase(v.name)));
				})
			}
		})
	});

	$('#btn_add_add').click(function () {
        $.ajax({
            url: base_url + 'account/billing',
            method: 'post',
            data:  $('#add_add_form').serialize() ,
            dataType: 'json',
            success: function (d) {

            }
        });
	})
	$('#btn_set_default').click(function () {

	});
	$('.btn_edt_add').click(function () {
        $('#address_type').val('update');
        $('#update_aid').val($('.btn_edt_add').data("id"));
		$('#btn_add_add, #add_new_add').css({
			display: 'none'
		});
		$('#btn_can_update, #btn_up_add, #add_address').css({
			display: 'block'
		});
		$('#add_title').text('Edit Address');
	});

	$('#btn_can_update').click(function () {
		$('#btn_add_add, #add_new_add').css({
			display: 'block'
		});
		$('#btn_can_update, #btn_up_add, #add_address').css({
			display: 'none'
		});
		$('#add_title').text('Add New Address');
        $('#phone').val('');
        $('#phone2').val('');
        $('#address').val('');
        $('#f_name').val('');
        $('#update_aid').val('');
        $('#l_name').val('');
        $('#area_id > option:not(:first)').remove();
        $('#state_id > option:not(:first)').remove();
	});

	$('#btn_up_add').click(function () {
            $.ajax({
                url: base_url + "account/billing",
                method: "POST",
                data: $('#add_add_form').serialize(),
                success: function (response) {
                    $('#btn_add_add, #add_new_add').css({
                        display: 'block'
                    });
                    $('#btn_up_add, #add_address, #btn_can_update').css({
                        display: 'none'
                    });
                    $('#add_title').text('Add New Address');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
	});


	// Send a get method to the controller function
	// receive : first_name: Adeniji, last_name, phone, phone2, sid, aid, address
	let get_specific_add = function(id) {
		$.ajax({
			url: base_url + 'account/fetch_single_address',
			method: 'get',
			data: {address_id: id},
			dataType: 'json',
			success: function (d) {
				$.each(d, function (k, value) {

					$('#f_name').val(value.first_name);
					$('#l_name').val(value.last_name);

					$.getJSON(base_url + 'account/fetch_states', function (d) {
						state_drop.children('option:not(:first)').remove();
						$.each(d, function (k, v) {
							state_drop.append($(`<option ${v.id === value.sid ? 'selected=selected' : ''}  ></option>`).attr('value', v.id).text(toTitleCase(`${v.name}`)));

						});
					});
					$.ajax({
						url: base_url + 'account/fetch_areas',
						method: 'get',
						data: {sid: value.sid},
						dataType: 'json',
						success: function (d) {
							$('#area_id > option:not(:first)').remove();
							$.each(d, function (k, v) {
								$('#area_id').append($(`<option ${v.id === value.aid ? 'selected=selected' : ''}></option>`).attr('value', v.id).text(toTitleCase(v.name)));

							})
						}
					});
					$('#phone').val(value.phone);
					$('#phone2').val(value.phone2);
					$('#address').val(value.address);
				})
			}
		})
	}


</script>
</body>
</html>
