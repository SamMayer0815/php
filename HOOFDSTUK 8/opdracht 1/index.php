<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

<?php
  class Radioprogramma{
    public $programmanaam = "Radio 538";
    public $omschrijving = "Dit is een radioprogramma okey? okey.";
    public $liedjes = [
      "lied1",
      "lied2",
      "lied3"
    ];

    public function getLiedjes(){
      for($i = 0;$i < 3;$i++){
        echo $this->liedjes[$i];
        echo ("<br>");
      }
    }

    public function getProgramma(){
      echo $this->programmanaam;
      echo("<br>");
      echo $this->omschrijving;
    }
  }

  $test = new Radioprogramma();
  
  $test -> getProgramma();
  echo("<br>");
  $test -> getLiedjes();
?>