<?php
require_once("classes/fruits.class.php");
require_once("classes/panier.class.php");
include("menu.php");
?>

<h2> Fruits : </h2>

<?php
$pommeA = new Fruits(Fruits::POMME, 150);
$pommeB = new Fruits(Fruits::POMME, 130);
$pommeC = new Fruits(Fruits::POMME, 160);
$fraiseA = new Fruits(Fruits::FRAISE, 10);
$fraiseB = new Fruits(Fruits::FRAISE, 15);
$fraiseC = new Fruits(Fruits::FRAISE, 20);


$panier1 = new Panier();
$panier1->addFruit($pommeA);
$panier1->addFruit($pommeB);
$panier1->addFruit($fraiseA);

$panier2 = new Panier();
$panier2->addFruit($pommeB);

$paniers = [$panier1, $panier2];
echo '<form action="#" method ="POST" >';
echo '<label for="panier"> Panier : </label>';
echo '<select name="panier" id="panier" onChange="submit()">';
echo "<option value=''></option>";
foreach ($paniers as $panier) {
    echo "<option value='" . $panier->getIdentifiant() . "'>Panier " . $panier->getIdentifiant() . "</option>";
}
echo "</select>";
echo "</form>";

if (isset($_POST['panier'])) {
    $panierAAfficher = getPanierById((int)$_POST['panier']);
    echo "<h2>Affichage du panier " . $_POST['panier'] . "</h2>";
    echo $panierAAfficher;
}

function getPanierById($id)
{
    global $paniers;
    foreach ($paniers as $panier) {
        if ($panier->getIdentifiant() === $id) {
            return $panier;
        }
    }
}

?>

<?php
include("footer.php");
?>