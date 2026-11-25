<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="container">

    <div id="head">
      <?php include "includes/header.php"?>
      <div id="return"><a href="index.php">back</a></div>
    </div>

    <div id="product_detail">
      <div id="content_detail"><img src="images/1x/circle.png" alt="Circle"></div>
      <div id="info">
        <p>Circle</p>
        <h2>De Circle is een classieke vorm, die voor alles is gebruikt. Will jij een wiel maken? circle. Een tandwiel?
          circle. Iets anders dat is niet een wiel? CIRCLE! Koop nu de circle vandaag en gebruik het voor wat je wilt!
        </h2>
        <div id="price">&euro; 20,99</div>
        <div id="buy">
          <a href="bestellen.php">Bestellen</a>
        </div>
      </div>
    </div>

    <h2>Bestellen</h2>

    <form class="formulier">
        <div class="veld">
            <label for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam" placeholder="Bijvoorbeeld: Jose" required>
        </div>

        <div class="veld">
            <label for="achternaam">Achternaam</label>
            <input type="text" name="achternaam" id="achternaam" required>
        </div>

        <div class="veld">
            <label for="email">E-mailadres</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="veld">
            <label for="aantal">Aantal</label>
            <input type="number" name="aantal" id="aantal" min="1" max="10" value="1" required>
        </div>

        <div class="veld">
            <input type="checkbox" name="voorwaarden" id="voorwaarden" required>
            <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
        </div>

        <input type="submit" value="Bestelling plaatsen" class="knop">
    </form>



    <?php include "includes/footer.php"?>

  </div>

</body>

</html>