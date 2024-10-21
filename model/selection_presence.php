<?php  
	$mot1=isset($_GET['mot1'])?$_GET['mot1']:"";
	
	$requete="SELECT * FROM presence WHERE matr_enseignant LIKE '%$mot1%'";	
	
	$resultat=$pdo->query($requete);
