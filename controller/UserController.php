<?php 
require_once "../input/UserModel.php";
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $user = new Register($username, $password, $email);
  if ($user->register()) {
    echo "<script>alert('Berhasil registrasi, silakan login');window.location='../display/user/login.php';</script>";
  }
}
?>
