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
   $images = array("../img/img_0050.jpg",
   "../img/lillypilly1.jpg",
   "../img/Maranchery_Biyyam_Kayal_kandal.jpg",
   "../img/weeping-elm.jpg",
   "../img/weeping-elm0091.jpg");
   
  for($i = 0;$i < 5;$i++){
    echo "<img src='$images[$i]' width=100px>";
  }
  ?>  
</body>
</html>