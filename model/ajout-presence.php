<?php
 require_once('../bdd/connexion.php');

if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $matricule=htmlspecialchars($_POST['matricule']);
    $nbre_prest=htmlspecialchars($_POST['nbre_prest']);
    $obs=htmlspecialchars($_POST['obs']);
   	$errors=array();
	
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("INSERT INTO presence(matr_enseignant,nbre_prest,mois,annee,obsr,date_enreg)VALUES(?,?,?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($matricule,$nbre_prest,date('m'),date('y'),$obs,date('d/m/Y'));
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
	<script type="text/javascript">
		alert('Enregistrement Effectué avec Succès!')
	</script>
	<script>
		window.open('presence.php','_self')
	</script>
	<?php	
		exit();
	}