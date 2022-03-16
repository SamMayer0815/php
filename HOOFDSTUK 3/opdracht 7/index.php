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
    $zwemclub["de spartelkuikens"] = 25;
    $zwemclub["de waterbuffels"] = 32;
    $zwemclub["plonsmdering"] = 11;
    $zwemclub["bommetje"] = 23; 
  
      foreach ($zwemclub as $label => $waarde) {
        echo ($label." ".$waarde);
        while($waarde >= 5){
          echo '<img src="../img/zwem.webp" style="width:20px; ">';
          $waarde -= 5;
        }
        echo("<br>");
      }
  ?>  
</body>
</html>