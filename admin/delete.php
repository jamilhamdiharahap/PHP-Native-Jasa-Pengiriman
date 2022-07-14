<?php
include '../controller/model.php';
$id = $_GET['id'];
$delete = new Model();
$delete->delete_mobil($id);
if ($delete) :
    header('Location: dataTabel.php');
endif;
