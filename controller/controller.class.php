<?php
    class ControledeBase{
        static function event(){
            
            if(isset($_POST['email']) && isset($_POST['password'])){ # vérification des champs
                    
                # vérification si le format du mail est correcte 
                if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $_POST['password']){
                        print "<p>Bonjour ".$_POST['email']."</p>";
                        
                        print '<p><a href="mailto:'.$_POST['email'].'">Contactez moi</a></p>';
                        print "<p>Votre sécurité c'est notre tranquillité : ".password_hash($_POST['password'], PASSWORD_DEFAULT)."</p>";
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