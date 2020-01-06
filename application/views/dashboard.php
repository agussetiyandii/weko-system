<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
	<meta content="Admin Dashboard" name="description">
	<meta content="Themesbrand" name="author">
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	
	<?php $this->load->view("_partials/css.php") ?>
</head>

<body>
	<?php $this->load->view("_partials/header.php") ?>
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid">
					<div class="page-title-box">
						<div class="row align-items-center">
							<div class="col-sm-6">
								<h4 class="page-title">Dashboard</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
								</ol>
							</div>
						</div>
					</div><!-- end row -->
					<div class="row">
						<div class="col-xl-3 col-md-6">
							<div class="card mini-stat bg-primary text-white">
								<div class="card-body">
									<div class="mb-4">
										<div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/01.png" alt="">
										</div>
										<h5 class="font-16 text-uppercase mt-0 text-white-50">Orders</h5>
										<h4 class="font-500">1,685 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
										<div class="mini-stat-label bg-success">
											<p class="mb-0">+ 12%</p>
										</div>
									</div>
									<div class="pt-2">
										<div class="float-right"><a href="#" class="text-white-50"><i
													class="mdi mdi-arrow-right h5"></i></a></div>
										<p class="text-white-50 mb-0">Since last month</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card mini-stat bg-primary text-white">
								<div class="card-body">
									<div class="mb-4">
										<div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/02.png" alt="">
										</div>
										<h5 class="font-16 text-uppercase mt-0 text-white-50">Revenue</h5>
										<h4 class="font-500">52,368 <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
										<div class="mini-stat-label bg-danger">
											<p class="mb-0">- 28%</p>
										</div>
									</div>
									<div class="pt-2">
										<div class="float-right"><a href="#" class="text-white-50"><i
													class="mdi mdi-arrow-right h5"></i></a></div>
										<p class="text-white-50 mb-0">Since last month</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card mini-stat bg-primary text-white">
								<div class="card-body">
									<div class="mb-4">
										<div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/03.png" alt="">
										</div>
										<h5 class="font-16 text-uppercase mt-0 text-white-50">Average Price</h5>
										<h4 class="font-500">15.8 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
										<div class="mini-stat-label bg-info">
											<p class="mb-0">00%</p>
										</div>
									</div>
									<div class="pt-2">
										<div class="float-right"><a href="#" class="text-white-50"><i
													class="mdi mdi-arrow-right h5"></i></a></div>
										<p class="text-white-50 mb-0">Since last month</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card mini-stat bg-primary text-white">
								<div class="card-body">
									<div class="mb-4">
										<div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/04.png" alt="">
										</div>
										<h5 class="font-16 text-uppercase mt-0 text-white-50">Product Sold</h5>
										<h4 class="font-500">2436 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
										<div class="mini-stat-label bg-warning">
											<p class="mb-0">+ 84%</p>
										</div>
									</div>
									<div class="pt-2">
										<div class="float-right"><a href="#" class="text-white-50"><i
													class="mdi mdi-arrow-right h5"></i></a></div>
										<p class="text-white-50 mb-0">Since last month</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- end row -->
				</div><!-- container-fluid -->
			</div><!-- content -->
			<?php $this->load->view("_partials/footer.php") ?>
		</div><!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->
	</div><!-- END wrapper -->
	<?php $this->load->view("_partials/js.php") ?>

</body>
</html>
