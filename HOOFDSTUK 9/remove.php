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
  $temp = $_POST['idValue'];
  echo('<p>Ben je zeker dat je de rij hier boven wilt verwijderen?</p>');
  echo('<form action="removeDB.php" method="POST">');
  echo('<input type="submit" value="YES"></input>');
  echo("<input type='number' name='idValue' value='$temp'  style='visibility:hidden;'></input>");
  echo('</form>');
  echo('<form action="index.php">');
  echo('<input type="submit" value="NO"></input>');
  echo('</form>');
  ?>
</body>
</html>