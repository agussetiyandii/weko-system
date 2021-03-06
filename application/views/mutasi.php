<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>Mutasi - Inventory System</title>
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
							<h4 class="page-title">Data Mutasi</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Mutasi</a></li>
								<li class="breadcrumb-item active">Data Mutasi</li>
							</ol>
						</div>
						<div class="col-sm-6">
							<div class="float-right d-none d-md-block">
								<div id="add-button">
									<a href="<?= base_url('mutasi/add') ?>" class="btn btn-success mdi mdi-plus mr-2"> Tambah
										Mutasi</a>
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
											<th style="text-align:center">Tanggal</th>
											<th style="text-align:center">Ekspedisi</th>
											<th style="text-align:center">Kode / Resi</th>
											<th style="text-align:center">Asal</th>
                      <th style="text-align:center">Tujuan</th>
                      <th style="text-align:center">Kotak (pcs)</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="text-align:center">1</td>
											<td style="text-align:center">12 Januari 2020</td>
											<td style="text-align:center">JNE</td>
											<td style="text-align:center">54955551984</td>
											<td style="text-align:center">BATAM</td>
                      <td style="text-align:center">JKT</td>
                      <td style="text-align:center">4</td>
											<td style="text-align:center">
													<a href="<?= base_url('#') ?>"
														class="btn btn-outline-warning mdi dripicons-document-edit mr-2"></a>
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
