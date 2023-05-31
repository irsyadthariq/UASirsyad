<?php
include "koneksi.php";
$db = new database();
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
    <h1 class="display: block;margin-bottom: 1rem;text-align:center;">Tabel Anggota</h1>
    <?php 
      if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
      }
      ?><br>
            <table border="1" align="center">
            <tr>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Pilihan</th>
            </tr>
            <?php
           if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$query = $db->koneksi->prepare("SELECT * FROM anggota WHERE nama='$cari'");
			$query->execute();
			$hasil=$query->get_result();				
		  }else{
			$query = $db->koneksi->prepare("SELECT * FROM anggota ORDER BY nik ASC ");
			$query->execute();
			$hasil=$query->get_result();		
		  } 

		  
		  while ($data = mysqli_fetch_array($hasil))
		  {
                echo "<tr>";
                echo "<td>$data[nik]</td>";
                echo "<td>$data[nama]</td>";
                echo "<td>$data[tempat]<?td>";
                echo "<td>$data[tgllahir]<?td>";
                echo "<td>$data[alamat]<?td>";
                echo "<td>$data[noHP]</td>";
                echo "<td>$data[email]<?td>";
                echo '<td>
                    <a href="edit.php?nik='.$data['nik'].'"><input type="submit" name="edit" value="Edit"></a> /
                    <a href="hapus.php?nik='.$data['nik'].'"
                        onclick="return confirm(\'Anda yakin akan menghapus data?\')"><input type="submit" name="hapus" value="Hapus"></a>
                </td>';
                echo "</tr>";
            }
            ?>
        </table>
    </div>
  </div>
</body>
</html>
