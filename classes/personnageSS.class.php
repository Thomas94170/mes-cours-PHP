<?php

class PersoSS
{
    // définition d'un tableau vide pour définir nos personnages attributs et methode statique
    private static $personnagesSS = [];
    // en la mettant en private, il faut declarer une function getListePersoSS

    // à l'intérieur on définit des propriétés, des attributs
    private $nom;
    private $rang;
    private $arme;
    private $img;

    // l'attribut public permets de pouvoir modifier ces attributs n importe ou dans le code
    // ce qui peut représenter un risque, dans ce cas la , il faut passer l attribut private
    const ARMURESEYA = "Pégase";
    const ARMURESHERYU = "Dragon";
    const ARMUREHYOGA = "Cygne";

    const FORCESEYA = "Poing de Pégase";
    const FORCESHERYU = "Rozan Shô Ryû Ha";
    const FORCEHYOGA = "Poussière d'étoile";







    function __construct($nom, $rang, $arme, $img)
    {
        $this->nom = $nom;
        $this->rang = $rang;
        $this->arme = $arme;
        $this->img = $img;
        self::$personnagesSS[] = $this;
        // cette ligne permet d acceder au perso que nous voulons mettre dans notre tableau tt en haut
    }
    // nom correspond à public $nom
    // dans les param de ma function __construct, $nom correspond au $nom de $this nom


    public function infos()
    {
        echo '<div class="d-flex flex-column">';
        echo "<p>Nom: " . $this->nom;
        "</p>";
        echo "<br/>";
        echo "<p>Armure: " . $this->rang .
            "</p>";
        echo "<br/>";
        echo "<p>Technique: " . $this->arme;
        "</p>";
        echo "<br/>";
        echo '</div>';
    }

    public function afficherMesPersonnages()
    {

        echo "<img src = 'image/" . $this->img . "' alt = '" . $this->img . "' />";
        echo "<br>";
        $this->infos();
        echo "<br>";
    }



    public function getListePersoSS()
    {
        return self::$personnagesSS;
    }
}
