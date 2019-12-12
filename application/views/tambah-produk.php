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
                        <h4>Tambah data barang</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>