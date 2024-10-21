<?php
	session_start();
	if (isset($_GET['export4'])==1) {
        header('location:personnel_export.php');
    }
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
					<a class="nav-link" style="font-size: 23px" href="tableau-de-bord.php">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="personnel.php">Personnel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="presence.php">Presence</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="salaire.php">Salaire</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter</a>
				</li>
			</ul>
		</div>
	<!-- navigation end -->
	<?php 
	    require_once("../bdd/connexion.php");
		require_once('../model/selection_personnel.php');
	?>
			<div class="contenair col-lg-12 col-md-6 divin">
		<div class="panel panel-primary ">
				<div class="panel-heading">
					Rechercher
				</div>
				<div class="panel-body">
			<form method="get" action="" class="form-inline">
						<div class="form-group">
							<label for="propri">Matricule:</label>
							<input type="text" name="mot1" class="form-control" placeholder="Mettez le Matricule" value="<?php echo $mot1 ?>">
						</div>
						<button type="submit" class="btn btn-success">
						Rechercher</button>
						&nbsp;&nbsp;
						<a href="ajout-Personnel.php" class="btn btn-primary">Ajouter</a>
						&nbsp;&nbsp;
						<a href="imprimer.php" class="btn btn-danger">Imprimer</a>
						 &nbsp;&nbsp;&nbsp;&nbsp;
                         <button class="btn btn-success" title="Exporter vers Excel" name="export4">Excel</button>
					</form>
		</div>
			</div>
		<div align="center">

			<h1 style="font-size: 45px;color:white;font-weight: bold;">
				Gestion des Personnels
			</h1>
		</div>

			<div class="col-md-12 col-xs-12">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<div class="table-responsive table--no-card m-b-30">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>MATRICULE</th><th>NOM-COMPLET</th><th>SEXE</th><th>TELEPHONE</th><th>ADRESSE</th><th>ANNEE D'EMBAUCHE</th><th>FONCTION</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><?php  echo($et['matricule'])?></td>
								<td><?php  echo($et['nom']." ".$et['postnom']." ".$et['prenom'])?></td>
								<td><?php  echo($et['sexe'])?></td>
								<td><?php  echo($et['tel'])?></td>
								<td><?php  echo($et['adresse'])?></td>
								<td><?php  echo($et['date_embauche'])?></td>
								<td><?php  echo($et['type_contrat'])?></td>
								<!--liens -->
								<td><a onclick="return confirm('Etes-vous sûre...?');" href="../model/supprimer-personnel.php?id=<?php echo($et['matricule'])?>" class="btn btn-danger">Supprimer</a></td>
								<td><a href="editer-personnel.php?id=<?php echo($et['matricule'])?>" class="btn btn-primary">Editer</a></td>
								<td></td>
											</tr>	
									<?php } ?>	
							</tbody>
						</table>
					</div>
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	</body>
</html>