<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_sports";
$db = mysqli_connect($servername, $username, $password, $database);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
// session_start();
session_destroy();
unset($_SESSION['email']);
// clearstatcache($_SESSION['email']);
echo"<script>window.location.href='http://localhost/login.html';</script>";
?>