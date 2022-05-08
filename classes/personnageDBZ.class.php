<?php

class PersoDBZ
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
        echo '<div class="d-flex flex-column">';
        echo "<p>Nom: " . $this->nom;
        "</p>";
        echo "<br/>";
        echo "<p>" . $this->age . " ans";
        "</p>";
        echo "<br/>";
        echo "<p>Spécialité: " . $this->arme;
        "</p>";
        echo "<br/>";
        echo '</div>';
    }

    // on défini une function infos comme avec les objets

    public function afficherSangoku()
    {

        echo "<img src='./image/" . $this->img . "' alt='sangoku' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }



    public function afficherSangohan()
    {
        echo "<img src='./image/" . $this->img . "' alt='sangohan' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }

    public function afficherVegeta()
    {
        echo "<img src='./image/" . $this->img . "' alt='vegeta' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }

    public function afficherPiccolo()
    {
        echo "<img src='./image/" . $this->img . "' alt='piccolo' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }

    public function afficherBoo()
    {
        echo "<img src='./image/" . $this->img . "' alt='boo' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }

    public function afficherCell()
    {
        echo "<img src='./image/" . $this->img . "' alt='cell' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }

    public function afficherFreezer()
    {
        echo "<img src='./image/" . $this->img . "' alt='cell' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }
    public function afficherTrunk()
    {
        echo "<img src='./image/" . $this->img . "' alt='cell' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }
    public function afficherBroly()
    {
        echo "<img src='./image/" . $this->img . "' alt='cell' height='200px' width='auto' />";
        echo "<br />";
        $this->infos();
    }
}
