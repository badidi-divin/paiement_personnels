<?php 
	
	if (isset($_POST['formconnect'])) {
    //Lecture des données saisie par le user
    $matricule=htmlspecialchars($_POST['matricule']);

    $requser=$pdo->prepare("SELECT * FROM personnels WHERE matricule=?");
	$requser->execute(array($matricule));
	$userinfo=$requser->fetch();

	$requser=$pdo->prepare("SELECT * FROM presence WHERE matr_enseignant=?");
	$requser->execute(array($matricule));
	$userinfo2=$requser->fetch();
	$date1=$userinfo['date_embauche'];

    $anciennete=date('Y')-$date1;

    $sal_journ=htmlspecialchars($_POST['sal_journ']);
    $nbre_prest=$userinfo2['nbre_prest'];
    
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
	$ps=$pdo->prepare("INSERT INTO salaire(matricule,anciennete,sal_journ,salbrut,soinmed,prime,salnet,mois,annee)VALUES(?,?,?,?,?,?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($matricule,$anciennete,$sal_journ,$salbrut,$soin_med,$prime,$salnet,date('m'),date('y'));
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
	<script type="text/javascript">
		alert('Enregistrement Effectué avec Succès!')
	</script>
	<script>
		window.open('salaire.php','_self')
	</script>
	<?php	
		exit();
	}