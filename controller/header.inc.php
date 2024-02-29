<?php
    #demarrage de la session
    session_start();
    class User {
        public $_title = "Partiel Gmail single page";
        public $_css; // Initialize the property
    
        public function __construct() {
            // Determine the appropriate CSS path based on the current page
            if (basename($_SERVER['PHP_SELF']) === 'index.php') {
                $this->_css = './css/style.css';
            } else {
                $this->_css = './../css/style.css';
            }
        }
    
        public static $_lang = ["fr", "en", "es"];
    }
    
    
    #Pour appeller la classe 
    $_user_new = new User();
?>
<!DOCTYPE html>
<html lang="<?= User::$_lang[0]?>">
<head>
    <meta name="description" content="Ceci est l'exercice du partiel gmail">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_user_new->_title ?></title>
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="stylesheet" href="<?= $_user_new->_css ?>">
</head>

<body>
    <header>
        <nav class="topnav">
        <?php
            if (basename($_SERVER['PHP_SELF']) === 'index.php') {
                echo '<ul>
                    <li class="split">
                        <a href="#home"><span class="span_img"><img class="logo" src="./image/mail.png" alt="gmaillogo"></span> Gmail</a>
                    </li>
                    <li>
                        <a href="#main2" class="inscription active">CRÉER UN COMPTE</a>
                    </li>
                    <li>
                        <a href="#">POUR LES PROS</a>
                    </li>
                    <li>
                        <a href="./src/connexion.php" class="connexion">CONNEXION</a>
                    </li>
                </ul>';
            } else {
                echo '<ul>
                    <li class="split">
                        <a href="#home"><span class="span_img"><img class="logo" src="../image/mail.png" alt="gmaillogo"></span> Gmail</a>
                    </li>
                    <li>
                        <a href="#main2" class="inscription">CRÉER UN COMPTE</a>
                    </li>
                    <li>
                        <a href="#">POUR LES PROS</a>
                    </li>
                    <li>
                        <a href="connexion.html" class="connexion active">CONNEXION</a>
                    </li>
                </ul>';
            }
            ?>
        </nav>
    </header>