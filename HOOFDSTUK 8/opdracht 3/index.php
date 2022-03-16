<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title></head>
<body>
<div class="range-slider">
<form name="form" >
    <input value="0" min="0" max="10000"  type="range" id="num1">
  </form>
  <form name="form" action=index.php>
    <input value="10000" min="0" max="10000" type="range" id="num2">
  </form><br>
  <form action="index.php" name="form" method="get">
  <span>from 
  <input type="number" value="0" min="0" max="10000" name="minPrijs"> 
  to 
  <input type="number" value="10000" min="0" max="10000" name="maxPrijs"></span> <br>

Merk : 
  <select name="merk">
    <option value="" >All</option>
    <option value="nisan">Nisan</option>
    <option value="Mercedes">Mercedes</option>
    <option value="BMW">BMW</option>
    <option value="Opel">Opel</option>
    <option value="Audi">Audi</option>
  </select>
<br>
Type : 
<select name="type">
    <option value="" >All</option>
    <option value="type QR">Type QR</option>
    <option value="B-klasse">B-Klasse</option>
    <option value="3-SERIES">3-Series</option>
    <option value="mokka 1.4T">Mokka 1.4T</option>
    <option value="A1">A1</option>
  </select>
<br>
  <input type='submit' name='knop' value='Klik om te zoeken!'>
</form>
</div>
</body>
</html>

<?php
if(isset($_GET["minPrijs"])){
  $minPrijs = $_GET["minPrijs"];
}else{
  $minPrijs = 0;
}
if(isset($_GET["maxPrijs"])){
  $maxPrijs = $_GET["maxPrijs"];
}else{
  $maxPrijs = 0;
}
if(isset($_GET["merk"])){
  $merk = $_GET["merk"];
}else{
  $merk = "";
}
if(isset($_GET["type"])){
  $type = $_GET["type"];
}else{
  $type = "";
}
class auto {

  public $merk;
  public $type;
  public $prijs;
  public $foto;
  public $url = "autoImg/";

  public function __construct($merk, $type, $prijs, $foto)
  {
      $this->merk = $merk;
      $this->type = $type;
      $this->prijs = $prijs;
      $this->foto = $foto;
  }

  public function print_auto(){
    echo "<div style='float: left; padding: 3vh 4vw 3vh 4vw; border:1px solid; width:15vw; height: 30vh;'>";
    echo "<font size='5px'>{$this->merk} : {$this->type}</font><br>";
    echo "<img src='{$this->url}{$this->foto}' style=width:15vw;><br>";
    echo "$$this->prijs";
    echo "</div>";
  }
}


$car = [
  new auto("nisan","type QR",1200,"auto1.jfif"),
  new auto("Mercedes","B-klasse",1200,"auto2.jfif"),
  new auto("BMW","3-SERIES",1200,"auto3.jfif"),
  new auto("Opel","mokka 1.4T",1200,"auto4.jfif"),
  new auto("Audi","A1",1200,"auto5.jfif"),
  new auto("Mercedes","type QR",2550,"auto1.jfif"),
  new auto("Mercedes","B-klasse",4680,"auto4.jfif"),
  new auto("nisan","3-SERIES",1600,"auto2.jfif"),
  new auto("BMW","mokka 1.4T",7000,"auto3.jfif"),
  new auto("Mercedes","A1",4570,"auto1.jfif"),
  new auto("Opel","3-SERIES",4670,"auto2.jfif"),
  new auto("nisan","mokka 1.4T",2340,"auto4.jfif"),
  new auto("BMW","A1",690,"auto5.jfif"),
  new auto("Mercedes","type QR",5670,"auto3.jfif"),
  new auto("Opel","B-klasse",2340,"auto4.jfif"),
  new auto("Mercedes","A1",9780,"auto2.jfif"),
  new auto("Mercedes","mokka 1.4T",4560,"auto1.jfif"),
  new auto("nisan","B-klasse",3400,"auto3.jfif"),
  new auto("BMW","type QR",4560,"auto1.jfif"),
  new auto("Mercedes","A1",8480,"auto5.jfif"),
  new auto("Opel","3-SERIES",5350,"auto1.jfif"),
  new auto("Mercedes","B-klasse",2460,"auto5.jfif"),
  new auto("nisan","type QR",7340,"auto3.jfif"),
  new auto("BMW","mokka 1.4T",4790,"auto4.jfif"),
  new auto("Opel","3-SERIES",7490,"auto5.jfif"),
  new auto("nisan","mokka 1.4T",2340,"auto4.jfif"),
  new auto("Mercedes","mokka 1.4T",4560,"auto1.jfif"),
  new auto("Mercedes","A1",7740,"auto2.jfif"),
  new auto("nisan","mokka 1.4T",6730,"auto5.jfif"),
  new auto("BMW","B-klasse",7340,"auto3.jfif"),
  new auto("Opel","3-SERIES",4550,"auto2.jfif"),
  new auto("Mercedes","type QR",4560,"auto4.jfif")
];

foreach($car as $auto){
  if($auto->prijs > $minPrijs && $auto->prijs < $maxPrijs){
    if($type == "" && $merk == ""){
      $auto->merk = $auto->merk;
      $auto->type = $auto->type;
      $auto->prijs = $auto->prijs;
      $auto->foto = $auto->foto;
      $auto->print_auto();
    }else if($merk == "" && $auto->type == $type){
      $auto->merk = $auto->merk;
      $auto->type = $auto->type;
      $auto->prijs = $auto->prijs;
      $auto->foto = $auto->foto;
      $auto->print_auto();
    }else if($type == "" && $auto->merk == $merk){
      $auto->merk = $auto->merk;
      $auto->type = $auto->type;
      $auto->prijs = $auto->prijs;
      $auto->foto = $auto->foto;
      $auto->print_auto();
    }else if($auto->merk == $merk && $auto->type == $type){
      $auto->merk = $auto->merk;
      $auto->type = $auto->type;
      $auto->prijs = $auto->prijs;
      $auto->foto = $auto->foto;
      $auto->print_auto();
    }
  }
}
?>


<script>
(function() {
    const parent = document.querySelector('.range-slider');

    if (!parent) {
        return;
    }

    const rangeS = parent.querySelectorAll('input[type="range"]'),
          numberS = parent.querySelectorAll('input[type="number"]');

    rangeS.forEach((el) => {
        el.oninput = () => {
            let slide1 = parseFloat(rangeS[0].value),
                slide2 = parseFloat(rangeS[1].value);

            if (slide1 > slide2) {
                [slide1, slide2] = [slide2, slide1];
            }

            numberS[0].value = slide1;
            numberS[1].value = slide2;
        }
    });

    numberS.forEach((el) => {
        el.oninput = () => {
            let number1 = parseFloat(numberS[0].value),
                number2 = parseFloat(numberS[1].value);

            if (number1 > number2) {
                let tmp = number1;
                numberS[0].value = number2;
                numberS[1].value = tmp;
            }

            rangeS[0].value = number1;
            rangeS[1].value = number2;
        }
    });
})();
  </script>