<?php

class Panier
{

    private static $prochainIdentifiant = 1;
    // cette variable est en relation avec $identifiant, elle permettra d'incrémenter le numéro du panier 
    // quand nous en ferons plusieurs : panier1, panier2 etc...

    private $identifiant;
    private $pommes = [];
    private $fraises = [];
    // $identifiant correspond au numéro du panier que nous allons lui donner
    // $pommes et $fraises correspondent à un tableau que nous remplirons d 'autant de pommes et fraises que nous souhaiterons


    // on crée un panier avec un constructeur
    // on défini que identifiant sera $prochainIdentifiant
    // et on l'incrémente de 1 pour avoir un panier différent à chaque fois
    public function __construct()
    {
        $this->identifiant = self::$prochainIdentifiant;
        self::$prochainIdentifiant ++;
    }

    // function permettant d'ajouter des fruits dans notre panier
    // prend en parametre $fruit
    // dans la class Fruit, nos infos etant en private (nom poids prix)
    // il faut faire un getter dans ma class fruit
    // cette function nous dis que si $fruit utilise la methode getNom et que ca correspond à pomme
    // nous remplissons le tableau de pommes[] par un fruit (correspondant à pomme
    // idem pour les fraise)
    public function addFruit($fruit)
    {
        if ($fruit->getNom() === Fruits::POMME) {
            $this->pommes[] = $fruit;
        } else if ($fruit->getNom() === Fruits::FRAISE) {
            $this->fraises[] = $fruit;
        }
    }

    // création de la function GetIdentifiant afin d'afficher le panier et ce qu'il contient 
    // lorsqu on le selectionne dans la liste déroulante
    public function getIdentifiant()
    {
        return $this->identifiant;
    }




    // création de la function __toString pour afficher notre objet avec un simple écho
    public function __toString()
    {
        $affichage = "<p class='monpanier'>Le contenu de votre panier " . $this->identifiant . ": </p><br>";
        // ajout dun foreach pour boucler sur chacun de nos tab de pomme et fraise
        foreach ($this->pommes as $pomme) {
            $affichage .= $pomme;
        }
        foreach ($this->fraises as $fraise) {
            $affichage .= $fraise;
        }

        return $affichage;

        // $pomme et fraise etant des string je ne peux pas faire un echo
        // je la stocke donc dans la variable $affichage
        // et pour l'afficher je fais un return de cette function $affichage
    }
}
