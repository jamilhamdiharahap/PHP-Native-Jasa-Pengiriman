<?php
include '../controller/model.php';
$mobil = $_POST['mobil'];
$hari = $_POST['hari'];
$total = $hari * $mobil;

$hasil = new Model();
$hasil->transaksi($total);
header("location:index.php");
