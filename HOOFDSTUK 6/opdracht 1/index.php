<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>cursistnr</th>
      <th>naam</th>
      <th>roepnaam</th>
      <th>straat</th>
      <th>postcode</th>
      <th>plaats</th>
      <th>geslacht</th>
      <th>geb_datum</th>
    </tr>

    <?php

    $dbname = "phpschool";
    $username = "root";
    $password = "";

    $db = new mysqli("localhost", $username, $password, $dbname) or die("unable to connect");

    $sql = "SELECT * FROM cursist;";
    $result = $db -> query($sql);
    
    if($result-> num_rows > 0){
      while($row = $result-> fetch_assoc()){
        echo("<tr><td>" .$row["cursistnr"] ."</td><td>".$row["naam"]."</td><td>".$row["roepnaam"]."</td><td>".$row["straat"]."</td><td>".$row["postcode"]."</td><td>".$row["plaats"]."</td><td>".$row["geslacht"]."</td><td>".$row["geb_datum"]."</td></tr>");
      }
    }

   
    ?>
  </table>
</body>
</html>