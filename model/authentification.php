<?php
if (isset($_SESSION['nom'])) {
		header("Location: profile.php");
	}else{


	if (isset($_POST['formconnect'])) {

		$nom=htmlspecialchars($_POST['nom']);

		$password=md5($_POST['password']);

		if (!empty($nom) AND !empty($password)) {

			// Vérification si l'utilisateur existe vraiment
			$requiser=$pdo->prepare("SELECT * FROM user WHERE nom=? AND password=?");
			$requiser->execute(array($nom,$password));
			// rowCount permet de compter le nombre saisie par le user
			$userexist=$requiser->rowCount();
			if ($userexist==1) {
				$userinfo=$requiser->fetch();
				$_SESSION['id_user']=$userinfo['id_user'];
				$_SESSION['nom']=$userinfo['nom'];
				$_SESSION['password']=$userinfo['password'];
				header("Location: tableau-de-bord.php");		
			}
			else
			{
				$erreur="Mauvais Pseudo ou mauvais mot de passe! ";
			}
			
		}
		else
		{
			$erreur="Tous les champs doivent etre completés";
		}

	}
}