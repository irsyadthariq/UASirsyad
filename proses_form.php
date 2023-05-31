<?php

include "koneksi.php";
$db = new database();

if (isset($_POST['daftar'])){

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tgllahir'];
    $alamat = $_POST['alamat'];
    $noHp = $_POST['noHP'];
    $email = $_POST['email'];

    $query = $db->koneksi->prepare("INSERT INTO anggota VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->bind_param('sssssss', $nik, $nama, $tempat, $tanggal, $alamat, $noHp, $email);

    $query->execute();

    header("location:view.php");
    return $query; 
    
}
$db->koneksi->close();
?>