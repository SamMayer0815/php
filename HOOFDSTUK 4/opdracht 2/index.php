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
  $getal = 6;
  $deelbaar = false;

  getalDeelDrie($getal, $deelbaar);

  function getalDeelDrie($getal, $deelbaar){
    if($getal % 3 == 0){
      $deelbaar = true;
      } else {
      $deelbaar = false;
    }
    if($deelbaar == true){
      echo($getal." is deelbaar door 3");
    }else{
      echo($getal." is niet deelbaar door 3");
    }
  }
  ?>
  
</body>
</html>