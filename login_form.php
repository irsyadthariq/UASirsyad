<?php 
 session_start();
require_once("koneksi.php");
$db = new database();
$conn = $db->koneksi;

if(isset($_POST['submit'])){
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

$query_sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0){
    header("location:dashboard.php");
}else{
    
    header("location:register_form.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Masuk</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="username" name="username" required placeholder="masukkan username">
      <input type="password" name="password" required placeholder="masukkan password">
      <input type="submit" name="submit" value="Masuk Sekarang" class="form-btn">
      <p>anda belum punya akun? <a href="register_form.php">buat akun</a></p>
   </form>

</div>

</body>
</html>