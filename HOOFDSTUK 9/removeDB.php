<?php
include "conn.php";
$temp = $_POST['idValue'];
$sql = "DELETE FROM brood WHERE id = $temp";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: index.php")
?>