<?php
    require_once __DIR__."./../controller/header.inc.php"
?>

    <main >
        <div class="form-action" role="group" aria-labelledby="form">
        <?php
        require_once __DIR__ . "/../controller/controller.class.php";
        ?>
        <?php

            if (isset($_SESSION['login_errors'])) {
                foreach ($_SESSION['login_errors'] as $error) {
                    echo '<p class="warning msg-alert">' . $error . '</p>';
                }
                unset($_SESSION['login_errors']); // Supprimez les erreurs de la session
            }
        ?>
        <form id="login_form" class="login_form" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <?php
            if (isset($_SESSION['success_message'])) {
                foreach ($_SESSION['success_message'] as $succes) {
                    //$succes = $_SESSION['success_message'];
                    echo '<p class="warning msg-success">' . $succes . '</p>';
                }
                unset($_SESSION['success_message']); // Supprimez les messages de succes de la session
            }
            ?>
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
        </div>
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