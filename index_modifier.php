<?php
        if(isset($_GET["user_prenom"])and isset($_GET["user_nom"])and isset($_GET["user_message"])){
        $id=htmlentities($_GET["user_prenom"]);
        $log=htmlentities($_GET["user_nom"]);
        $pass=htmlentities($_GET["user_message"]);
        
        if(empty($id)or empty($log)or empty($pass)){
            echo'veuillez renseignez tout les champs';
        }else{
            
                $bdd= new PDO('mysql:host=localhost;dbname=lpig3;charset=utf8','root','');  //PDO('mysql:host=localhost;dbname=id16295921_lpig31;charset=utf8','id16295921_root_1','~H[+LXu0gPLOGU}U'); 
    
            $requete ="UPDATE administrateur SET password='".$pass."',login='".$log."' WHERE identifiant='".$id."'";
             

            $reponse = $bdd->exec($requete);

            
            if($reponse == 0)
            {
                echo 'rien n\'est modifier<br>';
            }
            else
            {
                echo 'Modification réussie avec succès<br>';
                echo"vous venez de modifier un etudiant avec succès, les informations etaient les  suivantes: <br>";
                        echo "identifiant: $id <br>";
                        echo "Login :$log <br>";
                        echo "password: $pass <br>";
            }
        }
    }
    /*else
    {
        echo 'sa rentre pas';
    }*/
    
    echo "<a href='index_modifor.php'>Retour pour modifier un étudiant</a>";
?>