<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    require_once("classes/fruits.class.php");
    require_once("classes/panier.class.php");
    include("menu.php");





    // phpinfo();


    ?>
    <br><br>
    <h1 class="fst-italic text-center">Une liste de fruits</h1>
    <br><br>
    <h2 class="fst-italic text-center">Définie en POO</h2>
    <br><br>
    <p class="fst-italic text-center">Ajouter un menu déroulant et afficher le panier sélectionné</p>
    <br><br>







    <div class="fst-italic text-center border border-warning">
        <div class="">
            <?php

            $pommeA = new Fruits(Fruits::POMME, Fruits::POIDSPOMMEA);
            $pommeB = new Fruits(Fruits::POMME, Fruits::POIDSPOMMEB);
            $pommeC = new Fruits(Fruits::POMME, Fruits::POIDSPOMMEC);
            $fraiseA = new Fruits(Fruits::FRAISE, Fruits::POIDSFRAISEA);
            $fraiseB = new Fruits(Fruits::FRAISE, Fruits::POIDSFRAISEB);
            $fraiseC = new Fruits(Fruits::FRAISE, Fruits::POIDSFRAISEC);


            $panier1 = new Panier();
            $panier1->addFruit($pommeA);
            $panier1->addFruit($pommeB);
            $panier1->addFruit($fraiseA);

            $panier2 = new Panier();
            $panier2->addFruit($pommeB);
            $panier2->addFruit($fraiseC);

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

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- on peut également pour structurer notre code
mettre le code des class PersoMortalKombat dans un autre fichier 
qu on mettra dans une balise php
on l appelera ensuite dans ce fichier non pas avec include mais avec un require_once("chemin du fichier");
de cette manière, on pourra appeler notre class persoMortalKombat dans plusieurs fichiers différents -->