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
  if($_GET["inlognaam"] == "" || $_GET["adres"] == "" || $_GET["email"] == "" || $_GET["wachtwoord"] == ""){
    echo("Iets is niet ingevoered");
  }else{
    print_r("Naam is: ".$_GET["inlognaam"]."<br>Adres is: ".$_GET["adres"]."<br>Email is: ".$_GET["email"]."<br>Wachtwoord is: ".$_GET["wachtwoord"]);
  }
  ?>
</body>
</html>