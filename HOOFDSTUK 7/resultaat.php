<?php
session_start(); 

$dbname = "phpschool";
$username = "root";
$password = "";
$db = new mysqli("localhost", $username, $password, $dbname) or die("unable to connect");

if (isset($_POST['email']) && isset($_POST['wachtwoord'])) {
  $uname=$_POST["email"];
  $pass=$_POST["wachtwoord"];
 
  $sql = "SELECT * FROM login WHERE email ='$uname' AND pass ='$pass' limit 1";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  if (mysqli_num_rows($result) > 0) {
    if ($row['email'] == $uname && $row['pass'] == $pass && $row['admin'] == "n") {
      $_SESSION['email'] = $row['email'];
      $_SESSION['admin'] = $row['admin'];
      header("Location: user.php");
      exit();
    }else if ($row['email'] == $uname && $row['pass'] == $pass && $row['admin'] == "y") {
      $_SESSION['email'] = $row['email'];
      $_SESSION['admin'] = $row['admin'];
      header("Location: admin.php");
      exit();
    }
  }
}
$failed = "failed";
setcookie($failed, true, time()+5, "index.php");
header("Location: index.php");
exit();
?>