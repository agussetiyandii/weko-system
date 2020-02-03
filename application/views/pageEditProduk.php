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
			margin-left: 155px;
		}

		/* #select-sub-lokasi-2{
			display: none;
		} */

	</style>
</head>

<body>
	<?php $this->load->view("_partials/header.php") ?>
	<div class="content-page">
		<div class="content">
			<div class="card-body">
				<h4>Ubah data barang</h4>
				<div class="row">
					<div class="col-xl-3">
						<form action="<?= base_url('produk/saveEditProduk') ?>" method="post"
							enctype="multipart/form-data">
							<input type="hidden" name="kode_barang" id="kode_barang" value="<?= $produk->kode_barang ?>">
							<div class="form-group row" id="upload-gambar">
								<input type="file" name="gambar_produk" class="form-control" id="upload-image">
							</div>
							<div class="row text-center">
							<img id="image-preview" class="img-thumbnail" src="assets/images/products/laptop_lenovo.jpg" alt="<?= $produk->gambar ?>">
							</div>
					</div>
					<div class="col-xl-7 ml-2">
						<div class="form-group row">
							<label for="asalBarang" class="col-xl-3 col-form-label">Asal barang</label>
							<div class="col-xl-4">
								<select class="form-control" id="asalBarang" name="asalBarang">
									<option value=""></option>
									<?php foreach($asalBarang as $asal): ?>
										<?php 
											if($asal === $produk->asal_barang){
												$selected = 'selected';
											} else {
												$selected = '';
											}
										?>
									<option value="<?= $asal ?>" <?= $selected ?>><?= $asal ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="kodeBarang" class="col-xl-3 col-form-label">Kode Barang</label>
							<div class="col-xl-9">
								<input class="form-control" type="text" id="kodeBarang" name="kodeBarang"
									autocomplete="off" value="<?= $produk->kode_barang ?>" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label for="namaBarang" class="col-xl-3 col-form-label">Nama Barang</label>
							<div class="col-xl-9">
								<input class="form-control" type="text" id="namaBarang" name="namaBarang"
									autocomplete="off" value="<?= $produk->nama_barang ?>">
							</div>
						</div>
						<div class="form-group row">
							<?php $data_merek = $this->db->get('t_merek')->result(); ?>
							<label for="merek" class="col-xl-3 col-form-label">Merek</label>
							<div class="col-xl-4">
								<select class="form-control" id="merek" name="idMerek">
									<option value=""></option>
									<?php foreach($data_merek as $data): ?>
										<?php
											if($data->id == $produk->id_merek){
												$selected = 'selected';
											} else {
												$selected = '';
											}
										?>
									<option value="<?= $data->id ?>" <?= $selected ?>><?= $data->merek ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="kategoriBarang" class="col-xl-3 col-form-label">Kategori barang</label>
							<div class="col-xl-4">
								<?php $data_kategori = $this->db->get('t_kategori')->result(); ?>
								<select id="select-kategori" class="form-control" name="idKategoriBarang">
									<option value="0"></option>
									<?php foreach($data_kategori as $data): ?>
										<?php
											if($data->id == $produk->id_kategori){
												$selected = 'selected';
											} else {
												$selected = '';
											}
										?>
									<option value="<?= $data->id ?>" <?= $selected ?>><?= $data->kategori ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-xl-4">
								<select id="select-sub-kategori" class="form-control" name="idSubKategoriBarang">
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="lokasiBarang" class="col-xl-3 col-form-label">Lokasi barang</label>
							<div class="col-xl-3">
								<?php $data_lokasi = $this->db->get('t_lokasi')->result(); ?>
								<select id="select-lokasi" class="form-control" name="idLokasiBarang">
									<option value="0"></option>
									<?php foreach($data_lokasi as $data): ?>
									<option value="<?= $data->id ?>"><?= $data->lokasi ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-xl-3">
								<select id="select-sub-lokasi-1" class="form-control" name="subLokasiBarang1">
								</select>
							</div>
							<div class="col-xl-3">
								<select id="select-sub-lokasi-2" class="form-control" name="subLokasiBarang2">
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="kondisi" class="col-xl-3 col-form-label">Kondisi barang</label>
							<div class="col-xl-4">
								<select class="form-control" name="kondisi">
									<option value=""></option>
									<?php $kondisi = ['Bekas', 'Baru'] ?>
									<?php  ?>
									<?php
										if($kondisi == $produk->id_kategori){
											$selected = 'selected';
										} else {
											$selected = '';
										}
									?>
									<option value="Bekas">Bekas</option>
									<option value="Baru">Baru</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="kondisi" class="col-xl-3 col-form-label">Info barang</label>
							<div class="col-xl-4">
								<select class="form-control" name="infoBarang">
									<option value=""></option>
									<option value="Sudah Tes">Sudah Tes</option>
									<option value="Belum Tes">Belum Tes</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="harga" class="col-xl-3 col-form-label">Harga (Rp)</label>
							<div class="col-xl-3">
								<input class="form-control" type="text" name="harga" value="<?= $produk->harga ?>">
							</div>
							<label for="jumlah" class="col-xl-3 col-form-label">Jumlah (PCS)</label>
							<div class="col-xl-3">
								<input class="form-control" type="number" id="jumlah" name="jumlah" value="<?= $produk->jumlah ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="remark" class="col-xl-3 col-form-label">Remark</label>
							<div class="col-xl-9">
								<textarea name="remark" class="form-control" id="remark" cols="30" rows="10"><?= $produk->remark ?></textarea>
							</div>
						</div>
						<button id="btnSubmit" type="submit" class="btn btn-success" name="simpanData">Simpan
							perubahan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('_partials/js.php'); ?>
	<script>
		$(document).ready(function () {
			$('#select-sub-kategori, #select-sub-lokasi-1').attr('disabled', 'true');
			$('#select-sub-lokasi-2').hide();

			$('#select-kategori').change(function () {
				let id = $(this).val();
				if (id == 0) {
					$('#select-sub-kategori').attr('disabled', 'true');
				} else {
					$('#select-sub-kategori').removeAttr('disabled');
				}
				loadSubKategori(id);
			});

			$('#select-lokasi').change(function () {
				let id = $(this).val();
				if (id == 0) {
					$('#select-sub-lokasi-1').attr('disabled', 'true');
				} else {
					$('#select-sub-lokasi-1').removeAttr('disabled');
				}

				if (id == 2) {
					$('#select-sub-lokasi-2').show();
				} else {
					$('#select-sub-lokasi-2').empty().hide();
				}

				loadSubLokasi1(id);
			});

			$('#select-sub-lokasi-1').change(function () {
				let id = $('#select-lokasi').val();
				let subLokasi1 = $('#select-sub-lokasi-1').val();
				loadSubLokasi2(id, subLokasi1);
			});

			$('#upload-image').change(function (event) {
				let reader = new FileReader();
				reader.onload = function () {
					$('#image-preview').attr('src', reader.result);
				}
				reader.readAsDataURL(event.target.files[0]);
			});
		});


		function loadSubKategori(id) {
			$.get("<?= base_url('produk/load_sub_kategori/') ?>" + id, function (data) {
				$('#select-sub-kategori').html(data);
			});
		}

		function loadSubLokasi1(id) {
			$.get("<?= base_url('produk/load_sub_lokasi_1/') ?>" + id, function (data) {
				$('#select-sub-lokasi-1').html(data);
			});
		}

		function loadSubLokasi2(id, subLokasi1) {
			$.get(`<?= base_url('produk/load_sub_lokasi_2/') ?>${id}/${subLokasi1}`, function (data) {
				$('#select-sub-lokasi-2').html(data);
			});
		}

	</script>

</body>

</html>
