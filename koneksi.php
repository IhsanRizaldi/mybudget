<?php

class Database {
    public $nama_host = "localhost";
    public $username = "root";
    public $password = "";
    public $nama_db = "my_budget";

    function __construct()
    {
        return mysqli_connect($this->nama_host, $this->username,       
        $this->password, $this->nama_db);
    }
}



