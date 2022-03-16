<?php
include_once('conn.php');

if(isset($_POST['veranderKnop']))
{
  $naam = $_POST['naam'];
  $meel = $_POST['vorm'];
  $vorm = $_POST['meel'];
  $gewicht = $_POST['gewicht'];
  $id = $_POST['idValue'];

  $sql = "UPDATE brood SET naam='$naam',meel='$meel',vorm='$vorm',gewicht='$gewicht' WHERE id = $id";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
  header('Location: index.php');
}
?>