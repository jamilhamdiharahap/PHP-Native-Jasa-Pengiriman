<?php
include '../controller/model.php';
$updateSupir = new Model();
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jenisKelamin = $_POST['gender'];

$updateSupir->update_supir($nama, $alamat, $telepon, $jenisKelamin, $id);
header("location:tabelSupir.php");
