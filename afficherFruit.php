<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html avec PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<?php
require_once("classes/fruits.class.php");
require_once("classes/panier.class.php");
// recuperation de monPDO qui est en lien avec notre base de données
require_once("classes/monPDO.class.php");
require_once("classes/fruit.manager.php");

include("menu.php");
?>


<br><br>
<h1 class="fst-italic text-center">Afficher les Fruits</h1>
<br><br>
<h2 class="fst-italic text-center">Avec la class monPDO</h2>
<br><br>
<p class="fst-italic text-center">Afficher le résultat de la requête</p>
<br><br>
<p class="fst-italic text-center">
</p>
<br><br>

<?php
echo '<div class="fst-italic text-center border border-warning">';

fruitManager::setFruitsFromDB();


foreach (Fruits::$tabFruits as $tabFruit) {
    echo $tabFruit;
}










echo "<br>";
echo "<br>";
echo '</div>';
?>

<?php
include("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>