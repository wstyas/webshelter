<?php
    date_default_timezone_set("Asia/Jakarta");
    $host ="localhost";
    $user ="root";
    $pass = "";
    $dbName = "web";

    $konek = mysqli_connect($host,$user,$pass);
    if(!$konek)
        print_r("Gagal koneksi...");

    $hasil = mysqli_select_db($konek,$dbName);
