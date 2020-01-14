<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>Add Customer - Inventory System</title>
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
							<h4 class="page-title">Tambah Data Pelanggan</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Pelanggan</a></li>
								<li class="breadcrumb-item active">Tambah Data Pelanggan</li>
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
										<div class="form-group row"><label for="namaCustomer" class="col-lg-3 col-form-label">Nama</label>
											<div class="col-lg-9"><input id="namaCustomer" name="namaCustomer" type="text"
													class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="noTelp" class="col-lg-3 col-form-label">No.
												Telp</label>
											<div class="col-lg-9"><input id="noTelp" name="noTelp" type="text" class="form-control"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="email" class="col-lg-3 col-form-label">Email</label>
											<div class="col-lg-9"><input id="email" name="email" type="text" class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="alamat" class="col-lg-3 col-form-label">Alamat</label>
											<div class="col-lg-9"><textarea id="alamat" name="alamat" rows="4"
													class="form-control"></textarea></div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label for="provinsi" class="col-xl-3 col-form-label">Provinsi</label>
									<div class="col-xl-3">
										<?php $data_provinsi = $this->db->get('t_provinsi')->result(); ?>
										<select id="select-provinsi" class="form-control" name="provinsi">
											<option value="0"></option>
											<?php foreach($data_provinsi as $data): ?>
											<option value="<?= $data->id ?>"><?= $data->provinsi ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="col-xl-3">
										<select id="select-kota" class="form-control" name="kota">
										</select>
									</div>
									<div class="col-xl-3">
										<select id="select-kecamatan" class="form-control" name="kecamatan">
										</select>
									</div>
								</div>


								<!-- <div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="provinsi" class="col-lg-3 col-form-label">Provinsi</label>
											<?php $data_provinsi = $this->db->get('t_provinsi')->result(); ?>
											<div class="col-lg-9"><select id="provinsi" name="provinsi" class="form-control">
													<option value="0"></option>
													<?php foreach($data_provinsi as $data): ?>
													<option value="<?= $data->id ?>"><?= $data->provinsi ?></option>
													<?php endforeach; ?>
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
												class="col-lg-3 col-form-label">Kecamatan</label>
											<div class="col-lg-9"><input id="txtStateProvinceBilling" name="txtStateProvinceBilling"
													type="text" class="form-control"></div>
										</div>
									</div>
								</div> -->




								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="negara" class="col-lg-3 col-form-label">Negara</label>
											<div class="col-lg-9"><input id="negara" name="negara" type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="kodePos" class="col-lg-3 col-form-label">Kode POS</label>
											<div class="col-lg-9"><input id="kodePos" name="kodePos" type="text" class="form-control"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row"><label for="txtCityBilling" class="col-lg-3 col-form-label">Maksimal
												Kredit (Rp)</label>
											<div class="col-lg-9"><input id="txtCityBilling" name="txtCityBilling" type="number"
													class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row"><label for="txtStateProvinceBilling"
												class="col-lg-3 col-form-label">Tempo Kredit</label>
											<div class="col-lg-9"><input id="txtStateProvinceBilling" name="txtStateProvinceBilling"
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
	<script>
		$(document).ready(function () {
			$('#select-kota').attr('disabled', 'true');
			$('#select-kecamatan').hide();

			// $('#select-kategori').change(function () {
			// 	let id = $(this).val();
			// 	if (id == 0) {
			// 		$('#select-sub-kategori').attr('disabled', 'true');
			// 	} else {
			// 		$('#select-sub-kategori').removeAttr('disabled');
			// 	}
			// 	loadSubKategori(id);
			// });

			$('#select-provinsi').change(function () {
				let id = $(this).val();
				if (id == 0) {
					$('#select-kota').attr('disabled', 'true');
				} else {
					$('#select-kota').removeAttr('disabled');
				}

				if (id == 2) {
					$('#select-kecamatan').show();
				} else {
					$('#select-kecamatan').empty().hide();
				}

				loadKota(id);
			});

			$('#select-kota').change(function () {
				let id = $('#select-provinsi').val();
				let kota = $('#select-kota').val();
				loadKecamatan(id, kota);
			});

			// $('#upload-image').change(function (event) {
			// 	let reader = new FileReader();
			// 	reader.onload = function () {
			// 		$('#image-preview').attr('src', reader.result);
			// 	}
			// 	reader.readAsDataURL(event.target.files[0]);
			// });
		});


		// function loadSubKategori(id) {
		// 	$.get("<?= base_url('produk/load_sub_kategori/') ?>" + id, function (data) {
		// 		$('#select-sub-kategori').html(data);
		// 	});
		// }

		function loadKota(id) {
			$.get("<?= base_url('customer/kota/') ?>" + id, function (data) {
				$('#select-kota').html(data);
			});
		}

		function loadKecamatan(id, kota) {
			$.get(`<?= base_url('customer/kecamatan/') ?>${id}/${kota}`, function (data) {
				$('#select-kecamatan').html(data);
			});
		}

	</script>

</body>

</html>
