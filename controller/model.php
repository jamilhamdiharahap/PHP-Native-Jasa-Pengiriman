<?php
class Model
{
    public $server = "localhost",
        $user = "root",
        $password = "",
        $database = "rentalKurnia";

    public function connect()
    {
        $connect =  mysqli_connect($this->server, $this->user, $this->password, $this->database);
        return $connect;
    }




    /////////////////admin///////////////
    public function admin($username, $pass)
    {
        $admin = mysqli_query($this->connect(), "SELECT * FROM admin WHERE userName='$username' AND kataSandi='$pass'");
        return $admin;
    }
    ////////////////user/////////////////
    public function user($username, $pass)
    {

        $user = mysqli_query($this->connect(), "SELECT * FROM userrental WHERE userName='$username' AND kataSandi='$pass'");
        return $user;
    }
    ///////////////////register////////////////
    public function register($nama, $alamat, $gender, $email, $pass)
    {
        mysqli_query($this->connect(), "INSERT INTO userRental VALUES('','$nama','$alamat','$gender','$email','$pass')");
    }

    //////////////////// data mobil //////////////////
    public function delete_mobil($id)
    {
        $delete = mysqli_query($this->connect(), "DELETE FROM mobil WHERE id='$id'");
        return $delete;
    }
    public function insert_mobil($image, $merk, $noseri, $jumlah, $kapasitas, $tarif)
    {
        mysqli_query($this->connect(), "INSERT INTO mobil VALUES('','$image','$merk','$noseri','$jumlah','$kapasitas','$tarif')");
    }

    public function select_mobil()
    {
        $mobil = mysqli_query($this->connect(), "SELECT * FROM mobil");
        return $mobil;
    }
    public function update_mobil($image, $merk, $noseri, $jumlah, $kapasitas, $tarif, $id)
    {
        mysqli_query($this->connect(), "UPDATE mobil SET foto='$image',merek='$merk',noSeri='$noseri',jumlah='$jumlah',kapasitas='$kapasitas',tarif='$tarif' WHERE id='$id'");
    }

    //////////////////// data user ///////////////
    public function select_user()
    {
        $user = mysqli_query($this->connect(), "SELECT * FROM userRental ORDER BY nama");
        return $user;
    }
    public function insert_user($nama, $alamat, $jenisKelamin, $username, $pass)
    {
        mysqli_query($this->connect(), "INSERT INTO userRental VALUES('','$nama','$alamat','$jenisKelamin','$username','$pass')");
    }
    public function delete_user($id)
    {
        $delete = mysqli_query($this->connect(), "DELETE FROM userRental WHERE id='$id'");
    }
    //////////   data dari tabel draiver /////////////
    public function select_supir()
    {
        $supir = mysqli_query($this->connect(), "SELECT * FROM supir ORDER BY nama");
        return $supir;
    }
    public function insert_supir($nama, $alamat, $telepon, $jenisKelamin)
    {
        $supir = mysqli_query($this->connect(), "INSERT INTO supir VALUES('','$nama','$alamat','$telepon','$jenisKelamin')");
    }
    public function delete_supir($id)
    {
        $delete = mysqli_query($this->connect(), "DELETE FROM supir WHERE id='$id'");
    }
    public function update_supir($nama, $alamat, $telepon, $jenisKelamin, $id)
    {
        mysqli_query($this->connect(), "UPDATE supir SET nama='$nama',alamat='$alamat',telepon='$telepon',jenisKelamain='$jenisKelamin' WHERE id='$id'");
    }
    public function pemesanan($i)
    {
        $merek = mysqli_query($this->connect(), "SELECT tarif FROM mobil WHERE id = '$i'");
        return $merek;
    }
    public function transaksi($total)
    {
        date_default_timezone_set('Asia/jakarta');
        $now = date('Y-m-d H:i:s');
        $hasil = mysqli_query($this->connect(), "INSERT INTO transaksi VALUES ('','$total', '$now')");
    }

    public function select_transaksi()
    {
        $transaksi = mysqli_query($this->connect(), "SELECT * FROM transaksi");
        return $transaksi;
    }
    public function jumlah_transaksi()
    {
        $transaksi = mysqli_query($this->connect(), "SELECT total FROM transaksi");
        return $transaksi;
    }
}
