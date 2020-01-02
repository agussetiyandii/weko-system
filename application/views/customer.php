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
							<h4 class="page-title">Data Pelanggan</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Pelanggan</a></li>
								<!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li> -->
								<li class="breadcrumb-item active">Data Pelanggan</li>
							</ol>
						</div>
						<div class="col-sm-6">
							<div class="float-right d-none d-md-block">
								<div id="add-button">
									<a href="<?= base_url('customer/add') ?>" class="btn btn-success mdi mdi-plus mr-2"> Tambah
										produk</a>
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
											<th width="20px">No</th>
											<th>Nama Pelanggan</th>
											<th>No. Telp</th>
											<th>Kota</th>
											<th>Kredit</th>
                      <th>Sisa Hutang</th>
                      <th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Edi</td>
											<td>0811 1234 567</td>
											<td>Batam</td>
											<td>Rp50.000.000</td>
                      <td>Rp2.000.000</td>
                      <td></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Boy</td>
											<td>0811 1234 567</td>
											<td>Batam</td>
											<td>Rp50.000.000</td>
                      <td>Rp2.000.000</td>
                      <td></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Rusdi</td>
											<td>0811 1234 567</td>
											<td>Batam</td>
											<td>Rp50.000.000</td>
                      <td>Rp2.000.000</td>
                      <td></td>
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
