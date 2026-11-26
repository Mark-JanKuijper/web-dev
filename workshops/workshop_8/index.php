<?php 
include "include/db.php";

$producten = $pdo->query("SELECT * FROM producten")->fetchAll();
?>

<?php include "include/header.php" ?>

<?php
echo "<pre>";
print_r($producten[0]);
echo "</pre>"
?>




       <div class="container">

       <h2>Onze sneakers</h2>
<div class="producten">
    <?php foreach ($producten as $product) { ?>
<div class="product">
    <img src="images/<?php echo $product['afbeelding']; ?>" alt="<?php echo $product['naam']; ?>">
    <h3><?php echo $product['naam']; ?></h3>
    <p class="prijs">&euro; <?php echo number_format($product['prijs'], 2, ',', '.'); ?></p>
    <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
</div>
    <?php } ?>
</div>
             

              <div class="product">
        <img src="images/1x/circle.png" alt="Nike Air Max 90">
        <h3>Nike Air Max 90</h3>
        <p class="prijs">&euro; 149,99</p>
    </div>

      <div class="product">
        <img src="images/1x/hexagon.png" alt="Nike Air Max 90">
        <h3>Hexa</h3>
        <p class="prijs">&euro; 149,99</p>
    </div>

      <div class="product">
        <img src="images/1x/pentagon.png" alt="Nike Air Max 90">
        <h3>penta</h3>
        <p class="prijs">&euro; 149,99</p>
    </div>

     <div class="product">
        <img src="images/1x/circle.png" alt="Nike Air Max 90">
        <h3>circle  90</h3>
        <p class="prijs">&euro; 9,99</p>
    </div>

      <div class="product">
        <img src="images/1x/hexagon.png" alt="Nike Air Max 90">
        <h3>hexa 2</h3>
        <p class="prijs">&euro; 14,99</p>
    </div>

      <div class="product">
        <img src="images/1x/pentagon.png" alt="Nike Air Max 90">
        <h3>penta 2</h3>
        <p class="prijs">&euro; 149</p>
        <a href="voorbeeld.php" class="knop">bekijk</a>
    </div>

           
        
        </div>
    <div id="content">hier komen de sneakers.</div> <!-- einde content -->

<?php include "include/footer.php" ?>