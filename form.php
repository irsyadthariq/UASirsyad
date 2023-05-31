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
        <h2>PENDAFTARAN ANGGOTA</h2>
            <form method="POST" action="proses_form.php">
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik" required><br><br>
                
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br><br>
                
                <label for="tempat">Tempat Lahir:</label>
                <input type="text" id="tempat" name="tempat" required><br><br>
                
                <label for="tgllahir">Tanggal Lahir:</label>
                <input type="text" id="tgl" name="tgllahir" placeholder="yyyy/mm/dd" required><br><br>
                
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required></textarea><br><br>
                
                <label for="noHP">No. HP:</label>
                <input type="tel" id="noHP" name="noHP" placeholder="0000-0000-0000" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="nama@gmail.com" required><br><br>
                
                <center><input type="submit" value="Daftar" name="daftar"></center>
            </form>
    </div>
  </div>
</body>
</html>

