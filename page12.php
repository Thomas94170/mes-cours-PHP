<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html avec PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<?php
include("menu.php");
?>


<br><br>
<h1 class="fst-italic text-center">Faire une requete en PDO</h1>
<br><br>
<h2 class="fst-italic text-center">En se connectant à la base de données</h2>
<br><br>
<p class="fst-italic text-center">Afficher le résultat de la requête avec un print_r</p>
<br><br>
<p class="fst-italic text-center">Reprise de l'exercice 10, cette fois ci en se connectant à une base de données grâce à une requete sql. La réponse de la requête est sous la forme d'un array.
    Dans cet exemple nous avons filtré dans notre requete les fruits ayant un poids supérieur a 140.
</p>
<br><br>

<?php

echo '<div class="fst-italic text-center border border-warning">';
echo "<br>";
echo "<br>";

// création d'une class PDO afin de s'assurer que la connexion a la BDD ne se fasse qu'une fois et eviter les bugs

// connexion a notre base de données
// on mets les const en private afin de les protéger
const HOST_NAME = "localhost";
const DB_NAME = "db_panierfruit";
const USER_NAME = "root";
const PWD = "";






try {
    $connexion = 'mysql:host=' . HOST_NAME . ';dbname=' . DB_NAME;
    $monPDO = new PDO($connexion, USER_NAME, PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    $message = "erreur de connexion à la DB" . $e->getMessage();
    die($message);
}

// le code en haut nous permet une connexion à la base de données que nous avons crée sur phpmyadmin



// chapitre 58 mettre notre PDO dans une classe afin d etres sur que la connexion ne se fait qu une fois
// mettre les const en private afin de proteger les informations 










// faire une requete sql
if ($monPDO) {
    // la bonne pratique pour faire un filtre dans notre requete si on veut filtrer le poids
    // 1
    $limitation = 140;

    $req = "SELECT * FROM fruit where Poids > :valeur";
    // dans ma requete je peux demander ce que je veux
    // je peux soit tout afficher en faisant SELECT * FROM fruit ou en faisant un filtre de poids ou de prix comme je veux
    // preparer requete pour eviter une injection sql.
    // faire une etape de preparation de requete en faisant un statement
    $stmt = $monPDO->prepare($req);

    // 2
    // en appliquant cette bonne pratique de filtre, notre code est protégé
    $stmt->bindValue('valeur', $limitation, PDO::PARAM_INT);

    // la préparation de requete est dispo dans la documentation
    // il faut maintenant executer notre requete
    $stmt->execute();
    // une fois executée il faut recuperer le resultat
    $res1 = $stmt->fetchAll();
    // on va tt recuperer en faisant un fetchAll qui sera sous la forme d'un tableau
    echo "<pre>";
    print_r($res1);
}













echo "<br>";
echo "<br>";
echo '</div>';

?>
<?php
include("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>