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
  $celcius = 5;
  $fahrenheit = 0;

  temp($celcius, $fahrenheit);

  function temp($celcius, $fahrenheit){ // function celsius to fahrenheit
    $fahrenheit = ($celcius * 9 / 5) + 32; 
    echo($celcius." celcius is ".$fahrenheit." fahrenheit");
  };
  ?>  
</body>
</html>