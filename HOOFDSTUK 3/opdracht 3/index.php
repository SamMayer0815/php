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
  $t = 600;
  for($i = 0;$i < $t;$i++){
    for($k = 0;$k < ($t - $i - 1);$k++){
      echo('<a style=visibility:hidden;>*</a>');
    }
    for($j = 0;$j < $i;$j++){
      echo("*");
    
  }for($k = 0;$k < ($i-1);$k++){
    echo("*");
  }
    echo("<br>");
  }
  ?>  
</body>
</html>