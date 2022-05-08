<!-- comment lier du html avec php -->
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

<body>
    <?php
    include("menu.php")

    ?>
    <br><br>
    <h1 class="fst-italic text-center">La programmation orientée objet (POO)</h1>
    <br><br>
    <h2 class="fst-italic text-center">Définition</h2>
    <br><br>
    <div class="">
        <p class="fst-italic text-center">
            La Programmation Orientée Objet (ou POO) est un paradigme de programmation dans lequel les programmes sont écrits et structurés
            autour des objets plutôt que des fonctions ou de logique. Ici, les objets sont définis comme des champs de données qui ont des
            attributs et un comportement uniques. Ils contiennent des données sous forme d’attributs et des procédures sous forme de méthodes.
            Les procédures d’objet peuvent accéder et modifier les données présentes dans un objet. Pour bien comprendre, regardons un exemple
            dans la vrai vie, une voiture est un objet, avec ses attributs (type, modèle, prix, couleurs, etc…) et ses méthodes
            (accélérer, ralentir, tourner, freiner, etc.).
        </p>
        <br>
        <p class="fst-italic text-center">
            La première étape de la POO est d’identifier tous les objets qu’un programmeur veut manipuler et comment ils sont liés
            les uns aux autres, ce processus est souvent connu sous le nom de « modélisation des données ». Une fois qu’un objet
            est connu, il est généralisé comme une classe d’objets qui définit le type de données qu’il contient et toutes les
            séquences logiques qui peuvent le manipuler. Chaque séquence logique distincte est connue comme une méthode et les objets
            peuvent communiquer avec des interfaces bien définies appelées messages.
        </p>

    </div>

    <br>
    <div class="d-flex justify-content-center">
        <img src="poo.png" alt="imagePHP" srcset="" height="300px" width="auto">
    </div>
    <br><br>

    <h2 class="fst-italic text-center">Principe de la POO</h2>
    <br><br>

    <div class="">
        <p class="fst-italic text-center">
            L’encapsulation masque les détails d’implémentation d’une classe à d’autres objets.
            L’héritage est un moyen de former de nouvelles classes en utilisant des classes déjà définies.
            Le polymorphisme est le processus d’utilisation d’un opérateur ou d’une fonction de différentes manières pour différentes entrées de données.
            L’abstraction simplifie la réalité complexe en modélisant des classes appropriées au problème.
        </p>
        <br>

    </div>















    <?php
    include("footer.php");
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- navbar avec php -->