

<?php
include_once "conn.php";

if(isset($_POST['knop']))
{
  $naam = $_POST['naam'];
  $meel = $_POST['vorm'];
  $vorm = $_POST['meel'];
  $gewicht = $_POST['gewicht'];

  $sql = "INSERT INTO brood (naam,meel,vorm,gewicht) VALUES ('$naam','$meel','$vorm','$gewicht')";
  if (mysqli_query($conn, $sql)) {

  }else{
    echo "Error: " . $sql . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
  header('Location: index.php');
}
?>