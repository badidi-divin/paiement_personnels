<?php  
	$id=$_GET['id'];
	
	$requete="SELECT * FROM salaire WHERE id='$id'";	
	
	$resultat=$pdo->query($requete);
