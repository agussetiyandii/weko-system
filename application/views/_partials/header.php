<!-- Begin page -->
<div id="wrapper">
	<!-- Top Bar Start -->
	<div class="topbar">
		<!-- LOGO -->
		<div class="topbar-left"><a href="index.html" class="logo"><span><img
						src="<?php echo base_url();?>assets/images/logo-light.png" alt="" height="18"> </span><i><img
						src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="22"></i></a></div>
		<nav class="navbar-custom">
			<ul class="navbar-right list-inline float-right mb-0">
				<li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
					<form role="search" class="app-search">
						<div class="form-group mb-0"><input type="text" class="form-control" placeholder="Search..">
							<button type="submit"><i class="fa fa-search"></i></button></div>
					</form>
				</li><!-- language-->
				<li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a
						class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
						aria-haspopup="false" aria-expanded="false"><img
							src="<?php echo base_url();?>assets///images/flags/us_flag.jpg" class="mr-2" height="12" alt=""> English
						<span class="mdi mdi-chevron-down"></span></a>
					<div class="dropdown-menu dropdown-menu-right language-switch"><a class="dropdown-item" href="#"><img
								src="<?php echo base_url();?>assets/images/flags/indonesia.png" alt="" height="16"><span>Indonesia
							</span></a>
				</li><!-- full screen -->

				<li class="dropdown notification-list list-inline-item">
					<div class="dropdown notification-list nav-pro-img"><a
							class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
							role="button" aria-haspopup="false" aria-expanded="false"><img
								src="<?php echo base_url();?>assets/images/users/user-4.jpg" alt="user" class="rounded-circle"></a>
						<div class="dropdown-menu dropdown-menu-right profile-dropdown">
							<!-- item--> <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i>
								Profile</a>
							<a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a> <a
								class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i
									class="mdi mdi-settings m-r-5"></i> Settings</a> <a class="dropdown-item" href="#"><i
									class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
							<div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#"><i
									class="mdi mdi-power text-danger"></i> Logout</a>
						</div>
					</div>
				</li>
			</ul>
			<ul class="list-inline menu-left mb-0">
				<li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i
							class="mdi mdi-menu"></i></button></li>
			</ul>
		</nav>
	</div><!-- Top Bar End -->
	<!-- ========== Left Sidebar Start ========== -->
	<div class="left side-menu">
		<div class="slimscroll-menu" id="remove-scroll">
			<!--- Sidemenu -->
			<div id="sidebar-menu">
				<!-- Left Menu Start -->
				<ul class="metismenu" id="side-menu">
					<li class="menu-title">Main</li>
					<li><a href="<?php echo site_url('dashboard')?>" class="waves-effect"><i class="ti-home"></i><span>
								Dashboard</span></a></li>
					<li><a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i><span> Inventori<span
									class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
						<ul class="submenu">
							<li><a href="<?php echo site_url('produk')?>">Produk</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i><span> Produksi<span
									class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
						<!-- <ul class="submenu">
							<li><a href="<?php echo site_url('produk')?>">Produk</a></li>
						</ul> -->
					</li>
					<li><a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i><span> Transaksi<span
									class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
						<!-- <ul class="submenu">
							<li><a href="<?php echo site_url('produk')?>">Produk</a></li>
						</ul> -->
					</li>
					<li><a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i><span> Pengembalian<span
									class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
						<!-- <ul class="submenu">
							<li><a href="<?php echo site_url('produk')?>">Produk</a></li>
						</ul> -->
					</li>
					<li><a href="<?php echo site_url('customer')?>"> <i class="ti-menu"></i><span>
								Pelanggan</span></a></li>
					<li><a href="<?php echo site_url('mutasi')?>"> <i class="ti-menu"></i><span>
								Mutasi</span></a></li>

				</ul>
			</div><!-- Sidebar -->
			<div class="clearfix"></div>
		</div><!-- Sidebar -left -->
	</div><!-- Left Sidebar End -->
