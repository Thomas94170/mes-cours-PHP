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
    // définition d'une class en PHP
    class Personnage
    {
        // à l'intérieur on définit des propriétés, des attributs
        public $nom = "Ryu";
        public $age = 25;
        public $artMartial = "Karaté";
        public $img = "Ryu.jpg";

        public $nom1 = "Mr.Bison";
        public $age1 = 45;
        public $artMartial1 = "Psycho-Power";
        public $img1 = "Bison.jpg";

        public $nom2 = "Chun-Li";
        public $age2 = 22;
        public $artMartial2 = "Sanda";
        public $img2 = "Chun-Li.jpg";

        public $nom3 = "Ken";
        public $age3 = 25;
        public $artMartial3 = "Karaté";
        public $img3 = "Ken.jpg";

        public $nom4 = "Sagat";
        public $age4 = 35;
        public $artMartial4 = "Muay-Thai";
        public $img4 = "Sagat.jpg";



        // ces attributs sont semblables aux valeurs qui étaient dans nos tableaux;
        // on peut définir des booléens dans nos attributs

        // on crée une function permettant d'afficher toute nos informations
        // le $this correspond à $ryu dans cette function il s'apppelle lui mm

        public function mesInfos()
        {
            echo "<p>" . $this->nom;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->age;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->artMartial;
            "</p>";
            echo "<br/>";
        }

        public function afficherImageRyu()
        {
            echo "<img src='./image/" . $this->img . "' alt='image-STF'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->mesInfos();
        }

        public function mesInfos1()
        {
            echo "<p>" . $this->nom1;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->age1;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->artMartial1;
            "</p>";
            echo "<br/>";
        }

        public function afficherImageBison()
        {
            echo "<img src='./image/" . $this->img1 . "' alt='image-STF'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->mesInfos1();
        }

        public function mesInfos2()
        {
            echo "<p>" . $this->nom2;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->age2;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->artMartial2;
            "</p>";
            echo "<br/>";
        }

        public function afficherImageChunLi()
        {
            echo "<img src='./image/" . $this->img2 . "' alt='image-STF'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->mesInfos2();
        }

        public function mesInfos3()
        {
            echo "<p>" . $this->nom3;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->age3;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->artMartial3;
            "</p>";
            echo "<br/>";
        }

        public function afficherImageKen()
        {
            echo "<img src='./image/" . $this->img3 . "' alt='image-STF'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->mesInfos3();
        }

        public function mesInfos4()
        {
            echo "<p>" . $this->nom4;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->age4;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->artMartial4;
            "</p>";
            echo "<br/>";
        }

        public function afficherImageSagat()
        {
            echo "<img src='./image/" . $this->img4 . "' alt='image-STF'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->mesInfos4();
        }
    }





    ?>
    <br><br>
    <h1 class="fst-italic text-center">Street Fighter</h1>
    <br><br>
    <h2 class="fst-italic text-center">Les personnages (défini en objet avec PHP)</h2>
    <br><br>





    <div class="fst-italic text-center border border-warning">
        <?php
        // dans cette balise php nous allons créer un objet
        // on lui donne le nom de $ qu on veut 
        $ryu = new Personnage();
        $ryu->afficherImageRyu();
        echo "<br/>";
        $bison = new Personnage();
        $bison->afficherImageBison();
        echo "<br/>";
        $chunli = new Personnage();
        $chunli->afficherImageChunLi();
        echo "<br/>";
        $ken = new Personnage();
        $ken->afficherImageKen();
        echo "<br/>";
        $sagat = new Personnage();
        $sagat->afficherImageSagat();
















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