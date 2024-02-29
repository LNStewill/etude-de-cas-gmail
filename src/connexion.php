<?php
    session_start();
        
    # retenir l'email de la personne connectée pendant 1 an
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # Récupérer l'adresse e-mail du formulaire
        $email = $_POST["mail"];

        # Définir le cookie avec une durée de vie de 30 jours (en secondes)
        setcookie("user_email", $email, time() + 30 * 24 * 60 * 60, "/");

        /*
        Rediriger l'utilisateur vers une autre page ou afficher un message de confirmation
        header("Location: index.php");
        exit();
        */
    }

?>    
<?php
    require_once __DIR__."./../controller/header.inc.php"
?>

    <main >

        <article class="content_2">
            <p class="paragraph">
                Bienvenue dans votre espace             
            </p>
            <p class="paragraph">
                <?php
                    require_once __DIR__ ."./../controller/controller.class.php";
                    ControledeBase::event();
                ?>
            </p>
        </article>
        <form id="login_form" class="login-form" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <fieldset class="container">
                <legend>Connectez-vous à votre compte</legend>
                <label for="mail">Mail ou login*</label>
                <input type="email" id="mail" name="mail" placeholder="Votre email" required>
                <label for="mot_de_passe">Mot de passe*</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                <hr>
                <input type="submit" class="registerbtn subscriptionbtn" name="connexion" value="CONNEXION A VOTRE COMPTE" >
            </fieldset>
            
        </form>
    </main>

    <form action="#footer">
        <button id="myBtn" title="Go to bottom">
            <img src="../image/arrow.png" alt="vecteur_haut">
        </button>
    </form>
    <footer id="footer" class="footer">
        <p>
            &copy; - Gmail - 2024
        </p>
    </footer>
</body>
</html>