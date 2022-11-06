    <?php
        require_once "includes/head.php";
    ?>
    <header> 
        <div class="home-navbar">
            <nav>
                <img class='logo' src="img/logo_pulse.png" alt="">
                <ul class="nav-menu">
                    <li><a class='nav-link' href="index.php">Accueil</a></li>
                    <li><a class='nav-link' href="abonnement.php">Abonnement</a></li>
                    <li><a class='nav-link' href="blog.php">Blog</a></li>
                    <li><a class='nav-link' href="a_propos.php">A propos</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>
    <?php
        require_once "init.php";
        $parrainage = mt_rand(1000000,2000000);
        $data = [
            'emailEnter' => $_GET['email'],
            'codeEnter' => $parrainage,
        ];
        $query = $pdo->prepare('INSERT INTO parrainage (id, email, code) VALUES (NULL, :emailEnter, :codeEnter)');
        if(!$query->execute($data)){
            $error = 'Erreur lors de l\'ajout en base de données';
        } else{
            $error = "Article ajouté";
        } 
    ?>
    <main class='home'>
        <div class="home-page">
            <div class="texte">
                <h1><span class='word-color'>Mer</span>ci d'avoir donnés votre avis.</h1>
                <p>Afin de vous remercier, nous vous donnons un code de parraignage.</p>
                <h1><?= $parrainage?></h1>
            </div>
        </div>
    </main>
</body>
<script src='script.js'></script>
</html>