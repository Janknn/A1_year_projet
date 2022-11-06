    <?php
        require_once "includes/head.php";
    ?>
    <div id="progbar"></div>
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
    <main class='home'>
        <div class="home-page">
            <div class="texte">
                <h1><span class='word-color'>Un</span> suivi de vos performances vous permettant de vous ameliorer ?</h1>
                <p>Bienvenu chez Pulse, avec notre t-shirt connecté vous pourrez suivre en temps réel vos performance et bénéficier d'un recapitulatif de vos données biometrique detaillées apres vos séance de sport. Vous pourrez vois inscrire a la béta en remplissant le formulaire ci dessous.</p>
            </div>
            <div class="center">
                <button id="show-login">Inscription</button>
            </div>
            <div class="popup">
                <div class="close-btn">&times;</div>
                <?php
                    require_once "init.php";
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        if (isset($_POST['name']) && !empty($_POST['email'])) {
                            $data = [
                                'nameEnter' => $_POST["name"],
                                'emailEnter' => $_POST["email"],
                            ];
                        }
                        $query = $pdo->prepare('INSERT INTO beta (id, name, email) VALUES (NULL, :nameEnter, :emailEnter)');
                        if (!$query->execute($data)) {
                            $error = 'Impossible d\acceder a la base de données';
                        }
                        else {
                            $error = 'Données ajoutées';
                            header('Location: remerciement.php?email=' . $_POST['email']);
                        }
                    } 
                ?>
                <h2>Inscription à la béta</h2>
                <form method="post" class="form-element">
                    <label for="name">Prenom et Nom</label>
                    <input type="text" id="name" name="name" placeholder="Entrer votre prénom et votre nom">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Entrer votre email">
                    <button id='save_form'>S'inscrire</button>
                    <p>Nous ne partagerons pas vos informations</p>
                </form> 
            </div>
        </div>
        <div class="product-content">   
            <h3>Nos produits</h3>
            <div class="list1">
                <div class='info_container'>
                    <img class='circle' src="img/t-shirt.png" alt="">
                    <p class='text-product1'>Pulse propose a l'heure actuel deux t-shirts noirs connectés, un t-shirt pour homme et un autre pour femme. Le t-shirt sera capable de relever vos donné biometrique comme le rithme cardiaque, le teux d'oxygen dans le sang, la température corporel etc.</p>
                </div>
                <div class='info_container'>
                    <img class='circle' src="img/smartphone-call.png" alt="">
                    <p class='text-product1'>En complement du t-shirt connecté, Pulse met a dispositon pour les utilsateur une application mobile. Elle permettra de consulter les données biometriques en temps réel et les stocker sur votre compte. Différentes option seront disponible selon l'abonnemant que vous avza souscris</p>
                </div>
                <div class='info_container'>
                    <img class='circle' src="img/growth.png" alt="">
                    <p class='text-product1'>Les produit Pulse vous premettront d'avoir la main sur votre corps et de mieux prendre connaisance de vos performance afin que vous puissiez etre en constante amélioration. Vous pourrez même consulter un historique de celle-ci afin de pouvoir les comparer avec vos performance actuel.</p>
                </div>
            </div>
            <div class="list2">
                <div class='info_container'>    
                    <img class='circle' src="img/dumbbell.png" alt="">
                    <p class='text-product2'>Nos produits ne s'arrete pas a la pratique d'un sport en particulier. Peut importe le sport que vous pratiquez, le t-shirt a été developper pour ci adapter afin de vous fournir tout les données dont vous aurez besoin.</p>
                </div>
                <div class='info_container'>
                    <img class='circle' src="img/france.png" alt="">
                    <p class='text-product2'>Nous avons choisis que la fabrication de nos produit soit faite en France afin de garantir la qualité de nos produits mais aussi de stopper l'exploitation de trailleur étrangés sous payé ou encore, plus d'actualité, l'esclavagisme de la communauté Ouïghours.</p>
                </div>
                <div class='info_container'>
                    <img class='circle' src="img/plant.png" alt="">
                    <p class='text-product2'>Pulse est une jeune entreprise qui se soucis des enjeux majeur de la société actuel surtout en terme d'ecologie. Nous avons donc tout bonnement choisie de fabriquer nos t-shirt a partir de materiaux recyclé.</p>
                </div>
            </div>
        </div>
        <h3 class='avis_title'>Avis client</h3>
        <div class="avis">
            <?php
                require_once "init.php";
                $pdoStat = $pdo->prepare("SELECT * FROM `avis` ORDER BY id DESC limit 3");
                $pdoStat->execute();
                $avis = $pdoStat->FetchAll();
            ?>
            <?php foreach($avis as $avi): ?>
                <div class="avis_content">
                    <h1><?= $avi["pseudo"]?></h1>
                    <h5><?= $avi["note"]?>/20</h5>
                    <p><?= $avi["commentaire"]?></p>
                </div>
                <?php endforeach; ?>
        </div>
    </main>
    <?php
        require_once "includes/footer.php"
    ?>
</body>
<script src='script.js'></script>
</html>