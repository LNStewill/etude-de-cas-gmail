<?php
    include_once "./controller/header.inc.php"
?>

    <section id="main1">
        <article class="content">
            <p class="paragraph">
                Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareils
            </p>
            <br>
            <form action="#main2">
                <button id="create-account">CRÉER UN COMPTE</button>
            </form>

        </article>
        
    </section>

    <section id="main2">

        <article class="content_2">
            <p class="paragraph">
                Une boîte de réception entièrement repensée
            </p>
            <br>
            <p>
                Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux 
                messages et Choisissez ceux que vous souhaitez lire en priorité. 
            </p>
        </article>
        <div class="form-action" role="group" aria-labelledby="form">

        <?php
        include_once __DIR__."/controller/UserSubscription.class.php";
    ?>
            <form method="post" action="<?php print $_SERVER["PHP_SELF"]; ?>" id="registration-form">
                <fieldset class="container">
                    <legend>Créer un compte</legend>
                    <label for="nom">Nom</label>
                    <input type="text" id="name" name="nom" placeholder="Votre nom" required aria-required="true">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prenom" required aria-required="true">
                    <label for="mail">Mail</label>
                    <input type="email" id="mail" name="mail" placeholder="Votre email" required aria-required="true">
                    <label for="mot_de_passe">Choisissez votre mot de passe </label>
                    <input type="password" id="mot_de_passe" name="mot_de_passe" required aria-required="true">
                    <hr>
                    <input type="submit" class="registerbtn" name="inscription" value="CRÉER UN COMPTE">
                </fieldset>                
            </form>
        </div>
    </section>

    <a href="#footer" id="myBtn" title="Go to bottom">
        <img src="./image/arrow.png" alt="vecteur_haut">
    </a>

    <footer id="footer">
        <p>
            &copy; - Gmail - 2024
        </p>
    </footer>
</body>
</html>