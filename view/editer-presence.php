<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/edit-presence.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width-device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.css">
	<style type="text/css">
		.spacer{
				margin-top: 10px;
			}
			.space{
				margin-top: 70px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
</head>
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
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="a">EDITION</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label">
						MATRICULE:
					</label>
					<select name="matricule" class="form-control" autocomplete="off" required="required">
						<?php
							$ps=$pdo->prepare("SELECT * FROM personnels");
							$ps->execute();
						?>
							<option disabled="disabled">
								Choisissez une rubrique
							</option>
							<?php
							while ($s=$ps->fetch(PDO::FETCH_OBJ)) {
							?>
							<option value="<?php echo $s->matricule; ?>">
							<?php echo $s->matricule." ".$s->nom." ".$s->prenom; ?>
							</option>
						<?php
					}
			?>
				</select>
				</div>
			  <div class="form-group">
					<label class="control-label">
						Nbre Prestation (1 Mois):
					</label>
					<input type="number" name="nbre_prest" required="required" class="form-control" value="<?php echo $userinfo['nbre_prest'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						Observation:
					</label>
					<input type="text" name="obs" required="required" class="form-control" value="<?= $userinfo['obsr'] ?>">
			  </div>
				<div class="control-label a">
					<button type="submit" class="btn btn-primary" name="formconnect">Editer</button>
				</div>
			</form>
			<?php
			if (isset($erreur)) {
				echo "<font color='red'>".$erreur."</font>";
			}
		?>
		</div>
	</div>
</div>
</body>
</html>
