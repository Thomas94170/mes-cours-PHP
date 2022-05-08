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
    class PersoMortalKombat
    {
        // à l'intérieur on définit des propriétés, des attributs
        private $nom;
        private $age;
        private $arme;
        private $img;
        // l'attribut public permets de pouvoir modifier ces attributs n importe ou dans le code
        // ce qui peut représenter un risque, dans ce cas la , il faut passer l attribut private



        function __construct($nom, $age, $arme, $img)
        {
            $this->nom = $nom;
            $this->age = $age;
            $this->arme = $arme;
            $this->img = $img;
        }
        // nom correspond à public $nom
        // dans les param de ma function __construct, $nom correspond au $nom de $this nom


        public function infos()
        {
            echo "<p>" . $this->nom;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->age;
            "</p>";
            echo "<br/>";
            echo "<p>" . $this->arme;
            "</p>";
            echo "<br/>";
        }

        // on défini une function infos comme avec les objets

        public function afficherScorpion()
        {
            echo "<img src='./image/" . $this->img . "' alt='MK-scorpion'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->infos();
        }



        public function afficherSubZero()
        {
            echo "<img src='./image/" . $this->img . "' alt='MK-scorpion'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->infos();
        }

        public function afficherJax()
        {
            echo "<img src='./image/" . $this->img . "' alt='MK-scorpion'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->infos();
        }

        public function afficherKano()
        {
            echo "<img src='./image/" . $this->img . "' alt='MK-scorpion'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->infos();
        }

        public function afficherLiuKang()
        {
            echo "<img src='./image/" . $this->img . "' alt='MK-scorpion'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->infos();
        }

        public function afficherRaiden()
        {
            echo "<img src='./image/" . $this->img . "' alt='MK-scorpion'  height='200px' width='auto'/>";
            echo "<br/>";
            $this->infos();
        }
    }






    ?>
    <br><br>
    <h1 class="fst-italic text-center">Mortal Kombat</h1>
    <br><br>
    <h2 class="fst-italic text-center">Les personnages (avec Constructeur)</h2>
    <br><br>





    <div class="fst-italic text-center border border-warning">
        <?php
        // dans cette balise php nous allons créer un objet
        // on lui donne le nom de $ qu on veut 
        $scorpion = new PersoMortalKombat("Scorpion", 33, "Kunai", "scorpion.jpg");
        $scorpion->afficherScorpion();
        echo "<br/>";
        $subZero = new PersoMortalKombat("Sub-Zero", 35, "Sceptre de Glace", "subzero1.jpg");
        $subZero->afficherSubZero();
        echo "<br/>";
        $jax = new PersoMortalKombat("Jax", 32, "Bras bionique", "jax.jpg");
        $jax->afficherJax();
        echo "<br/>";
        $kano = new PersoMortalKombat("Kano", 31, "Oeil laser", "kano1.jpg");
        $kano->afficherKano();
        // on défini une variable qui contient new PersoMortalKombat qui a en attribut les infos que nous souhaitons donner
        // par exemple $kano->afficherKano() nous appelons une methode 
        $liukang = new PersoMortalKombat("Liu-Kang", 27, "Epée du Dragon", "liukang.jpg");
        $liukang->afficherLiuKang();
        echo "<br/>";
        $raiden = new PersoMortalKombat("Raiden", "Age indéfini", "Marteau d'armes", "raiden.jpg");
        $raiden->afficherRaiden();

        ?>

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