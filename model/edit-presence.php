<?php
 	require_once('../bdd/connexion.php');
 	$requser=$pdo->prepare("SELECT * FROM presence WHERE id=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();
		

if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $matricule=htmlspecialchars($_POST['matricule']);
    $nbre_prest=htmlspecialchars($_POST['nbre_prest']);
    $obs=htmlspecialchars($_POST['obs']);
   	$errors=array();
	
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("UPDATE presence SET matr_enseignant=?,nbre_prest=?,mois=?,annee=?,obsr=? WHERE id=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($matricule,$nbre_prest,date('m'),date('Y'),$obs,$_GET['id']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
	<script type="text/javascript">
		alert('Modification Effectué avec Succès!')
	</script>
	<script>
		window.open('presence.php','_self')
	</script>
	<?php	
		exit();
	}