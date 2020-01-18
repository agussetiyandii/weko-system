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
							<form action="<?= base_url('suplier/simpan_suplier') ?>" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="namaSuplier"
												class="col-lg-3 col-form-label">Nama</label>
											<div class="col-lg-9"><input id="namaSuplier" name="namaSuplier" type="text"
													class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="noTelp" class="col-lg-3 col-form-label">No.
												Telp</label>
											<div class="col-lg-9"><input id="noTelp" name="noTelp" type="text"
													class="form-control"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="email"
												class="col-lg-3 col-form-label">Email</label>
											<div class="col-lg-9"><input id="email" name="email" type="text"
													class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="alamat"
												class="col-lg-3 col-form-label">Alamat</label>
											<div class="col-lg-9"><textarea id="alamat" name="alamat" rows="4"
													class="form-control"></textarea></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="provinsi"
												class="col-lg-3 col-form-label">Provinsi</label>
											<div class="col-lg-9"><input id="provinsi" name="provinsi" type="text"
													class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="kota" class="col-lg-3 col-form-label">Kota</label>
											<div class="col-lg-9"><input id="kota" name="kota" type="text"
													class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="kecamatan"
												class="col-lg-3 col-form-label">Kecamatan</label>
											<div class="col-lg-9"><input id="kecamatan" name="kecamatan" type="text"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="negara"
												class="col-lg-3 col-form-label">Negara</label>
											<div class="col-lg-9"><input id="negara" name="negara"
													type="text" class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="kelurahan"
												class="col-lg-3 col-form-label">Kelurahan</label>
											<div class="col-lg-9"><input id="kelurahan" name="kelurahan" type="text"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="kodePos"
												class="col-lg-3 col-form-label">Kode POS</label>
											<div class="col-lg-9"><input id="kodePos" name="kodePos"
													type="text" class="form-control"></div>
										</div>
									</div>
								</div>
                <button id="btnSubmit" type="submit" class="btn btn-success" name="simpanData">Submit</button>
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
