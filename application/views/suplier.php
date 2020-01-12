<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>Suplier - Inventory System</title>
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
							<h4 class="page-title">Data Suplier</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Suplier</a></li>
								<li class="breadcrumb-item active">Data Suplier</li>
							</ol>
						</div>
						<div class="col-sm-6">
							<div class="float-right d-none d-md-block">
								<div id="add-button">
									<a href="<?= base_url('suplier/add') ?>" class="btn btn-success mdi mdi-plus mr-2"> Tambah
										Suplier</a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- end row -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<table id="datatable" class="table table-bordered dt-responsive nowrap"
									style="border-collapse: collapse; border-spacing: 0; width: 100%;">
									<thead>
										<tr>
											<th style="text-align:center" width="20px" >No</th>
											<th style="text-align:center">Nama Pelanggan</th>
											<th style="text-align:center">No. Telp</th>
											<th style="text-align:center">Negara</th>
											<th style="text-align:center">Kota</th>
											<th style="text-align:center">Email</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="text-align:center">1</td>
											<td>Bok Cok Tong</td>
											<td></td>
											<td>Singapore</td>
											<td></td>
											<td></td>
											<td style="text-align:center">
													<a href="<?= base_url('#') ?>"
														class="btn btn-outline-warning mdi dripicons-document-edit mr-2"></a>
													<a href="<?= base_url('#') ?>"
														class="btn btn-outline-danger mdi dripicons-document-delete mr-2"></a>
											</td>
										</tr>
									</tbody>
								</table>
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
