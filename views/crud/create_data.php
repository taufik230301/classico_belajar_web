<?php
require_once('koneksi.php');
$id_kategori = isset($_POST['id_kategori']) ? $_POST['id_kategori'] : NULL;
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : NULL;
$judul = isset($_POST['judul']) ? $_POST['judul'] : NULL;
$isi = isset($_POST['isi']) ? $_POST['isi'] : NULL;
$status =  isset($_POST['status']) ? $_POST['status'] : NULL;

if($_POST){
    try{
        $sql = "INSERT INTO film (id_kategori, tanggal, judul, isi, status) VALUES 
        ('".$id_kategori."', '".$tanggal."', '".$judul."', '".$isi."', '".$status."')";
        if(!$koneksi->query($sql)){
            echo $koneksi->error;
            die();
        }
    } catch (Exception $e){
        echo $e;
        die();
    }
    echo "<script>
    alert('Data berhasil di simpan');
    window.location.href='index.php?page=crud/home_table';
    </script>";
}
// echo $id_kategori;
// echo "<br>";
// echo $tanggal;
// echo "<br>";
// echo $judul;
// echo "<br>";
// echo $isi;
// echo "<br>";
// echo $status;
// echo "<br>";

?>

<form action="" method="POST">
  <div class="form-group">
    <label for="id_kategori">Kategori</label>
    <input type="text" class="form-control" id="id_kategori" placeholder="Masukan Kategori" name="id_kategori">
  </div>
  <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" id="tanggal" placeholder="Masukan Tanggal" name="tanggal">
  </div>
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" placeholder="Masukan Isi" name="isi">
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" placeholder="Masukan Status" name="status">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>