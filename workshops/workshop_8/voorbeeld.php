<?php include "include/header.php" ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>workshop 3</h1>
    <p>good day</p>

    <a href="index.php">&larr; Terug naar alle sneakers</a>

<div class="detail">
    <img src="images/1x/circle.png" alt="circle">
    <div class="info">
        <h2>Nike Air Max 90</h2>
        <p class="prijs">&euro; 149,99</p>
        <p>De Nike Air Max 90 is een klassieker uit 1990, met zichtbare Air-demping in de hak. Comfortabel voor de hele dag.</p>
        <a href="bestellen.php" class="knop">Bestellen</a>
    </div>
</div>
    

  <!-- div zijn lege doosjes van informatie, ze worden zichtbaar als ze informatie krijgen -->
   <!-- je kan er het atribuut id geven voor een unieke naam en word gebruikt later voor CSS -->
   <!-- belangerijke mededeling is dat id mag alleen 1 keer voorkomen op een pagina -->
   <div id="header">...</div>    

   <?php include "include/footer.php" ?>
</body>
</html>