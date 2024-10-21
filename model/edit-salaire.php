<?php 
	
	$requser=$pdo->prepare("SELECT * FROM salaire WHERE id=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();

	if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $matricule=htmlspecialchars($_POST['matricule']);

    $requser=$pdo->prepare("SELECT * FROM personnels WHERE matricule=?");
	$requser->execute(array($matricule));
	$userinfo=$requser->fetch();
	$date1=$userinfo['date_embauche'];

    $anciennete=date('Y')-$date1;

    $nbre_prest=htmlspecialchars($_POST['nbre_prest']);
    $sal_journ=htmlspecialchars($_POST['sal_journ']);
    
    $salbrut=$nbre_prest*$sal_journ;

    $soin_med=htmlspecialchars($_POST['soinmed']);
    $soin_cal=($salbrut*$soin_med)/100;

    if ($anciennete>=10){
    	$prime=50;
    }else{
    	$prime=0;
    }

    $salnet=($salbrut+$prime)-($soin_cal);

    $errors=array();
	
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("UPDATE salaire SET matricule=?,anciennete=?,nbre_prest=?,sal_journ=?,salbrut=?,soinmed=?,prime=?,salnet=? WHERE id=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($matricule,$anciennete,$nbre_prest,$sal_journ,$salbrut,$soin_med,$prime,$salnet,$_GET['id']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
	<script type="text/javascript">
		alert('Modification Effectué avec Succès!')
	</script>
	<script>
		window.open('salaire.php','_self')
	</script>
	<?php	
		exit();
	}