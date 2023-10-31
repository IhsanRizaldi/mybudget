<?php
session_start();
include 'koneksi.php';
$db = new Database();

class Login extends Database{
    public function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cek_data = mysqli_query($this->koneksi, "SELECT * FROM user WHERE email = '$email'");
        $cek_data_user = mysqli_fetch_assoc($cek_data);
        if ($cek_data_user !== null) {
            if (password_verify($password,$cek_data_user['password'])) {
                $_SESSION['email'] = $email;
                $_SESSION['nama'] = $cek_data_user['nama_lengkap'];
                $_SESSION['sukses'] = 'Login Berhasil';
                header('Location:template.php?halaman=index');
            }else{
                header('Location:login.php');
            }
        }else{
            header('Location:login.php');
        }
    }
}
$log = new Login($db);
$log->login();
