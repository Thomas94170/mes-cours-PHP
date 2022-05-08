<?php

class PersoOPM
{
    // à l'intérieur on définit des propriétés, des attributs
    private $nom;
    private $rang;
    private $arme;
    private $img;
    private $humain;
    // l'attribut public permets de pouvoir modifier ces attributs n importe ou dans le code
    // ce qui peut représenter un risque, dans ce cas la , il faut passer l attribut private
    const RANGSAITAMA = "B";
    const RANGGENOS = "A";
    const RANGBOROS = "-";

    const FORCESAITAMA = "Poing";
    const FORCEGENOS = "Mashingan Burō";
    const FORCEBOROS = "Meteorikku Bāsuto";

    const HUMAIN = true;
    const EXTRATERRESTRE = false;





    function __construct($nom, $rang, $arme, $img, $humain)
    {
        $this->nom = $nom;
        $this->rang = $rang;
        $this->arme = $arme;
        $this->img = $img;
        $this->humain = $humain;
    }
    // nom correspond à public $nom
    // dans les param de ma function __construct, $nom correspond au $nom de $this nom


    public function infos()
    {
        echo '<div class="d-flex flex-column">';
        echo "<p>Nom: " . $this->nom;
        "</p>";
        echo "<br/>";
        echo "<p>RANG: " . $this->rang .
            "</p>";
        echo "<br/>";
        echo "<p>Spécialité: " . $this->arme;
        "</p>";
        echo "<br/>";
        if ($this->humain) {
            echo "<p>Homme</p>";
        } else {
            echo " <p>Extra-terrestre</p>";
        }
        echo '</div>';
    }

    // on défini une function infos comme avec les objets

    public function afficherSaitama()
    {
        echo "<img src='./image/" . $this->img . "' alt='sangoku' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }

    public function afficherGenos()
    {
        echo "<img src='./image/" . $this->img . "' alt='sangohan' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }

    public function afficherBoros()
    {
        echo "<img src='./image/" . $this->img . "' alt='vegeta' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }
}
