
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
$testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis corporis perferendis incidunt praesentium consectetur, vitae, enim, beatae deleniti cum ipsum dignissimos dolore assumenda iure aspernatur accusantium odit asperiores alias. Consequatur magni nam nobis consequuntur, eum veritatis autem corrupti tenetur ipsam quibusdam, facere minima error officia numquam quis perspiciatis laborum, expedita quidem quia? Dolor voluptate voluptatibus aliquid eveniet error perspiciatis expedita corporis, exercitationem necessitatibus repellat omnis accusamus facilis nobis iusto quod ratione optio culpa praesentium veniam sit? Animi, voluptate. Quas accusamus laudantium consequuntur ut, ab suscipit, provident ipsa harum sapiente repudiandae quasi animi nisi architecto nemo impedit. Neque reprehenderit provident sequi veritatis repellat, beatae, eius sunt facilis suscipit exercitationem nam. Consectetur dolore nobis explicabo veniam quibusdam praesentium dignissimos tempora voluptates repudiandae incidunt. Consectetur voluptatem, perferendis dolores illo modi quaerat officia corrupti aut ipsam numquam incidunt harum voluptate fugit quae itaque atque? Nobis aliquam perspiciatis commodi pariatur amet dicta voluptatum qui repellendus iusto. Impedit saepe expedita ipsam illum commodi. Porro error atque similique praesentium modi mollitia quam consectetur in veniam corrupti itaque amet perferendis, repellat nisi expedita saepe nihil ea dolorum provident laudantium accusantium placeat nulla, ex magni. Velit nulla numquam asperiores quis quo magnam non! Nihil cupiditate iusto esse hic? Hic.";

$testo_diviso = explode(".",$testo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>
<h1>Snack 5</h1>

<h3>Testo</h3>

<?php 
echo $testo
?>

<h3>Testo diviso</h3>

<?php for ($i=0; $i < count($testo_diviso) ; $i++) { 

  echo "<p> $testo_diviso[$i] </p>" ;

} ?>

</body>
</html>