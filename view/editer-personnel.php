<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/edit-personnel.php';
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
					<a class="nav-link" style="font-size: 23px" href="tableau-de-bord.php">Tableau de bord</a>
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
			<h3 class="a">EDITION ENSEIGNANT</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
			  <div class="form-group">
					<label class="control-label">
						NOM:
					</label>
					<input type="text" name="nom" required="required" class="form-control" value="<?= $userinfo['nom'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						POST-NOM:
					</label>
					<input type="text" name="postnom" required="required" class="form-control" value="<?= $userinfo['postnom'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						PRENOM:
					</label>
					<input type="text" name="prenom" required="required" class="form-control" value="<?= $userinfo['sexe'] ?>">
			  </div>
			   <div class="form-group">
					<label class="control-label">
						SEXE:
					</label>
					<select name="sexe" class="form-control" autocomplete="off" required="required">
						<option value="M">
							M
						</option>
						<option value="F">
							F
						</option>
					</select>
			  </div>
			  <div class="form-group">
					<label class="control-label">
						TELEPHONE:
					</label>
					<input type="number" name="tel" required="required" class="form-control" value="<?= $userinfo['tel'] ?>">
			  </div>
			  <div class="form-group">
					<label class="control-label">
						ADRESSE COMPLETE:
					</label>
					<input type="text" name="adresse" required="required" class="form-control" value="<?= $userinfo['adresse'] ?>">
			  </div>
			  <div class="form-group">
			  		<label class="control-label">
						Année d'embauche:
					</label>
					<input type="number" name="date_embauche" required="required" class="form-control" value="<?= $userinfo['date_embauche'] ?>">
				 </div>
			<div class="form-group">
			  		<label class="control-label">
						Fonction:
					</label>
					<input type="text" name="type_contrat" required="required" class="form-control" value="<?= $userinfo['type_contrat'] ?>">
				 </div>
			 	<div class="control-label a">
					<button type="submit" class="btn btn-primary" name="formconnect">Edition</button>
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
