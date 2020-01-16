<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kelola Data Barang</title>
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<?php $this->load->view("_partials/css.php") ?>
	<style>
		#form-search {
			margin-left: -15px;
		}

		#add-button {
			margin-left: 418px;
		}

		/* #addProduk{
			margin-right: -40px;
		} */

	</style>
</head>

<body>
	<?php $this->load->view("_partials/header.php") ?>

	<div class="content-page">
		<div class="content">
			<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Data Produk</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">produk</a></li>
								<li class="breadcrumb-item active">Data produk</li>
							</ol>
						</div>
						<div class="col-sm-6">
							<div class="float-right d-none d-md-block">
								<div id="add-button">
									<a href="<?= base_url('produk/tambah') ?>" class="btn btn-success mdi mdi-plus" id="addProduk"> Tambah Produk</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="card-body">
							<table id="datatable" class="table table-bordered dt-responsive nowrap"
								style="border-collapse: collapse; border-spacing: 0; width: 100%;">
								<thead>
									<tr>
										<th style="text-align:center" width="auto">No</th>
										<th style="text-align:center" width="auto">Gambar</th>
										<th style="text-align:center" width="auto">Merek</th>
										<th style="text-align:center" width="auto">Nama Barang</th>
										<th style="text-align:center" width="auto">Kategori</th>
										<th style="text-align:center" width="auto">Batam</th>
										<th style="text-align:center" width="auto">Medan</th>
										<th style="text-align:center" width="auto">Singapura</th>
										<th style="text-align:center" width="auto">Jakarta</th>
										<th style="text-align:center" width="auto">Total</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="text-align:center">1</td>
										<td></td>
										<td>DELL</td>
										<td>DELL PRECESIION M6400 i5 6/320/128</td>
										<td>LAPTOP/NOTEBOOK</td>
										<td>2 pcs</td>
										<td>1 pcs</td>
										<td>1 pcs</td>
										<td>5 pcs</td>
										<td>9 pcs</td>
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
				</div>
			</div>
		</div>
		<?php $this->load->view("_partials/footer.php") ?>
	</div>

	<?php $this->load->view("_partials/js.php") ?>
</body>

</html>
