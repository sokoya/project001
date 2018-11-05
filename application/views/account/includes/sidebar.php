<div class="col-md-4">
	<div class="hidden-xs hidden-md">
		<h3 class="market-sidebar-header">My Account</h3>
		<hr class="market-sidebar-line"/>
		<ul class="market-sidebar">
			<li>
				<h4><a href="<?= base_url(); ?>">Onitsha Market Home</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'dashboard') echo 'class="market-sidebar-active"' ?> ><a href="<?= base_url('account'); ?>">Overview</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'information') echo 'class="market-sidebar-active"' ?> ><a href="<?= base_url('account/information'); ?>">Information</a></h4>
			</li>
			<li>
				<h4 <?php if($page == 'orders') echo 'class="market-sidebar-active"' ?> ><a href="<?= base_url('account/orders'); ?>">My Orders</a></h4>
			</li>
			<!-- <li>
				<h4 <?php if($page == 'reviews') echo 'class="market-sidebar-active"' ?> ><a href="<?= base_url('account/reviews'); ?>">My Reviews & Ratings</a></h4>
			</li> -->
			<li>
				<h4 <?php if($page == 'saved') echo 'class="market-sidebar-active"' ?> ><a href="<?= base_url('account/saved'); ?>">My Saved Items</a></h4>
			</li>
            <li>
                <h4 <?php if($page == 'billing') echo 'class="market-sidebar-active"' ?> ><a href="<?= base_url('account/billing'); ?>">My Billing Address</a></h4>
            </li>
			<li>
				<h4 <?php if($page == 'settings') echo 'class="market-sidebar-active"' ?> ><a href="<?= base_url('account/settings'); ?>">Account Settings</a></h4>
			</li>
		</ul>
	</div>
</div>