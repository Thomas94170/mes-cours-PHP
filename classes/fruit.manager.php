<?php

require_once("classes/fruits.class.php");
require_once("classes/monPDO.class.php");
class fruitManager
{
    public static function setFruitsFromDB()
    {
        $pdo = monPDO::getPDO();
        $stmt = $pdo->prepare("Select f.nom as Nom, f.poids as Poids, f.prix as Prix, p.NomClient as Client from fruit f inner join panier p on f.identifiant = p.identifiant");
        $stmt->execute();
        $tabFruits = $stmt->fetchAll();

        foreach ($tabFruits as $tabFruit) {
            // utilisation de la class fruits
            Fruits::$tabFruits[] = new Fruits($tabFruit['Nom'], $tabFruit['Poids'], $tabFruit['Prix']);
        }
    }
}
