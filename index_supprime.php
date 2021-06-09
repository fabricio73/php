


<?PHP
	if(isset($_GET["user_prenom"])and isset($_GET["user_nom"])and isset($_GET["user_message"])){
		$id=htmlentities($_GET["user_prenom"]);
		$log=htmlentities($_GET["user_nom"]);
		$pass=htmlentities($_GET["user_message"]);
		
		if(empty($id)or empty($log)or empty($pass)){
			echo'veuillez renseignez tout les champs';
		}
		else{
			
				$bdd= new PDO('mysql:host=localhost;dbname=lpig3;charset=utf8','root','');	
				
			
				$request="DELETE FROM  administrateur WHERE identifiant ='".$id."'";

				$reponse=$bdd ->exec($request);

			if($reponse==0)
			{
					echo"L'etudiant n'a pas pu être supprimé";				
			}
			else{
						echo"vous venez de supprimer un etudiant avec succès, les informations etaient les  suivantes: <br>";
						echo "identifiant: $id <br>";
						echo "Login :$log <br>";
						echo "password: $pass <br>";
				}
			}
		}
		
	
		echo "<a href=index_supp.php'> Retour pour supprimer un etudiant</a>";
		

?>  