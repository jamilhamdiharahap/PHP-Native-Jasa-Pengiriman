<?php
include './controller/model.php';
session_start();

$LoginAdmin = new Model();
$username = $_POST['user'];
$pass = $_POST['pass'];

if (mysqli_num_rows($LoginAdmin->admin($username, $pass)) > 0) :
    $_SESSION['admin'] = $username;
    header("location:./admin/index-admin.php");
else :

    $query = "SELECT * FROM userrental WHERE userName = '$username' LIMIT 1";
    $result = mysqli_query($LoginAdmin->connect(), $query);

    if (mysqli_num_rows($result) > 0) :

        $pengguna = $result->fetch_assoc();

        if (password_verify($pass, $pengguna['kataSandi'])) :

            $_SESSION['user'] = $username;

        endif;
        header("location:./user/index.php");
    else :
        echo "<script>alert('USERNAME TIDAK VALID');window.location.href='index.php'</script>";
    endif;
endif;
