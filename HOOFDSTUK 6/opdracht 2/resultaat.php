<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  
    $dbname = "phpschool";
    $username = "root";
    $password = "";

    $db = new mysqli("localhost", $username, $password, $dbname) or die("unable to connect");

    $sql = "SELECT * FROM login;";
    $result = $db -> query($sql);

    $fact = false;


    if($result-> num_rows > 0){
      while($row = $result-> fetch_assoc()){
        if($row["email"] == $_GET["email"] && $row["pass"] == $_GET["wachtwoord"]){
        $fact = true;
    }
      }
    }
    

    if($fact == true){
      echo("Je bent ingelogged");
    }else if($fact == false){
      echo("Sorry helaas geen toegang!");
    }

  ?>
</body>
</html>