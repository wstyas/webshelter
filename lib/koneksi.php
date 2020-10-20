<?php
    date_default_timezone_set("Asia/Jakarta");
    $host ="localhost";
    $user ="root";
    $pass = "";
    $dbName = "web";

    $konek = mysqli->connect($host,$user,$pass);
    if(!$konek)
        $this("Gagal koneksi...");

    $hasil = mysqli->select_db($konek,$dbName);
