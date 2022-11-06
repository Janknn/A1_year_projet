    <?php
        require_once "includes/head.php";
        require_once "includes/navbar.php";
    ?>
    <main>
        <div class="connexion_inscription_form">
            <?php
            require 'init.php';
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if(isset($_POST['emailco']) && !empty($_POST['emailco']) && !empty($_POST['passwordco'])){
                    $savemail = $_POST['emailco'];
                    $verif = $pdo->prepare("SELECT * FROM users WHERE email = ?");
                    $verif->execute(array($savemail));
                    $test=$verif->fetch();
                    if (isset($_POST['email']) && isset($_POST['passwordco'])) {
                        $goodpass = password_verify($_POST['passwordco'],$savepass['password']);
                        if ($goodpass == true) {
                            $_SESSION['email'] = $test['email'];
                            $_SESSION['passwordco'] = $savepass['passwordco'];
                            $_SESSION['role'] = $test['role'];
                        }
                    }
                } 
            }
            ?>
            <h2><span>Con</span>nexion</h2>
            <form action="" method="post" class="form-element">
                <label for="email">Email</label>
                <input type="email" id="email" name="emailco" placeholder="Entrer une adresse mail">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="passwordco" placeholder="Entrer votre mot de passe">
                <button>Connexion</button>
                <p>Nous ne partagerons pas vos informations</p>
            </form> 
        </div>
        <div class="connexion_inscription_form">
            <?php
                require_once "init.php";
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if (isset($_POST['email']) && !empty($_POST['password'])) {
                        $data = [
                            'emailEnter' => $_POST["email"],
                            'passwordEnter' => password_hash($_POST["password"], PASSWORD_DEFAULT),
                        ];
                    }
                    $query = $pdo->prepare('INSERT INTO users (id, email, password) VALUES (NULL, :emailEnter, :passwordEnter)');
                    if ($query->execute($data)) {
                        $error = 'Impossible d\acceder a la base de données';
                    }
                    else {
                        $error = 'Données ajoutées';
                    }
                }
            ?>
            <h2><span>Ins</span>cription</h2>
            <form action="" method="post" class="form-element">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrer une adresse mail">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe">
                <button>Inscription</button>
                <p>Nous ne partagerons pas vos informations</p>
            </form> 
        </div>
    </main>