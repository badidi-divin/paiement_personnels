<?php
	session_start();
	require_once '../bdd/connexion.php';
	if (!isset($_SESSION['nom'])) {
		header('location:../index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calcul de salaire</title> 
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
</head>
<body>
	
<!--************************ Menu Principal ***********************************-->
<!-- Navigation -->
	<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="tableau-de-bord.php">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="personnel.php">Personnel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="presence.php">Presence</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="salaire.php">Paiement</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter(<?php
						echo $_SESSION['nom'];
					?>) </a>
				</li>
			</ul>
		</div>
	<!-- navigation end -->
<!--************************End Menu Principal ***********************************-->
		<div align="center" style="	padding-top: 150px;">
			<h1 style="font-weight: bold;">
				Bienvenue  <?php echo $_SESSION['nom']; ?>

			</h1>
		</div>
</div>
</body>
</html>




