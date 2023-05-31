<?php 
if (isset($_POST['edit'])){

    include("koneksi.php");
    $db = new database();

    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $tempat = $_POST["tempat"];
    $tanggal = $_POST["tgllahir"];
    $alamat = $_POST["alamat"];
    $noHP = $_POST["noHP"];
    $email = $_POST["email"];


    $query = $db->koneksi->prepare("UPDATE anggota SET nik = '$nik', 
    nama = '$nama', tempat = '$tempat', tgllahir = '$tanggal', alamat = '$alamat', noHP = '$noHP', email = '$email' WHERE nik= '$nik'");
    $query->execute();

    header("location:view.php");
    return $query;

}
?>