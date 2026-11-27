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

      <div id="producten">
        <div class="content">
          <img src="images/1x/circle.png" alt="Circle" />
          <div class="name">Circle</div>
          <div class="price">&euro; 20,99</div>
          <div class="info_koop"><a href="detail.php">info/koop</a></div>
        </div>

        <div class="content">
          <img src="images/1x/square.png" alt="Square" />
          <div class="name">Square</div>
          <div class="price">&euro; 20,99</div>
          <div class="info_koop"><a href="detail.php">info/koop</a></div>
        </div>

        <div class="content">
          <img src="images/1x/triangle.png" alt="Circle" />
          <div class="name">Triangle</div>
          <div class="price">&euro; 20,99</div>
          <div class="info_koop"><a href="detail.php">info/koop</a></div>
        </div>

        <div class="content">
          <img src="images/1x/rectangle.png" alt="Circle" />
          <div class="name">Rectangle</div>
          <div class="price">&euro; 20,99</div>
          <div class="info_koop"><a href="detail.php">info/koop</a></div>
        </div>

        <div class="content">
          <img src="images/1x/hexagon.png" alt="Circle" />
          <div class="name">Hexagon</div>
          <div class="price">&euro; 20,99</div>
          <div class="info_koop"><a href="detail.php">info/koop</a></div>
        </div>

        <div class="content">
          <img src="images/1x/pentagon.png" alt="Circle" />
          <div class="name">Pentagon</div>
          <div class="price">&euro; 20,99</div>
          <div class="info_koop"><a href="detail.php">info/koop</a></div>
        </div>
      </div>

      <?php include "includes/footer.php" ?>

  </body>
</html>
