<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form name="form" action="add.php" method="POST">
    <label for="">naam</label> 
    <input type="text" name="naam" required></input>

    <label for="">meel</label> 
    <input type="text" name="meel" required></input>

    <label for="">vorm</label> 
    <input type="text" name="vorm" required></input>

    <label for="">gewicht in gram</label> 
    <input type="number" name="gewicht" required></input>
    <input type="submit" name="knop" value="klik om brood toe te voegen"></submit>
  </form>
  <br><br>
  <table>
    <tr>
      <th>ID</th>
      <th>Naam van brood</th>
      <th>Meel</th>
      <th>Vorm</th>
      <th>Gewicht in gram</th>
    </tr>
    <?php
    include "conn.php";
    $sql = "SELECT * FROM brood;";
    $result = $conn -> query($sql);
    if($result-> num_rows > 0){
      while($row = $result-> fetch_assoc()){
        $temp = $row["id"];
        echo("<tr><td>" .$row["id"] ."</td><td>".$row["naam"]."</td><td>".$row["meel"]."</td><td>".$row["vorm"]."</td><td>".$row["gewicht"]."</td><td><form action='edit.php' method='POST''><input type='submit' name='edit' value='Edit'></submit><input type='number' name='idValue' value='$temp' style='visibility:hidden;'></input></form></td><td><form action='remove.php' method='POST''><input type='submit' name='edit' value='Delete'></submit><input type='number' name='idValue' value='$temp' style='visibility:hidden;'></input></form></td></tr>");
      }
    }
    ?>
  </table>
  
</body>
</html>

<?php


?>