<?php
include './controller/model.php';
extract($_POST);
$register = new Model();
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pass = $_POST['password'];
$password = password_hash($pass, PASSWORD_DEFAULT);
$register->register($nama, $alamat, $gender, $email, $password);
echo "<script>alert('Register berhasil');window.location.href='index.php'</script>";
