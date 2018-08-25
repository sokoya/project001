<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/admin_head') ?>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="margin-top: 3px;">
				<?php $this->load->view('landing/msg_view'); ?>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="box-lg" style="margin-top: 14px;">
					<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
						Create New Category</h3>
					<?= form_open('admin/category'); ?>
						<div class="alert-notif"></div>
						<div class="form-group">
							<label for="sel1">Select Root Category *</label>
							<select class="form-control" name="root_category_id" required>
								<option>-- Select a root category-- </option>
								<?php foreach( $root_categories as $root_category ) : ?>
									<option value="<?= $root_category->root_category_id; ?>"><?= ucwords($root_category->name); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="category-name">Category Name *</label>
							<input class="form-control" type="text" name="category_name" placeholder="Eg : Electronics" required/>
						</div>

						<input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
							   value="Create Category"/>
					<?= form_close(); ?>
					<br/>
					<div class="form_end">
						<a href="<?= base_url('admin'); ?>">Discard Form</a>
					</div>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-striped">
                	<thead>
                		<tr>
                			<th>S/N</th>
                			<th class="text-center">Root Category</th>
                			<th>Category Name</th>
                			<th class="text-center">Action</th>
                		</tr>
                		<tbody>
                			<?php $x=1; foreach($categories as $category ) :?>
                				<tr>
                					<td><?= $x; ?></td>
                					<td><?= get_root_category_name( $category->root_category_id); ?></td>
                                    <td><?= ucwords($category->name); ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-md btn-info">Add Category</button>
                                        <button class="btn btn-md btn-warning">Edit</button>
                                        <button class="btn btn-md btn-danger">Delete</button>
                                    </td>
                				</tr>
                			<?php $x++; endforeach; ?>
                		</tbody>
                	</thead>
                </table>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>
