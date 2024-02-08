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
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta name="description" content="Ceci est l'exercice du partiel gmail">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partiel Gmail single page</title>
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <nav class="topnav">
            <ul>
                <li class="split">
                    <a href="#home"><span class="span_img"><img class="logo" src="../image/mail.png" alt="gmaillogo"></span>&ensp;Gmail</a>
                </li>        
                <li>
                    <a href="#main2" class="inscription">CRÉER UN COMPTE</a>

                </li>
                <li>
                    <a href="#">POUR LES PROS</a>

                </li>
                <li>
                    <a href="connexion.php" class="connexion active">CONNEXION</a>
                </li>
            </ul>
        </nav>
    </header>

    <main >

        <article class="content_2">
            <p class="paragraph">
                Bienvenue dans votre espace <?php print $_POST['mail'] ?>             
            </p>
            <p class="paragraph">
                <?php
                    require_once /*__DIR__ .*/"../controller/controller.class.php";
                    ControledeBase::event();
                ?>
            </p>
        </article>
        <form id="registration-form" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
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
    <footer id="footer">

    </footer>
</body>
</html>