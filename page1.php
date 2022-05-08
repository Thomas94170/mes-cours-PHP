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
    include("menu.php");



    ?>
    <br><br>
    <h1 class="fst-italic text-center">Street Fighter</h1>
    <br><br>
    <h2 class="fst-italic text-center">Les personnages (défini en tab de tab associatif)</h2>
    <br><br>





    <div class="fst-italic text-center border border-warning">
        <?php
        $ryu = [
            "Nom" => 'Ryu',
            "Age" => 25,
            "Art Martial" => 'Karaté',
            "Img" => "Ryu.jpg"

        ];
        $sagat = [
            "Nom" => 'Sagat',
            "Age" => 35,
            "Art Martial" => 'Muay-Thai',
            "Img" => "Sagat.jpg"
        ];
        $chunli = [
            "Nom" => 'Chun-Li',
            "Age" => 22,
            "Art Martial" => 'Sanda',
            "Img" => "Chun-Li.jpg"
        ];
        $ken = [
            "Nom" => 'Ken',
            "Age" => 25,
            "Art Martial" => 'Karaté',
            "Img" => "Ken.jpg"
        ];
        $bison = [
            "Nom" => 'Mr.Bison',
            "Age" => 45,
            "Art Martial" => 'Psycho Power',
            "Img" => "Bison.jpg"
        ];

        $mesPersonnages = [$ryu, $sagat, $chunli, $ken, $bison];

        foreach ($mesPersonnages as $monPerso) {
            echo "<img src='./image/" . $monPerso['Img'] . "' alt='image-STF'  height='200px' width='auto'/>";
            afficherPerso($monPerso);
        }







        function afficherPerso($persoStreetFighter)
        {
            foreach ($persoStreetFighter as $index => $value) {
                if ($index !== "Img") {
                    echo "<br>";
                    echo "<b>" . $index . "</b> : " . $value . "<br/>";
                }
            }
            // echo "<p class='fst-italic text-center'>Nom : " . $persoStreetFighter['Nom'];
            // echo "</p>";
            // echo "<br/>";
            // echo "<p class='fst-italic text-center'>Age : " . $persoStreetFighter['Age'];
            // echo "</p>";
            // echo "<br/>";
            // echo "<p class='fst-italic text-center'>Art martial : " . $persoStreetFighter;
            // echo "</p>";
            // echo "<br/><br/>";
        }

        ?>

    </div>



    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- on fait un tableau de tableau associatif -->
<!-- pour cela je défini un nouveau tableau   que je nomme $mesPersonnages
dans ce nouveau tableau , j y mets les var de mes personnages-->
<!-- pour afficher mes personnages, je vais devoir faire une boucle foreach -->
<!-- dans mon foreach je boucle mes personnage sur une variable $monPerso -->