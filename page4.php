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
    require_once("classes/personnageDBZ.class.php");
    include("menu.php");

    // définition d'une class en PHP






    ?>
    <br><br>
    <h1 class="fst-italic text-center">Dragon Ball Z</h1>
    <br><br>
    <h2 class="fst-italic text-center">Les personnages définis avec les class</h2>
    <br><br>






    <div class="fst-italic text-center border border-warning">
        <div class="d-flex justify-content-between">
            <?php

            $sangoku = new PersoDBZ("San-Goku", 33, "Kamé Ha Méha", "sangoku.jpg");
            $sangoku->afficherSangoku();
            echo "<br/>";
            $sangohan = new PersoDBZ("San-Gohan", 12, "Kamé Ha Méha", "sangohan.png");
            $sangohan->afficherSangohan();
            echo "<br/>";
            $vegeta = new PersoDBZ("Vegeta", 32, "Kamé Ha Méha", "vegeta.jpg");
            $vegeta->afficherVegeta();
            echo "<br/>";


            ?>
        </div>
        <br>
        <div class="d-flex justify-content-between">
            <?php
            $piccolo = new PersoDBZ("Piccolo", 527, "Makanko sappo", "piccolo.jpg");
            $piccolo->afficherPiccolo();
            echo "<br/>";
            $boo = new PersoDBZ("Boo", 5000000, "Buku Jutsu", "boo.jpg");
            $boo->afficherBoo();
            echo "<br/>";
            $cell = new PersoDBZ("Cell", 20, "Kamé Ha méha", "cell.jpg");
            $cell->afficherCell();
            ?>
        </div>
        <br>
        <div class="d-flex justify-content-between">
            <?php
            $freezer = new PersoDBZ("Freezer", "-", "Daichi Retsuzan", "freezer.jpg");
            $freezer->afficherFreezer();
            echo "<br/>";
            $trunk = new PersoDBZ("Trunk", 22, "Kamé Ha Méha", "trunk.jpg");
            $trunk->afficherTrunk();
            echo "<br/>";
            $broly = new PersoDBZ("Broly", 35, "Kamé Ha méha", "broly.jpg");
            $broly->afficherBroly();
            ?>
        </div>
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