<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>
<form action='resultaat.php' method='POST'>
  <input type='text' name='email' placeholder='email'>
  <input type='password' name='wachtwoord' placeholder='wachtwoord'>
  <input type='submit' name='knop' value='verstuur!'>
</form>
</body>
</html>

<?php

if(count($_COOKIE) > 1){
  echo("Je wachtwoord of email is verkeerd.");
}

unset($_COOKIE['failed']);
?>