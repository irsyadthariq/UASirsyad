<?php

include "koneksi.php";
$koneksi= new database();

if (isset($_GET['nik'])){
    

    $nik = $_GET['nik'];

    $query = $koneksi->koneksi->prepare("DELETE FROM anggota WHERE nik='$nik'");
    $query->execute();
    $hasil_query=$query->get_result();

    header("location:view.php");

    return $query;
}

$koneksi->koneksi->close();
?>