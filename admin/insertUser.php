<?php
include '../controller/model.php';
$user = new Model();
extract($_POST);
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenisKelamin = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['pass'];
$pass = password_hash($password, PASSWORD_DEFAULT);
$user->insert_user($nama, $alamat, $jenisKelamin, $username, $pass);
header("location:tabelUser.php");
