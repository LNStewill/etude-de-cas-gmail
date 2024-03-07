<?php
    require_once __DIR__."./../controller/header.inc.php"
?>

    <main >

        <?php

            if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
                $nom = $_SESSION['nom'];
                $prenom = $_SESSION['prenom'];
                echo '<article class="content_2">
                        <p class="paragraph">
                            Bonjour, ' . $prenom . ' ' . $nom . '. Bienvenue dans votre espace !
                        </p>
                        <p class="paragraph">';
                require_once __DIR__ . "/../controller/controller.class.php";
                echo '</p>
                      </article>';
            } else {
                echo '<article class="content_2">
                        <p class="paragraph">
                            Bonjour votre session a expiré ou vous êtes actuellement déconnecté
                            <br/>
                            Vous serez redirigé vers la page d\'accueil  sous peu ! 
                        </p>
                        <p class="paragraph">
                      </article>';

                header("Location: ./index.php");
            }
        ?>
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