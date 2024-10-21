<?php
 require_once('../bdd/connexion.php');

if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $matricule=htmlspecialchars($_POST['matricule']);
    $nom=htmlspecialchars($_POST['nom']);
    $postnom=htmlspecialchars($_POST['postnom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $sexe=htmlspecialchars($_POST['sexe']);
    $tel=htmlspecialchars($_POST['tel']);
    $adresse=htmlspecialchars($_POST['adresse']);
   	$date_embauche=htmlspecialchars($_POST['date_embauche']);
   	$type_contrat=htmlspecialchars($_POST['type_contrat']);
   	$errors=array();
	
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("INSERT INTO personnels(matricule,nom,postnom,prenom,sexe,tel,adresse,date_embauche,type_contrat)VALUES(?,?,?,?,?,?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($matricule,$nom,$postnom,$prenom,$sexe,$tel,$adresse,$date_embauche,$type_contrat);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
	<script type="text/javascript">
		alert('Enregistrement Effectué avec Succès!')
	</script>
	<script>
		window.open('personnel.php','_self')
	</script>
	<?php	
		exit();
	}