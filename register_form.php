<?php 
 session_start();
include 'koneksi.php';
$koneksi = new database();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query  =$koneksi->koneksi->prepare("INSERT INTO users VALUES ('$username', '$email', '$password')");
    

    if ($query) {
        $result = $query->execute();
        header("location:login_form.php");
        return $result;
        
    }else {
        die("Oops! Terjadi kesalahan");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Buat Akun</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="masukkan username">
      <input type="email" name="email" required placeholder="masukkan email">
      <input type="password" name="password" required placeholder="masukkan password">
      </select>
      <input type="submit" name="submit" value="buat akun sekarang" class="form-btn">
      <p>apakah anda sudah punya akun? <a href="login_form.php">masuk sekarang</a></p>
   </form>

</div>

</body>
</html>