<?php
include '../controller/model.php';
$id = $_GET['id'];
$delete = new Model();
$delete->delete_mobil($id);
if ($delete) {
    header('location: dataMobil.php');
}
