<?PHP
	if(isset($_GET["user_prenom"])and isset($_GET["user_nom"])and isset($_GET["user_message"])){
		$id=htmlentities($_GET["user_prenom"]);
		$log=htmlentities($_GET["user_nom"]);
		$pass=htmlentities($_GET["user_message"]);
		
		if(empty($id)or empty($log)or empty($pass)){
			echo'veuillez renseignez tout les champs';
		}else{
			try{
				$bdd= new PDO('mysql:host=localhost;dbname=lpig3;charset=utf8','root','');	//PDO('mysql:host=localhost;dbname=id16295921_lpig31;charset=utf8','id16295921_root_1','~H[+LXu0gPLOGU}U');	
				}
			catch(Exception $e){
					die('Erreur:'.$e->getMessage());
				}
				$request="insert into administrateur(identifiant,login,password)values('".$id."','".$log."','".$pass."')";
				$reponse=$bdd ->exec($request);
			if($reponse==0){
					echo"rien n'est inséré";				
			}else{
						echo"vous venez d'ajouter avec succès un etudiant , ses informations suivantes: <br>";
						echo "identifiant: $id <br>";
						echo "Login :$log <br>";
						echo "password: $pass <br>";
				}
			}
		}


?> 
