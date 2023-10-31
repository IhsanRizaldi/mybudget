<?php
include 'module/koneksi.php';
include 'module/auth.php';

$reg = new Auth();
$reg->register();
