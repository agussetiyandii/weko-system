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
									<?php $no = 1; ?>
									<?php foreach($dataProduk as $produk): ?>
									<?php 
										$getKodeBarang = $produk['kode_barang'];
										$dataStokBatam = $this->db->get_where('t_stok_batam', ['kode_barang' => $getKodeBarang])->row_array();
										$dataStokMedan = $this->db->get_where('t_stok_medan', ['kode_barang' => $getKodeBarang])->row_array();
										$dataStokJakarta = $this->db->get_where('t_stok_jakarta', ['kode_barang' => $getKodeBarang])->row_array();

										$stokBatam = $dataStokBatam['stok_ready'] + $dataStokBatam['stok_pending'] + $dataStokBatam['stok_rusak'];
										$stokMedan = $dataStokMedan['stok_ready'] + $dataStokMedan['stok_pending'] + $dataStokMedan['stok_rusak'];
										$stokJakarta = $dataStokJakarta['stok_ready'] + $dataStokJakarta['stok_pending'] + $dataStokJakarta['stok_rusak'];

										$totalStok = $stokBatam + $stokMedan + $stokJakarta;

										$getMerek = $this->db->get_where('t_merek', ['id' => $produk['id_merek']])->row_array();
										$getKategori = $this->db->get_where('t_kategori', ['id' => $produk['id_kategori']])->row_array();
										$getFullKategori = $this->db->get_where('t_sub_kategori', ['id' => $produk['id_full_kategori']])->row_array();
									?>
									<tr>
										<td style="text-align:center"><?= $no++; ?></td>
										<td>
											<img class="img-thumbnail" src="assets/images/products/<?= $produk['gambar'] ?>" alt="">
										</td>
										<td><?= $getMerek['merek']; ?></td>
										<td><?= $produk['nama_barang'] ?></td>
										<td><?= $getKategori['kategori'] ?>/<?= $getFullKategori['sub_kategori'] ?></td>
										<td><?= $stokBatam ?> pcs</td>
										<td><?= $stokMedan ?> pcs</td>
										<td>0 pcs</td>
										<td><?= $stokJakarta ?> pcs</td>
										<td><?= $totalStok ?> pcs</td>
										<td style="text-align:center">
											<a href="<?= base_url('produk/pageEditProduk/'.$getKodeBarang) ?>"
												class="btn btn-outline-warning mdi dripicons-document-edit mr-2"></a>
											<a href="<?= base_url('produk/deleteProduk/'.$getKodeBarang) ?>"
												class="btn btn-outline-danger mdi dripicons-document-delete mr-2"></a>
										</td>
									</tr>
									<?php endforeach; ?>
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
