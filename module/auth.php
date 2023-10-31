<?php
session_start();

class Auth {
    public function login(){
        global $koneksi;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query_cek = "SELECT * FROM user WHERE email = '$email'";
        $cek_data = $koneksi->query($query_cek);
        $cek_data_user = mysqli_fetch_assoc($cek_data);
        if ($cek_data_user !== null) {
            if (password_verify($password,$cek_data_user['password'])) {
                $_SESSION['email'] = $email;
                $_SESSION['nama'] = $cek_data_user['nama_lengkap'];
                $_SESSION['user_id'] = $cek_data_user['user_id'];
                header('Location:template.php?halaman=index');
            }else{
                header('Location:login.php');
            }
        }else{
            header('Location:login.php');
        }
    }
    
    function register(){    
        global $koneksi;
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $no_hp = $_POST['no_hp'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $query_cek = "SELECT * FROM user WHERE email = '$email'";
        $cek_data = $koneksi->query($query_cek);
        $cek_data_user = $cek_data->fetch_assoc();
        if ($cek_data_user === null) {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $data = "INSERT INTO user VALUES (null,'$nama','$email','$password_hash','$no_hp','$jenis_kelamin')";
            $query = $koneksi->query($data);
            if ($query) {
                header("Location:login.php");
            }
        }else {
            header("Location:register.php");
        }
    }
}