<?php
    class ControledeBase{
        static function event(){
            
            if(isset($_POST['mail']) && isset($_POST['mot_de_passe'])){ # vérification des champs
                    
                # vérification si le format du mail est correcte 
                if( filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && $_POST['mot_de_passe']){
                        print "<p>Bonjour ".$_POST['mail']."</p>";
                        
                        print '<p><a href="mailto:'.$_POST['mail'].'">Contactez moi</a></p>';
                        print "<p>Votre sécurité c'est notre tranquillité : ".password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT)."</p>";
                        /* print "<p>".$_COOKIE['mail']."</p>"; */
                        
                        /* password_verify(1984, $hash) */
                }
                else{
                    
                    die("<p> Champs Obligatoires!!! <a href=\"connexion.php\">Rechargez la page</a></p>");
                }
                return false;
                
            }
        }
    }