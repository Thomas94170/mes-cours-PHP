<?php

class Fruits
{
    // définition d'un tableau vide pour définir nos personnages attributs et methode statique

    // en la mettant en private, il faut declarer une function getListePersoSS

    // à l'intérieur on définit des propriétés, des attributs
    private $nom;
    private $poids;
    private $prix;

    public static $tabFruits = [];


    // l'attribut public permets de pouvoir modifier ces attributs n importe ou dans le code
    // ce qui peut représenter un risque, dans ce cas la , il faut passer l attribut private
    // const POMME = "pomme";
    // const FRAISE = "fraise";


    // const POIDSPOMMEA = 150;
    // const POIDSPOMMEB = 135;
    // const POIDSPOMMEC = 145;

    // const POIDSFRAISEA = 120;
    // const POIDSFRAISEB = 150;
    // const POIDSFRAISEC = 140;

    // const IMGPOMME = "pomme.jpg";
    // const IMGFRAISE = "fraise.jpg";



    public function __construct($nom, $poids, $prix)
    {
        $this->nom = $nom;
        $this->poids = $poids;
        // $this->prix = $this->getPrixFruit($nom);
        $this->prix = $prix;
    }

    // récupération de nos données private afin de les injecter dans la function addFruit dans la class Panier
    public function getNom()
    {
        return $this->nom;
    }



    // private function getPrixFruit($nom)
    // {
    //     if ($nom === self::POMME) {
    //         return 1.5;
    //     } else if ($nom === self::FRAISE) {
    //         return 1.4;
    //     }
    // }

    // cette function permet d'afficher un objet lui mm
    public function __toString()
    {
        $affichage = $this->getAffichageImg();
        $affichage .= "<p>Type: " . $this->nom . "</p>";
        $affichage .= "<p>poids: " . $this->poids . " gr</p>";
        $affichage .= "<p>prix: " . $this->prix . " €</p>";
        return $affichage;
    }

    private function getAffichageImg()
    {
        if (preg_match("/fraise/", $this->nom)) {
            echo '<div class="fst-italic text-center">';
            echo "<img src ='image/fraise.jpg' alt='image fraise' width = '200px' height ='auto' /><br/>";
            echo '</div>';
        }
        if (preg_match("/pomme/", $this->nom)) {
            echo '<div class="fst-italic text-center">';
            echo "<img src ='image/pomme.jpg' alt='image pomme' width = '200px' height ='auto'  /><br/>";
            echo '</div>';
        }

        // if ($this->nom === self::POMME) {
        //     return "<img src = 'image/" . self::IMGPOMME . "' alt='pomme' width='200px' height='auto'/><br>";
        // } else if ($this->nom === self::FRAISE) {
        //     return "<img src = 'image/" . self::IMGFRAISE . "' alt='pomme' width='200px' height='auto'/><br>";
        // }
    }
}
