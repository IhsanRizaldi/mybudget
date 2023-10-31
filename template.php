<?php
session_start();

class Template{
    public function __construct() {
        if(!isset($_SESSION['nama'])) {
            header('Location:login.php');
        }

        require_once "template/header.php";

        if( isset($_GET['halaman']) ){
            $halaman = $_GET['halaman'];
            if( file_exists("$halaman.php")){
                require_once "$halaman.php";
            } else {
                require_once "404.php";
            }
        } else {
            header('Location: login.php');
        }

        require_once "template/footer.php";
    }
}
$tmplt = new Template();