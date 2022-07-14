<?php
include '../controller/model.php';
$id = $_GET['id'];
$delete = new Model();
$delete->delete_user($id);
if ($delete) :
    header('Location: tabelUser.php');
endif;
