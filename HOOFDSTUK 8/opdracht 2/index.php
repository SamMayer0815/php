<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div id="container">
    <div id="img1" class="img"><img src="img/monkey-business.jpg"></div>
    <div class="text">Select your monkey!</div>
    <div id="img2" class="img"><img src ="img/monkey_swings.png"></div>
  </div>
</body>
</html>

<?php
$apen[] = "Baviaan";
$apen[] = "Guereza";
$apen[] = "Langoer";
$apen[] = "Tamarin";
$apen[] = "Neusaap";
$apen[] = "Halfaap";
$apen[] = "Mandril";
$apen[] = "Oeakari";
$apen[] = "Faunaap";
$apen[] = "Hoelman";
$apen[] = "Meerkat";
$apen[] = "Oormaki";
$apen[] = "Gorilla";
$apen[] = "Kuifaap";
$apen[] = "Mensaap";
$apen[] = "Spinaap";

for($i = 0;$i < count($apen);$i++){
  echo "<a href='https://www.google.nl/search?q=$apen[$i]&tbm=isch' class='monkeyName'>$apen[$i]</a><br>";
}
?>