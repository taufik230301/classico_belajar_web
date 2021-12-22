<?php
require_once('koneksi.php');
$query = "SELECT * FROM film";
$url = "index.php?page=crud/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="logo2.ico">

    <title>Belajar Web Dasar</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<a class="btn btn-default" href="<?= $url.'create_data'?>" role="button">Add</a>
    <table class="table table-hover table-bordered" style="margin-top: 10px">
        <tr class="success">
            <th width="50px">No</th>
            <th>id kategori</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Status</th>
            <th style="text-align: center;">Actions</th>
        </tr>
        <?php
        if($data = mysqli_query($koneksi, $query)){
            $no = 1;

            
            while($film=mysqli_fetch_object($data)){
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $film->id_kategori ?></td>
            <td><?= $film->tanggal ?></td>
            <td><?= $film->judul ?></td>
            <td><?= $film->isi ?></td>
            <td><?= $film->status ?></td>
            <td style="text-align: center;">
            <a href="" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span>
            </a>
            <a href="" class="btn btn-success btn-sm">
            <span class="glyphicon glyphicon-edit"></span>
            </a>
            </td>
        </tr>
        <?php
        }

    }
        ?>
    </table>
</body>

</html>