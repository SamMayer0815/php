<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
</head>
<body>
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
    $temp = $_POST['idValue'];
    $sql = "SELECT * FROM brood HAVING id = $temp;";
    $result = $conn -> query($sql);
    if($result-> num_rows > 0){
      while($row = $result-> fetch_assoc()){
        echo("<tr><td>" .$row["id"] ."</td><td>".$row["naam"]."</td><td>".$row["meel"]."</td><td>".$row["vorm"]."</td><td>".$row["gewicht"]."</td></tr>");
      }
    }
    ?>
  </table>
  <br><br>
  <?php
  include_once "conn.php";
  $temp = $_POST['idValue'];
  $sql = "SELECT * FROM brood HAVING id = $temp;";
  $result = $conn -> query($sql);
  $row = $result-> fetch_assoc();
  $naam = $row["naam"];
  $meel = $row["meel"];
  $vorm = $row["vorm"];
  $gewicht = $row["gewicht"];
    echo('<form name="form" action="editDB.php" method="POST">');
    echo('<label for="">naam</label> ');
    echo('<input type="text" name="naam" value="'.$naam.'"></input>');
    echo('<br>');
    echo('<label for="">meel</label> ');
    echo('<input type="text" name="meel" value="'.$meel.'"></input>');
    echo('<br>');
    echo('<label for="">vorm</label> ');
    echo('<input type="text" name="vorm" value="'.$vorm.'"></input>');
    echo('<br>');
    echo('<label for="">gewicht in gram</label> ');
    echo('<input type="number" name="gewicht" value="'.$gewicht.'"></input>');
    echo('<br>');    
    echo("<input type='number' name='idValue' value='$temp' style='visibility:hidden;'>");
    echo('<input type="submit" name="veranderKnop" value="klik om brood te veranderen"></submit>');
    echo('</form>');
  ?>
</body>
</html>