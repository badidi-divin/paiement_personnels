<?php  
	$mot1=isset($_GET['mot1'])?$_GET['mot1']:"";
	
	$requete="SELECT * FROM salaire WHERE matricule LIKE '%$mot1%'";	
	
	$resultat=$pdo->query($requete);
