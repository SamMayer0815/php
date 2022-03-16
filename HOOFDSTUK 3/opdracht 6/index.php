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
  $leeftijd = 50;
  $kosten = 10;
  if($leeftijd > 65 || $leeftijd <= 12){
    $kosten = 5;
  }else if ($leeftijd < 3){
    $kosten = 0;
  }
  echo("De leeftijd is ".$leeftijd.". Dus de kosten is ".$kosten." euro.");
  ?>  
</body>
</html>