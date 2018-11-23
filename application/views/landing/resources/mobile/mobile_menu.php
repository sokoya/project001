<style>
	.mobile-nav {
		background: #fff;
		padding-top: 5px;
		padding-bottom: 20px;
	}

	.mobile-brand {
		margin-top: -10px !important;
	}

	.mobile-nav-logo {
		width: 120px !important;
		height: 50px !important;
		position: relative;
		left: -15px;
	}

	.mobile-toggle {
		float: left !important;
	}

	.navbar-toggle {
		border: none;
		background: transparent !important;

	}

	.navbar-toggle:hover {
		background: transparent !important;
	}

	.navbar-toggle .icon-bar {
		width: 22px;
		transition: all 0.2s;
	}

	.navbar-toggle .top-bar {
		transform: rotate(45deg);
		transform-origin: 10% 10%;
	}

	.navbar-toggle .middle-bar {
		opacity: 0;
	}

	.navbar-toggle .bottom-bar {
		transform: rotate(-45deg);
		transform-origin: 10% 90%;
	}

	.navbar-toggle.collapsed .top-bar {
		transform: rotate(0);
	}

	.navbar-toggle.collapsed .middle-bar {
		opacity: 1;
	}

	.navbar-toggle.collapsed .bottom-bar {
		transform: rotate(0);
	}

	.navbar-default .navbar-toggle .icon-bar {
		background-color: #000;
		font-weight: 700;
	}

</style>


<nav class="navbar navbar-default mobile-nav">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand mobile-brand" href="#">
				<button type="button" class="navbar-toggle mobile-toggle collapsed" data-toggle="collapse"
						data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<img class="mobile-nav-logo" src="<?= base_url('assets/landing/img/onitshamarket-logo.png'); ?>"/>
			</a>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
			</ul>
		</div>
	</div>
</nav>
