<?php
session_start();
include "koneksi.php";
$db = new database();

if(isset($_GET['nik'])){
    $nik =($_GET["nik"]);
    
    $query = $db->koneksi->prepare("SELECT * FROM anggota WHERE nik='$nik'");
    $query->execute();
    $hasil=$query->get_result();

    $data = mysqli_fetch_array($hasil);
    $nik = $data["nik"];
    $nama = $data["nama"];
    $tempat = $data["tempat"];
    $tanggal = $data["tgllahir"];
    $alamat = $data["alamat"];
    $noHP = $data["noHP"];
    $email = $data["email"];
}else{
    header("location:view.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="dashboard">
    <div class="sidebar">
        <div class="logo">
            <h2>PDI Perjuangan</h2>
            <img src="image/logo3.jpg" alt="Logo">
    </div>
      <ul>
        <li><a href="dashboard.php">Beranda</a></li>
        <li><a href="form.php">Daftar</a></li>
        <li><a href="view.php">Anggota PDIP</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="main-content">
            <form id="form_mahasiswa" action="proses_edit.php" method="post">
                <fieldset>
                    <legend>Edit Anggota</legend>
                    <p>
                        <label for="nik">NIK : </label>
                        <input type="hidden" name="nik" value="<?php echo $nik; ?>">
                        <input type="text" name="nik" id="nik" value="<?php echo $nik ?>" disabled>
                    </p>
                    <p>
                        <label for="nama">Nama Lengkap : </label>
                        <input type="text" name="nama" id="nama" value="<?php echo $nama ?>" required>
                    </p>
                    <p>
                        <label for="tempat">Tempat Lahir : </label>
                        <input type="text" name="tempat" id="tempat" value="<?php echo $tempat ?>" required>
                    </p>
                    <p>
                        <label for="tgllahir">Tanggal Lahir : </label>
                        <input type="text" name="tgllahir" id="tgllahir" placeholder="yyyy-mm-dd" value="<?php echo $tgllahir ?>" required>
                    </p>
                    <p>
                        <label for="alamat">Alamat : </label>
                        <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>" required>
                    </p>
                    <p>
                        <label for="noHP">No HP : </label>
                        <input type="text" name="noHP" id="noHP" placeholder="Contoh: 087764526378" value="<?php echo $noHP ?>" required>
                    </p>        
                    <p>
                        <label for="email">Email : </label>
                        <input type="text" name="email" id="email" value="<?php echo $email ?>" required>
                    </p>
                    </fieldset>
                    <p>
                    <input type="submit" name="edit" value="Update">
                </p>
            </form>
    </div>
  </div>
</body>
</html>
