<?php
include '../controller/model.php';
$id = $_GET['id'];
$delete = new Model();
$delete->delete_supir($id);
if ($delete) :
    header('Location: tabelSupir.php');
endif;
