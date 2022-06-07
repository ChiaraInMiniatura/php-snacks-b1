<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$output= "accesso riuscito";

if (empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
  $output = "accesso negato";
  
}elseif(!strpos($_GET["mail"], "@") || !strpos($_GET["mail"], ".")){

  $output = "accesso negato";

}elseif (strlen($_GET["name"]) < 3) {

  $output = "accesso negato";

}elseif(!is_numeric($_GET["age"])){

  $output = "accesso negato";
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sneack 2</title>
</head>
<body>
  <h1>Sneack 2</h1>
  <h3>
  <?php echo $output ?>
  </h3>
</body>
</html>


