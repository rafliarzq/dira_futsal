<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $databases ="dira_futsal";

    $koneksi = mysqli_connect($host, $user, $pass, $databases);
    if(!$koneksi){
        echo ("gagal");
    }
?>