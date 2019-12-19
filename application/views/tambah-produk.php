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

		#btnSubmit {
			margin-left: 134px;
		}

	</style>
</head>

<body>
	<?php $this->load->view("_partials/header.php") ?>
	<div class="content-page">
		<div class="content">
			<div class="card-body">
				<h4>Tambah data barang</h4>
				<div class="row">
					<div class="col-xl-4">
						<form action="produk/simpan_produk" method="post" enctype="multipart/form-data">
							<div class="form-group" id="upload-gambar">
								<input type="file" name="gambar_produk" class="form-control">
							</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group row">
							<label for="asalBarang" class="col-xl-3 col-form-label">Asal barang</label>
							<div class="col-xl-9">
								<select class="form-control" id="asalBarang" name="asalBarang">
									<option value="Stock kantor">Stock kantor</option>
									<option value="Stock pembelian">Stock pembelian</option>
									<option value="Stock supplier">Stock supplier</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="namaBarang" class="col-xl-3 col-form-label">Nama Barang</label>
							<div class="col-xl-9">
								<input class="form-control" type="text" id="namaBarang" name="namaBarang">
							</div>
						</div>
						<div class="form-group row">
							<?php $data_merek = $this->db->get('t_merek')->result(); ?>
							<label for="merek" class="col-xl-3 col-form-label">Merek</label>
							<div class="col-xl-9">
								<select class="form-control" id="merek" name="merek">
									<?php foreach($data_merek as $data): ?>
									<option value="<?= $data->id ?>"><?= $data->merek ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<?php $data_kategori = $this->db->get('t_kategori')->result(); ?>
							<label for="kategoriBarang" class="col-xl-3 col-form-label">Kategori barang</label>
							<div class="col-xl-4">
								<select id="select-category" class="form-control" name="kategoriBarang">
									<?php foreach($data_kategori as $data): ?>
									<option value="<?= $data->id ?>"><?= $data->kategori ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-xl-4">
								<select id="select-sub-kategori" class="form-control" name="subKategoriBarang">
									<option value="Notebook">(Akan disesuaikan)</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<?php $data_lokasi = $this->db->get('t_lokasi')->result(); ?>
							<label for="lokasiBarang" class="col-xl-3 col-form-label">Lokasi barang</label>
							<div class="col-xl-4">
								<select class="form-control" name="lokasiBarang">
									<?php foreach($data_lokasi as $data): ?>
									<option value="<?= $data->id ?>"><?= $data->lokasi ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-xl-4">
								<select class="form-control" name="subLokasiBarang">
									<option value="Lantai 1">(Akan disesuaikan)</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="kondisi" class="col-xl-3 col-form-label">Kondisi barang</label>
							<div class="col-xl-9">
								<select class="form-control" name="kondisi">
									<option value="Bekas">Bekas</option>
									<option value="Baru">Baru</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="harga" class="col-xl-3 col-form-label">Harga (Rp)</label>
							<div class="col-xl-3">
								<input class="form-control" type="number" id="harga" name="harga">
							</div>
							<label for="jumlah" class="col-xl-3 col-form-label">Jumlah (PCS)</label>
							<div class="col-xl-3">
								<input class="form-control" type="number" id="jumlah" name="jumlah">
							</div>
						</div>
						<div class="form-group row">
							<label for="remark" class="col-xl-3 col-form-label">Remark</label>
							<div class="col-xl-9">
								<textarea name="remark" class="form-control" id="remark" cols="30" rows="10"></textarea>
							</div>
						</div>
						<button id="btnSubmit" type="submit" class="btn btn-success" name="simpanData">Simpan
							data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('_partials/js.php'); ?>
</body>

</html>
