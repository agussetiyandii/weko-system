<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>Add Suplier - Inventory System</title>
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
							<h4 class="page-title">Tambah Data Suplier</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Suplier</a></li>
								<li class="breadcrumb-item active">Tambah Data Suplier</li>
							</ol>
						</div>
					</div>
				</div><!-- end row -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="txtFirstNameBilling"
												class="col-lg-3 col-form-label">Nama</label>
											<div class="col-lg-9"><input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text"
													class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="txtCompanyBilling" class="col-lg-3 col-form-label">No.
												Telp</label>
											<div class="col-lg-9"><input id="txtCompanyBilling" name="txtCompanyBilling" type="text"
													class="form-control"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="txtEmailAddressBilling"
												class="col-lg-3 col-form-label">Email</label>
											<div class="col-lg-9"><input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text"
													class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="txtAddress1Billing"
												class="col-lg-3 col-form-label">Alamat</label>
											<div class="col-lg-9"><textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4"
													class="form-control"></textarea></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="txtCityBilling"
												class="col-lg-3 col-form-label">Kecamatan</label>
											<div class="col-lg-9"><input id="txtCityBilling" name="txtCityBilling" type="text"
													class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="txtCityBilling" class="col-lg-3 col-form-label">Kota</label>
											<div class="col-lg-9"><input id="txtCityBilling" name="txtCityBilling" type="text"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="txtStateProvinceBilling"
												class="col-lg-3 col-form-label">Provinsi</label>
											<div class="col-lg-9"><input id="txtStateProvinceBilling" name="txtStateProvinceBilling"
													type="text" class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="txtCityBilling"
												class="col-lg-3 col-form-label">Negara</label>
											<div class="col-lg-9"><input id="txtCityBilling" name="txtCityBilling" type="text"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="txtStateProvinceBilling"
												class="col-lg-3 col-form-label">Kode POS</label>
											<div class="col-lg-9"><input id="txtStateProvinceBilling" name="txtStateProvinceBilling"
													type="text" class="form-control"></div>
										</div>
									</div>
								</div>
                <div class="form-group"></div><button type="submit"
                          class="btn btn-primary">Submit</button>
							</div>
							</form>
						</div>
					</div>
				</div><!-- end col -->
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
