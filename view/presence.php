<?php
	session_start();
	if (isset($_GET['export5'])){
        header('location:presence_export.php');
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
		require_once('../model/selection_presence.php');
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
						<a href="ajout-Presence.php" class="btn btn-primary">Ajouter</a>
						&nbsp;&nbsp;
						<a href="imprimer-presence.php" class="btn btn-danger">Imprimer</a>
						 &nbsp;&nbsp;&nbsp;&nbsp;
                         <button class="btn btn-success" title="Exporter vers Excel" name="export5">Excel</button>
					</form>
		</div>
			</div>
		<div align="center">

			<h1 style="font-size: 45px;color:white;font-weight: bold;">
				Gestion des Prestations de services
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
									<th>MATRICULE</th><th>NBRE PREST</th><th>MOIS</th><th>ANNEE</th><th>DATE ENREG</th><th>OBSERVATION</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><?php  echo($et['matr_enseignant'])?></td>
								<td><?php  echo($et['nbre_prest'])?></td>
								<td><?php  echo($et['mois'])?></td>
								<td><?php  echo($et['annee'])?></td>
								<td><?php  echo($et['date_enreg'])?></td>
								<td><?php  echo($et['obsr'])?></td>
								

								<!--liens -->
								<td><a onclick="return confirm('Etes-vous sûre...?');" href="../model/supprimer-presence.php?id=<?php echo($et['id'])?>" class="btn btn-danger">Supprimer</a></td>
								<td><a href="editer-presence.php?id=<?php echo($et['id'])?>" class="btn btn-primary">Editer</a></td>
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