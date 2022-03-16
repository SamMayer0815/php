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
  $accounts = [
    "pet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truusdriks@wegweg.nl" => "arkiearkie201"
  ];
  $fact = false;
  foreach($accounts as $email => $wachtwoord){
    if($email == $_GET["email"] && $wachtwoord == $_GET["wachtwoord"]){
      $fact = true;
    }else{
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