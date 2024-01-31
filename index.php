<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta name="description" content="Ceci est l'exercice du partiel gmail">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partiel Gmail single page</title>
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <nav class="topnav">
            <ul>
                <li class="split">
                    <a href="#home"><img class="logo" src="./image/mail.png" alt="gmaillogo">&nbsp;Gmail</a>
                </li> 
                

                
                <li>
                    <a href="#main2" class="inscription active">CRÉER UN COMPTE</a>

                </li>
                <li>
                    <a href="#">POUR LES PROS</a>

                </li>
                <li>
                    <a href="./src/connexion.php" class="connexion ">CONNEXION</a>
                </li>
            </ul>
        </nav>
    </header>

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
        <form id="registration-form">
            <fieldset class="container">
                <legend>Créer un compte</legend>
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="Votre nom" required>
                <label for="surname">Prénom</label>
                <input type="text" id="surname" name="surname" placeholder="Votre prenom" required>
                <label for="email">Mail</label>
                <input type="email" id="email" name="email" placeholder="Votre email" required>
                <label for="password">Choisissez votre mot de passe </label>
                <input type="password" id="password" name="password" required>
                <hr>
                <input type="submit" class="registerbtn" name="inscription" value="CRÉER UN COMPTE">
            </fieldset>
            
        </form>
    </section>

    <form action="#footer">
        <button id="myBtn" title="Go to bottom">
            <img src="./image/arrow.png" alt="vecteur_haut">
        </button>
    </form>
    <footer id="footer">

    </footer>
</body>
</html>