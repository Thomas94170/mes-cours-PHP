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
    <h1 class="fst-italic text-center">La base de données</h1>
    <br><br>
    <h2 class="fst-italic text-center">Définition</h2>
    <br><br>
    <div class="">
        <p class="fst-italic text-center">
            MySQL est la base de données la plus utilisée dans la programmation web. Nous y accédons via l'interface phpMyAdmin.
            Les base de données sont la pour sauvegarder les nouvelles infos que nous voulons injecter dans notre code. Comment utiliser les bases de données en PHP?
            Comment représenter nos base de données en diagramme pour comprendre. Le MCD ci dessous permet de mieux comprendre.
        </p>
        <br>
        <p class="fst-italic text-center">

        </p>

    </div>

    <br>
    <div class="d-flex justify-content-center">
        <img src="image/bdd.png" alt="bdd" srcset="" height="300px" width="auto">
    </div>
    <br><br>

    <h2 class="fst-italic text-center"></h2>
    <br><br>

    <div class="fst-italic text-center">
        <h3>Les différents champs lors de la construction de la base de données</h3>
        <p class="fst-italic text-center">
            VARCHAR = string (chaine de caractère)
        </p>
        <p class="fst-italic text-center">
            INT = entier (des chiffres)
        </p>
        <p class="fst-italic text-center">
            INDEX = clé primaire (PRIMARY) sur un élément. Permet d'identifier une ligne de notre table de manière unique via un identifiant
        </p>
        <br>
        <h3>Manipuler une base de données</h3>
        <p class="fst-italic text-center">
            SELECT F.Nom, f.Poids, f.Prix, p.NomClient FROM fruit f INNER JOIN panier p on f.identifiant = p.identifiant
        </p>
        <p class="fst-italic text-center">
            sélection de f (fruit) nom, poids, prix et p (panier)nomClient de la table fruit qui est jointe à la table panier par fruit identifiant = panier identifiant
        </p>
        <br>

        <h3>Ajouter une ligne dans une base de données</h3>
        <p class="fst-italic text-center">
            insert into fruit (nom, poids, prix, identifiant) value ("fraiseC", 150,1.20,2),("pommeH",120,1,3)
        </p>
        <p class="fst-italic text-center">
            insérer dans fruit (nom, poids, prix, identifiant) ces valeurs (nom, poids, prix, identifiant)
        </p>
        <br>
        <div class="d-flex justify-content-center">
            <img src="image/ajoutDB.png" alt="ajoutDB" srcset="" height="300px" width="auto">
        </div>
        <br>
        <p class="fst-italic text-center">
            2 nouvelles lignes ont bien été ajoutées (fraiseC et pommeH).
        </p>
        <br>
        <h3>Modifier une ligne</h3>
        <p class="fst-italic text-center">
            UPDATE fruit set Prix = 30 WHERE `Nom` like "fraise%"
        </p>
        <p class="fst-italic text-center">
            MAJ du prix dans la table fruit = 30 partout ou le nom correspond à fraise (% veut dire peut importe ce qu il y a derrière: fraiseA,fraiseB etc...)
        </p>
        <br>
        <div class="d-flex justify-content-center">
            <img src="image/updateDB.png" alt="updateDB" srcset="" height="300px" width="auto">
        </div>
        <br>
        <p class="fst-italic text-center">
            la mise à jour a bien été effectuée toute les fraises ont un prix de 30
        </p>
        <br>
        <h3>Supprimer une ligne</h3>
        <p class="fst-italic text-center">
            delete FROM fruit where Nom = "pommeC" or Nom= "pommeD"
        </p>
        <p class="fst-italic text-center">
            supprimer de la table fruit le nom pommeC et le nom pommeD
        </p>
        <br>
        <div class="d-flex justify-content-center">
            <img src="image/deleteDB.png" alt="deleteDB" srcset="" height="300px" width="auto">
        </div>
        <br>
        <p class="fst-italic text-center">
            la suppression a bien été effectuée, pommeC et pommeD n'existent plus
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