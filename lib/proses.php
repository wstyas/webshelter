<?php
    include "koneksi.php";
    if(post('komentar')){
        $id_buku=post('id_buku');
        $nama=mysqli->real_escape_string($konek, post('nama'));
        $isi=mysqli->real_escape_string($konek, post('isi'));
        $tgl=date("Y-m-d H:i:s");

        $query = "INSERT INTO tb_komentar VALUES(NULL, $id_buku, '$nama', '$isi', 0, '$tgl')";
        $hasil = mysqli->query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=buku_detail&id_buku='.$id_buku.'&a=komentar_sukses');
        else
            header('location: ../index.php?p=buku_detail&id_buku='.$id_buku.'&a=komentar_gagal');
            // print_r("Gagal");

    }