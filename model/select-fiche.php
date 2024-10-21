<?php  
	$id=isset($_GET['id'])?$_GET['id']:"";
	
	$requete="SELECT * FROM salaire WHERE id='$id'";	

	
	$resultat=$pdo->query($requete);

	$userinfo=$resultat->fetch();
