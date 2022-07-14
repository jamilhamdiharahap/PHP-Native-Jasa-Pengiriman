<?php
include '../controller/model.php';
$upadateMobil = new Model();
$id = $_POST['id'];
$image = $_POST['avatar'];
$merk = $_POST['merk'];
$noseri = $_POST['noseri'];
$jumlah = $_POST['jumlah'];
$kapasitas = $_POST['kapasitas'];
$tarif = $_POST['tarif'];
$upadateMobil->update_mobil($image, $merk, $noseri, $jumlah, $kapasitas, $tarif, $id);
header("location:dataMobil.php");
