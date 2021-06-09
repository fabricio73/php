
<?php

		
		try{

           $bdd= new PDO('mysql:host=localhost;dbname=lpig3;charset=utf8','root','');	//PDO('mysql:host=localhost;dbname=id16295921_lpig31;charset=utf8','id16295921_root_1','~H[+LXu0gPLOGU}U');	

		}

		catch(Exception $e){

			die('Erreur de connexion à la base de données : '.$e->getMessage());

		}
					
		$resultat=$bdd->query('select * from administrateur');//on a selectione la table de notre bd admin et on la estoker dan la variable resultat
		

		echo '<br/>';
		echo ' <H3>CI-DESSOUS LE CONTENU DE LA BASE DE DONNEES LPIG3_2020</H3> <br/>';
		
		while($donne = $resultat -> fetch()){   // tanq le fleche vas parourir toutes les lignes de la table
			
		
						
			//echo 'identifiant numéro: '.$ordre.'<br/>';   on va recuper la valeur de notre ligne et l'affiche dans le name de des champs de notre bd
			echo 'identifiant:'.$donne['identifiant'].'<br> Login: '.$donne['login'].' <br> password: '.$donne['password'].'<br>' .$lien= "<a href=index_modifier.php?identifiant=".$donne['identifiant']."&amp;login=".$donne['login']."&amp;password=".$donne['password'].">modifier</a>".'<br/>';			
			echo '*****************************//////**************************</br>';
		}	
		echo '<a href="index_modifor.php">retour au formulaire</a>';
		
		
	 ?>















































