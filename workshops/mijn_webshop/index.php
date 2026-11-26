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

 <?php
 echo "<pre>";
 print_r($producten[0]);
 echo "</pre>";
 ?>


<div class="producten">
  <?php foreach ($producten as $product) { ?>
  <div class="product">
    <img src="images/airmax90.jpg" alt="Nike Air Max 90">
    <h3>Nike Air Max 90</h3>
    <p class="prijs">&euro; 149,99</p>
    <a href="detail.php" class="knop">Bekijk</a>
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
