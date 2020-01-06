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
        #form-search{
            margin-left: -15px;
        }

        #add-button{
            margin-left : 418px;
        }
    </style>
</head>

<body>
	<?php $this->load->view("_partials/header.php") ?>

	<div class="content-page">
		<div class="content">
			<div class="row">
				<div class="col">
					<div class="card-body">
						<div class="d-flex">
                            <div id="form-search" class="justify-content-start col-sm-6">
                                <form action="" method="get">
                                    <input type="text" class="form-control" name="keyword"
                                        placeholder="Cari barang">
                                </form>
                            </div>
                            <div id="add-button" class="offset-sm-4 justify-content-end">
							    <a href="<?= base_url('produk/tambah') ?>" class="btn btn-success">Tambah produk</a>
                            </div>
						</div>
						<div class="table-responsive mt-2">
							<table class="table table-hover table-bordered">
								<thead class="text-center">
									<tr>
										<th class="align-middle" rowspan="2" scope="col">No</th>
										<th class="align-middle" rowspan="2" scope="col">Gambar produk</th>
										<th class="align-middle" rowspan="2" scope="col">Merek</th>
										<th class="align-middle" rowspan="2" scope="col">Daftar Barang</th>
										<th class="align-middle" rowspan="2" scope="col">Kategori Barang</th>
										<th colspan="4" scope="col">Semua lokasi</th>
										<th class="align-middle" rowspan="2" scope="col">Total</th>
									</tr>
									<tr>
										<th scope="col">SGP</th>
										<th scope="col">BTM</th>
										<th scope="col">MDN</th>
										<th scope="col">JKT</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach($dataProduk as $data): ?>
									<tr class="text-center">
										<td><?= $no++ ?></td>
										<td>
											<?php $fileGambar = $data['gambar'] ?>
											<img class="img-thumbnail" src="<?= base_url("assets/images/products/$fileGambar") ?>" alt="<?= $fileGambar ?>" width="100" height="100">
										</td>
										<?php 
											$dataMerek = $this->db->get_where('t_merek', ['id' => $data['id_merek']])->row_array();
										?>
										<td><?= $dataMerek['merek'] ?></td>
										<td><?= $data['nama_barang'] ?></td>
										<?php 
											$dataFullKategori = $this->db->get_where('t_sub_kategori', ['id' => $data['id_full_kategori']])->row_array();
											$dataKategori = $this->db->get_where('t_kategori', ['id' => $dataFullKategori['id_kategori']])->row_array();
										?>
										<td><?= $dataKategori['kategori'] ?>/<?= $dataFullKategori['sub_kategori'] ?></td>
										<td>45 PCS</td>
										<td>4 PCS</td>
										<td>15 PCS</td>
										<td>8 PCS</td>
										<td>72 PCS</td>
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
