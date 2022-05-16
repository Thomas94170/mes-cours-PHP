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
    <h1 class="fst-italic text-center">Gestion Panier</h1>
    <br><br>
    <h2 class="fst-italic text-center">En se connectant à la base de données</h2>
    <br><br>
    <p class="fst-italic text-center">Ajouter un panier</p>
    <br><br>
    <p class="fst-italic text-center">Reprise de l'exercice 10, cette fois ci en se connectant à une base de données, qui permet de créer et d'afficher un nouveau panier lorsqu'il est crée.
    </p>
    <br><br>







    <div class="fst-italic text-center border border-warning">
        <div class="">
            <?php

            // création du formulaire pour renseigner le nombre de fruits à mettre dans mon nouveau panier
            echo '<form action="#" method ="POST" >';
            echo '<label for="nb_pommes"> Nbres de pommes : </label>';
            echo '<input type="number" name="nb_pommes" id="nb_pommes" required/>';
            echo '<label for="nb_fraises"> Nbres de fraises : </label>';
            echo '<input type="number" name="nb_fraises" id="nb_fraises" required/>';
            echo '<input type="submit" value="Valider le panier"/>';
            echo '<br>---<br>';
            // prendre en compte les valeurs des id nb_pommes et nb_fraises afin de remplir un nouveau panier et ainsi l'afficher


            $pommeA = new Fruits(Fruits::POMME, 150);
            $pommeB = new Fruits(Fruits::POMME, 120);
            $pommeC = new Fruits(Fruits::POMME, 130);
            $fraiseA = new Fruits(Fruits::FRAISE, 100);
            $fraiseB = new Fruits(Fruits::FRAISE, 120);
            $fraiseC = new Fruits(Fruits::FRAISE, 110);


            $panier1 = new Panier();
            $panier1->addFruit($pommeA);
            $panier1->addFruit($pommeB);
            $panier1->addFruit($fraiseA);

            $panier2 = new Panier();
            $panier2->addFruit($pommeB);
            $panier2->addFruit($fraiseC);

            $paniers = [$panier1, $panier2];

            // c'est ici que nous allons déclarer la création de notre nouvezau panier
            // new panier est stocké dans une variable
            // 2 variables nbpommes et nbfraises qui correspondent au chap que nous allons renseigner
            // (int) car c est un string que nous renseignons dans le formulaire et nous voulons que ce soit un number
            if (isset($_POST['nb_pommes'])) {
                $nouveauPanier = new Panier();
                $nbPommes = (int)$_POST['nb_pommes'];
                $nbFraises = (int) $_POST['nb_fraises'];
                // nouveau panier utilise la méthode addfruit
                // for est pour alimenter notre panier
                // la metghode rand sert à donner un poids aleatoire, ici le poids
                for ($i = 0; $i < $nbPommes; $i++) {
                    $nouveauPanier->addFruit(new Fruits(Fruits::POMME, rand(100, 180)));
                }
                for ($i = 0; $i < $nbFraises; $i++) {
                    $nouveauPanier->addFruit(new Fruits(Fruits::FRAISE, rand(80, 140)));
                }
                $paniers[] = $nouveauPanier;
            }

            // foreach ($paniers as $panier) {
            //     echo $panier;
            // }
            // ce foreach sert à montrer que notre panier 3 est bien créer mais jamais stocké

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