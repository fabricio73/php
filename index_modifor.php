
<!DOCTYPE html>
<html>

<body>
 

          
    <form action="index_modifier.php" method="Get">


           <p>Identifiant <input type="text" name="user_prenom" ></br></p> <!-- value="<?php echo htmlspecialchars ($_Get['identifiant'],Ent_Noquotes);?>"  -->
                 
           <p>Login<input type="text" name="user_nom"  > </br></p>
                    
           <p>Password<input  type="text" name="user_message"></br></p>
        

            <p><input type=submit name="change_dep" value="modifier"></br></p>
            <a href='index_lister.php'> afficher les administrateurs de la base donnée</a>;

            

    </form></p>
</body>
</html>