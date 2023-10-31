<?php
include 'module/koneksi.php';
include 'module/auth.php';

$log = new Auth();
$log->login();
