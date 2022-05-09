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
    include("menu.php");

    // définition d'une class en PHP



    // phpinfo();


    ?>
    <br><br>
    <h1 class="fst-italic text-center">Une liste de fruits</h1>
    <br><br>
    <h2 class="fst-italic text-center">Définie en POO</h2>
    <br><br>






    <div class="fst-italic text-center border border-warning">
        <div class="">
            <?php

            $pommeA = new Fruits(Fruits::POMME, Fruits::POIDSPOMMEA,  "pomme.jpg");
            $pommeB = new Fruits(Fruits::POMME, Fruits::POIDSPOMMEB, "pomme.jpg");
            $pommeC = new Fruits(Fruits::POMME, Fruits::POIDSPOMMEC, "pomme.jpg");
            $fraiseA = new Fruits(Fruits::FRAISE, Fruits::POIDSFRAISEA,  "fraise.jpg");
            $fraiseB = new Fruits(Fruits::FRAISE, Fruits::POIDSFRAISEB, "fraise.jpg");
            $fraiseC = new Fruits(Fruits::FRAISE, Fruits::POIDSFRAISEC, "fraise.jpg");
            echo "<br/>";
            echo ($pommeA);
            echo "<br>";
            echo ($fraiseA);
            echo "<br>";
            echo ($pommeB);
            echo "<br>";
            echo ($fraiseB);
            echo "<br>";
            echo ($pommeC);
            echo "<br>";
            echo ($fraiseC);
            // grace a la function __toString nous pouvons directement faire l affichage de notre objet


            ?>
        </div>
        <br>

    </div>




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