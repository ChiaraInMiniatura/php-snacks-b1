<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$partite=[
  [
    "sq_casa"=>"catania",
    "sq_ospite"=>"palermo",
    "punti_casa"=>"20",
    "punti_ospite"=>"50",
  ],
  [
    "sq_casa"=>"milano",
    "sq_ospite"=>"napoli",
    "punti_casa"=>"50",
    "punti_ospite"=>"55",
  ],
  [
    "sq_casa"=>"roma",
    "sq_ospite"=>"torino",
    "punti_casa"=>"25",
    "punti_ospite"=>"15",
  ],
  [
    "sq_casa"=>"bologna",
    "sq_ospite"=>"genova",
    "punti_casa"=>"20",
    "punti_ospite"=>"50",
  ],
  [
    "sq_casa"=>"carrapipi",
    "sq_ospite"=>"enna",
    "punti_casa"=>"30",
    "punti_ospite"=>"40",
  ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
  <h1>Snack 1</h1>

<?php 

  for ($i=0; $i < 5; $i++) { 

    echo $partite[$i][ "sq_casa" ] . " - " . $partite[$i][ "sq_ospite" ] . " | " . $partite[$i][ "punti_casa" ] . " - " .
    $partite[$i][ "punti_ospite" ] . "<br>";
  
  }

?>
  
</body>
</html>