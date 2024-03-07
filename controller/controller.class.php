<?php
    class ControledeBase{
        static function event(){

            require_once "config.inc.php"; # Inclure le fichier de configuration de la base de données

            echo 'test ecriture';
            try
            {
                $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motDePasse);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOEXCEPTION $e)
            {
            $e->getMessage();
            }


            if($_SERVER["REQUEST_METHOD"] == "POST") { # vérification des champs
                
                // Récupérer le mail et le mot de passe du formulaire
                $mail = $_POST["mail"];
                $mot_de_passe = $_POST["mot_de_passe"];

                if(empty($mail)) {
                    $_SESSION['login_errors'][] ="Veuillez s'il vous plait renseigner votre identifiant";

                }
                elseif(empty($mot_de_passe)) {
                    $_SESSION['login_errors'][] ="Veuillez s'il vous plait renseigner votre mot de passe";
                }
                elseif(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                     # vérification si le format du mail est correcte
                    $_SESSION['login_errors'][] ="Veuillez renseigner un mail valide";
                }

                else {
                                       
                    // Vérifier si l'utilisateur existe déjà dans la base de données
                    $_requete_Verif = $connexion->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
                    $_requete_Verif->bindParam( 1, $mail);
                    $_requete_Verif->execute();
                    // Récupération des résultats
                    $usertab = $_requete_Verif->fetch(PDO::FETCH_ASSOC);
                    
                    if ($_requete_Verif->rowCount() > 0) {
                        if($mail==$usertab["mail"]) {
                            if(password_verify($mot_de_passe, $usertab["mot_de_passe"])) {
                                // L'utilisateur est authentifié
                                $_SESSION['user_id'] = $user['id'];
                                $_SESSION['user_name'] = $user['username'];
                                
                                header("Location: ./src/welcome.php");   
                                //refresh 2 second after redirect to "welcome.php" page
                                exit;
                            } else {
                                $_SESSION['login_errors'][] ="Erreur de mot de passe";
                            }
                        }   else {
                            $_SESSION['login_errors'][] ="identifiant erroné";
                        }
                    }
                }
            }                
        }
    }

    // Utilisation
    ControledeBase::event();