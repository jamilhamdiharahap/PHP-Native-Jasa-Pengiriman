<?php
include '../controller/model.php';
$mobil = new Model();
extract($_POST);
$image = $_POST['avatar'];
$merk = $_POST['merk'];
$noseri = $_POST['noseri'];
$jumlah = $_POST['jumlah'];
$kapasitas = $_POST['kapasitas'];
$tarif = $_POST['tarif'];
$mobil->insert_mobil($image, $merk, $noseri, $jumlah, $kapasitas, $tarif);
header("location:dataTabel.php");
