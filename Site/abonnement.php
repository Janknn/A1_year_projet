    <?php
        require_once "includes/head.php";
        require_once "includes/navbar.php";
    ?>
    <main>
        <div class="subscription_container">
            <section class="subscription">
                <div class="subscription_special-text">Recommandé</div>
                <div class="subscription_header">
                    <h1 class="subscription_title">Sportif</h1>
                    <h2 class="subscription_summary">Pour ceux qui veulent passer au niveau superieur</h2>
                </div>
                <div class="subscription_description">
                    <ul class="subscription_list">
                        <li class="subscription_feature">Acces a l'application mobile</li>
                        <li class="subscription_feature">Données biometrique en temps réél</li>
                        <li class="subscription_feature">Historique des entrainements et données biometriques</li>
                        <div class="boost">
                        <input type="checkbox" class='checkbox'>
                        <p>Programme sportif fait par un coach</p>
                        </div>
                        <div class="boost">
                        <input type="checkbox" class='checkbox1'>
                        <p>Programme sportif fait par un coach</p>
                        </div>
                    </ul>
                </div>
                <div class="subscription_actions">
                    <span class="subscription_price">10€</span>
                    <p class="subscription_text">par mois</p>
                    <a href="./" class="subscription_button">Acheter</a>
                </div>
            </section>
            <section class="subscription">
                <div class="subscription_header">
                    <h1 class="subscription_title">Athlète</h1>
                    <h2 class="subscription_summary">Pour vous éléver a un tout autre niveau</h2>
                </div>
                <div class="subscription_description">
                    <ul class="subscription_list">
                        <li class="subscription_feature">Features de l'abonnemnt "Sportif"</li>
                        <li class="subscription_feature">Programme sportif fait par un coach</li>
                        <li class="subscription_feature">Analyse de votre objectif sportif</li>
                    </ul>
                </div>
                <div class="subscription_actions">
                    <p class="subscription_price">20€</p>
                    <p class="subscription_text">par mois</p>
                    <a href="./" class="subscription_button">Acheter</a>
                </div>
            </section>
            <section class="subscription">
                <div class="subscription_header">
                    <h1 class="subscription_title">Pro</h1>
                    <h2 class="subscription_summary">Pour ceux qui pour qui le sport est plus qu'une passion, un mode de vie</h2>
                </div>
                <div class="subscription_description">
                    <ul class="subscription_list">
                        <li class="subscription_feature">Features de l'abonnement "Sportif"</li>
                        <li class="subscription_feature">Features de l'abonnement "Athlete"</li>
                        <li class="subscription_feature">Programme de nutrition</li>
                    </ul>
                </div>
                <div class="subscription_actions">
                    <p class="subscription_price">30€</p>
                    <p class="subscription_text">par mois</p>
                    <a href="./" class="subscription_button">Acheter</a>
                </div>
            </section>
            <div class="form_notice">
                <?php
                    require_once "init.php";
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        if (isset($_POST['pseudo']) && !empty($_POST['pseudo']) && !empty($_POST['commentaire'])) {
                            $data = [
                                'pseudoEnter' => $_POST["pseudo"],
                                'noteEnter' => $_POST["note"],
                                'commentaireEnter' => $_POST["commentaire"],
                            ];
                        }
                        $query = $pdo->prepare('INSERT INTO avis (id, pseudo, note, commentaire) VALUES (NULL, :pseudoEnter, :noteEnter, :commentaireEnter)');
                        if ($query->execute($data)) {
                            $error = 'Impossible d\acceder a la base de données';
                        }
                        else {
                            $error = 'Données ajoutées';
                        }
                    }
                ?>
                <h2><span>Lai</span>sser un avis</h2>
                <form action="" method="post" class="form-element">
                    <label for="name">Pseudo</label>
                    <input type="text" id="pseudo" name="pseudo" placeholder="Entrer un pseudo">
                    <label for="grade">Note</label>
                    <input type="number" id="note" name="note" min="0" max="20" placeholder="Entrer votre note">
                    <label for="comment">Commentaire</label>
                    <input type="text" id="commentaire" name="commentaire" placeholder="Commenter...">
                    <button>Publier</button>
                    <p>Nous ne partagerons pas vos informations</p>
                </form> 
            </div>
        </div>
    </main>
    <?php
        require_once "includes/footer.php"
    ?>
</body>
<script src='script.js'></script>
</html>