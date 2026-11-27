<!doctype html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shapes.inc</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <?php include "includes/header.php" ?>

  <?php 
  include "includes/db.php";
  $producten = $pdo->query("SELECT * FROM producten")->fetchAll();
  ?>

<div class="producten">
  <?php foreach ($producten as $product) { ?>
  <div class="content">
    <img src="images/1x/<?php echo $product['afbeelding']; ?>" alt="<?php echo $product['naam'] ?>">
    <div class="name"><?php echo $product['naam']; ?></div>
    <div class="price">&euro; <?php echo number_format($product['prijs'], 2, ',', '.'); ?></div>
    <div class="info_koop"><a href="detail.php?id=<?php echo $product['id']; ?>">Info/Koop</a></div>
  </div>
  <?php } ?>
</div>

      <?php include "includes/footer.php" ?>

  </body>
</html>
