<?php
session_start();
include 'koneksi.php';
$db = new Database();

class Register extends Database{

    function register(){    
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $no_hp = $_POST['no_hp'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $cek_data = mysqli_query($this->koneksi, "SELECT * FROM user WHERE email = '$email'");
        $cek_data_user = mysqli_fetch_assoc($cek_data);
        if ($cek_data_user === null) {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $data = "INSERT INTO user VALUES (null,'$nama','$email','$password_hash','$no_hp','$jenis_kelamin')";
            $query = mysqli_query($this->koneksi,$data);
            if ($query) {
                header("Location:register.php");
            }
        }else {
            header("Location:register.php");
        }
    }
}
$reg = new Register($db);
$reg->register();
