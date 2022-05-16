<!-- template avec php, nous allons ici mettre notre navbar qui va se répéter sur nos différentes pages lorsque nous l'appellerons dans une balise php avec include ("nomDeLaPage.php") -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://www.php.net/">PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page1.php">Exo1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page2.php">Exo2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page3.php">Exo3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page4.php">Exo4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page5.php">Exo5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page6.php">Exo6</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page7.php">Exo7</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page8.php">Exo8</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page9.php">Exo9</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page10.php">Exo10</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page11.php">La BDD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gestionPanier.php">Gestion Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page12.php">PDO Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.php.net/manual/fr/book.pdo.php">PDO documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="afficherFruit.php">afficher les fruits</a>
                </li>

            </ul>
        </div>
    </div>
</nav>