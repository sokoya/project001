<div class="col-md-4">
	<div class="hidden-xs hidden-md">
		<h3 class="carrito-sidebar-header">My Account</h3>
		<hr class="carrito-sidebar-line"/>
		<ul class="carrito-sidebar">
			<li>
				<h4><a href="<?= base_url(); ?>">Carrito Home</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'dashboard') echo 'class="carrito-sidebar-active"' ?> ><a href="<?= base_url('account'); ?>">Overview</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'information') echo 'class="carrito-sidebar-active"' ?> ><a href="<?= base_url('account/information'); ?>">Information</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'orders') echo 'class="carrito-sidebar-active"' ?> ><a href="<?= base_url('account/orders'); ?>">My Orders</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'reviews') echo 'class="carrito-sidebar-active"' ?> ><a href="<?= base_url('account/reviews'); ?>">My Reviews & Ratings</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'saved') echo 'class="carrito-sidebar-active"' ?> ><a href="<?= base_url('account/saved'); ?>">My Saved Items</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'settings') echo 'class="carrito-sidebar-active"' ?> ><a href="<?= base_url('account/settings'); ?>">Account Settings</a></h4>
			</li>
		</ul>
	</div>
</div>