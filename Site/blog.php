    <?php
        require_once "includes/head.php";
        require_once "includes/navbar.php";
    ?>
    <div class="tri_btn">
        <h1 class='blog_title'>Blog</h1>
        <button class='cat_btn' onclick="filterObjects('all')">Montrer tout</button>
        <button class='cat_btn' onclick="filterObjects('caracteristiques')">Caracteristiques</button>
        <button class='cat_btn' onclick="filterObjects('environnement')">Environnement</button>
    </div>
    <div class="blog">
        <div class="article caracteristiques">
            <img src="img/application.png" alt="">
            <div class="description">
                <p><span>05/05/2022</span></p>
                <h1>Comment fonctionne l'application ?</h1>
                <p>L'application "My Pulse" sera disponible sur les stores d'Android et d'iOS. Une fois téléchargée, vous devrez vous connecter à votre compte. Pour que cela soit valable, ce compte devra déjà avoir bénéficier d'un abonnement auparavant sur notre site internet. Si vous n'avez pas choisi l'abonnement à l'année, vous pourrez vous réabonner directement sur l'application. Une fois votre compte connecté, vous aurez plusieurs onglets consultables...</p>
                <a href="article1.php">Cliquer ici pour voir l'article</a>
            </div>
        </div>
        <div class="article environnement">
            <img src="img/plantt.png" alt="">
            <div class="description">
                <p><span>25/05/2022</span></p>
                <h1>Ecologie et écoresponsabilité chez Pulse</h1>
                <p>Nos t-shirt de sport sont pensés pour offrir la liberté de mouvement dont vous aurez besoin. Notre marque conçoit des vêtements techniques qu’elle fabrique en Europe à partir de matières synthétiques recyclées (plastique, filets de pêche en nylon…). Les teintures qu’elle utilise et les imprimés sont eux, certifiés GOTS. Des vêtement sportifs, bien sûr, mais toutefois assez jolis pour qu’on puisse avoir envie de les porter le reste de la journée, à l’aise devant une série ou avec un livre sur les genoux...</p>
                <a href="#">Cliquer ici pour voir l'article</a>
            </div>
        </div> 
    </div>
    <?php
        require_once "includes/footer.php"
    ?>
</body>
<script src='script.js'></script>
</html>