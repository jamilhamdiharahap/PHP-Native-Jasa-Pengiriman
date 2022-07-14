<?php
include '../controller/model.php';
$driver = new Model();
extract($_POST);
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jenisKelamin = $_POST['gender'];
$driver->insert_supir($nama, $alamat, $telepon, $jenisKelamin);
header("location:tabelSupir.php");
