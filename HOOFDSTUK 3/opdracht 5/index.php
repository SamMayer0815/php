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
   $borderColor = "red";
   for($i = 1; $i < 10; $i++){ // De for loop for images opdracht
     if($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 9){
       $borderColor = "green";
     }else{
       $borderColor = "red";
     }
     echo '<img src="../img/aap'.$i.'.jpg" style="width:100px;border:solid 2px '.$borderColor.';">';
   }
  ?>  
</body>
</html>