<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title> 
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
</head>
	<style type="text/css">
		/** Pour creer un decallage **/
			.divin{
				margin-top: 90px;
			}
			.space{
				margin-top: 10px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
	<body>
		<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="profile.php">Tableau de bord</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter</a>
				</li>
			</ul>
		</div>
	<!-- navigation end -->
	<?php 
	    require_once("../bdd/connexion.php");
		require_once('../model/selection_eleve.php');
	?>
			<div class="contenair col-lg-12 col-md-6 divin">
		<div class="panel panel-primary ">
				<div class="panel-heading">
					Zone de tri de l'impression
				</div>
				<div class="panel-body">
			<form method="get" action="impression-critere.php" class="form-inline">
						<label for="option">Classe:</label>
						<select name="mot1" class="form-control" onchange="this.form.submit()" id="option">
							<option value="7ème" <?php if($mot2==="7ème") echo "selected" ?>>7ème</option>
							<option value="8ème" <?php if($mot2==="8ème") echo "selected" ?>>8ème</option>
							<option value="1ère" <?php if($mot2==="1ère") echo "selected" ?>>1ère</option>
							<option value="2ème" <?php if($mot2==="2ème") echo "selected" ?>>2ème</option>
							<option value="3ème" <?php if($mot2==="3ème") echo "selected" ?>>3ème</option>
							<option value="4ème" <?php if($mot2==="4ème") echo "selected" ?>>4ème</option>
						</select>
						<label for="option">Option:</label>
						<select name="mot2" class="form-control" onchange="this.form.submit()" id="option">
							<option value="Aucune" <?php if($mot2==="Aucune") echo "selected" ?>>Aucune</option>
							<option value="Latin-Philo" <?php if($mot2==="Latin-Philo") echo "selected" ?>>Latin-Philo</option>
							<option value="Math-physique" <?php if($mot2==="Math-physique") echo "selected" ?>>Math-physique</option>
							<option value="Bio-chimie" <?php if($mot2==="Bio-chimie") echo "selected" ?>>Bio-chimie</option>
						</select>
						<label for="option">Année Scolaire:</label>
						<select name="mot3" class="form-control" onchange="this.form.submit()" id="option">
							<option value="2020-2021" <?php if($mot2==="2020-2021") echo "selected" ?>>2020-2021</option>
							<option value="2021-2022" <?php if($mot2==="2021-2022") echo "selected" ?>>2021-2022</option>
							<option value="2022-2023" <?php if($mot2==="2022-2023") echo "selected" ?>>2022-2023</option>
						</select>
						<button type="submit" class="btn btn-success">
						Rechercher</button>
						
					</form>
		</div>
			</div>
</body>
</html>