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
                    <a class="nav-link" href="page1.php">Personnage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page2.php">Objet en PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page3.php">Constructeur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page4.php">Les Class</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page5.php">Constantes de class</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page6.php">Attributs et méthodes statiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page7.php">Liste de Fruit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
            </ul>
        </div>
    </div>
</nav>