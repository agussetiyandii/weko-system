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
									<tr class="text-center">
										<td>1</td>
										<td>(Gambar)</td>
										<td>DELL</td>
										<td>DELL PRECESIION M6400</td>
										<td>LAPTOP/NOTEBOOK</td>
										<td>45 PCS</td>
										<td>4 PCS</td>
										<td>15 PCS</td>
										<td>8 PCS</td>
										<td>72 PCS</td>
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
