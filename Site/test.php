<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Acceuil</title>
</head>
<body>
    <div class="test_container">
        <img class='test' src="img/application.png" alt="">
    </div>
</body>
</html>

<header> 
        <div class="home-navbar">
            <nav>
                <img src="img/logo_pulse.png" alt="">
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
                $sql = "SELECT * FROM `avis` ORDER BY id DESC limit 3";
                $requete = $pdo->prepare($sql);
                $avis = $requete->fetchAll();
                $requete->execute($sql)
    ?>

<div class="popup">
                <div class="close-btn">&times;</div>
                <div class="form">
                    <h2><span>Ins</span>cription Beta</h2>
                    <div class="form-element">
                        <label for="name">Nom/Prenom</label>
                        <input type="text" id="name" placeholder="Entrer nom prenom">
                    </div>
                    <div class="form-element">
                        <label for="email">Email</label>
                        <input type="text" id="email" placeholder="Entre email">
                    </div>
                    <div class="form-element">
                        <button>S'inscrire</button>
                    </div>
                    <div class="form-element">
                        <p>Nous ne partagerons pas vos informations</p>
                    </div>
                </div>
            </div>  

    #progbar {
    opacity: 0;
    border: 4px solid red;
    position: fixed;
    width: 0;
}

<main class="article-list">
        <h1>Actualités</h1>
        <div class="article">
            <img src="img/article.jpg" alt="">
            <div class="description">
                <p><span>Date</span></p>
                <h1>Titre de l'article</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        <div class="article">
            <img src="img/article.jpg" alt="">
            <div class="description">
                <p><span>Date</span></p>
                <h1>Titre de l'article</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        <div class="article">
            <img src="img/article.jpg" alt="">
            <div class="description">
                <p><span>Date</span></p>
                <h1>Titre de l'article</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </main>

    .blog {
    background-color: #111;
}

.article-list {
    margin: 4em;
    color: var(--body-text-color);
    font-family: Arial, Helvetica, sans-serif;
}

.article {
    display: flex;
}

.article img {
    width: 33%;
    margin-right: 1em;
    margin-top: 4%;
}

.description {
    margin-top: 2em;
    margin-bottom: 2em;
    margin-left: 2%;
    font-size: 20px;
    color: var(--body-text-color);
    text-align: justify;
}

.story_title {
    display: none;
}

@media(max-width:768px){
    .article {
        display: block;
    }

    .article img {
        width: 100%;
    }

    .article-list {
        margin: 1rem;
    }
}

<?php
                require_once "init.php";
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if (isset($_POST['name']) && !empty($_POST['password'])) {
                        $query = $pdo->prepare("SELECT * FROM users WHERE email = '$_POST["emailco"]'");
                    }
            ?>