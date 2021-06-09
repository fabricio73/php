
<?php

    
    try{

           $bdd= new PDO('mysql:host=localhost;dbname=lpig3;charset=utf8','root',''); //PDO('mysql:host=localhost;dbname=id16295921_lpig31;charset=utf8','id16295921_root_1','~H[+LXu0gPLOGU}U');  

    }

    catch(Exception $e){

      die('Erreur de connexion à la base de données : '.$e->getMessage());

    }
          
    $resultat=$bdd->query('select * from administrateur ');//on a selectione la table de notre bd admin et on la estoker dan la variable resultat
    
   
    echo '<br/>';
    echo ' <H3>liste des elements enregistrés dans la base de donnees</H3> <br/>';
    
    while($donnee = $resultat -> fetch()){   // tanq le flech vas parcourir toutes les lignes de la table
      
    
            
      //echo 'identifiant numéro: '.$ordre.'<br/>';   on va recuper la valeur de notre ligne et l'affiche dans le name de des champs de notre bd
      echo 'Identifiant:'.$donnee['identifiant'].'<br> Login:'.$donnee['login'].'<br> password :'.$donnee['password'].'<br>' .$lien= "<a href=index_modifor.php?identifiant=".$donnee['identifiant']."&amp;login=".$donnee['login']."&amp;password=".$donnee['password'].">modifier</a>". '</br>'                //inde.php

       .$lien= "<a href=index_supp.php?identifiant=".$donnee['identifiant']."&amp;login=".$donnee['login']."&amp;password=".$donnee['password'].">Supprimer</a>".'<br/>';
                //sup.php
      

      echo '*****************************//////**************************</br>';
    } 
    //echo '<a href="inde.php">retour au formulaire</a>';
     echo '<a href="index_ajouter.html">cliquer ici pour retourner au formulaire d\'insertion</a><br/>';
    

    
   ?>
















































