
<!DOCTYPE html>
<html>

<body>
 

          
    <form action="index_supprime.php" method="Get">


    	<H4> Attention, apres avoir saissir l'identifiant , login et mot de passe de l'etudiant, reg	arder bien les information saisis avant de supprimer</H4>


           <p>Identifiant <input type="text" name="user_prenom" ></br></p> <!-- value="<?php echo htmlspecialchars ($_Get['identifiant'],Ent_Noquotes);?>"  -->
                 
           <p>Login<input type="text" name="user_nom"  > </br></p>
                    
           <p>Password<input  type="text" name="user_message"></br></p>
        

            <p><input type=submit name="change_dep" value="supprimer"></br></p>
            <a href='index_lister.php'> afficher les administrateurs de la base donnée</a>;

            

    </form></p>
</body>
</html>