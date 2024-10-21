<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/inscription.php';
	
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
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div align="center" style="font-size:30px;font-weight: bold;">
		COLLEGE SAINT PIERRE
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color:blue;color: white;" >
			<h3 align="center">INSCRIPTION</h3>
		</div>
		<div class="panel-body" style="background-color:skyblue;" >
			<form method="post" action="">
				<div class="form-group">
					<label class="control-label">
						Username:
					</label>
					<input type="text" name="nom" required="required" class="form-control">
				</div>
			  <div class="form-group">
					<label class="control-label">
						Password:
					</label>
					<input type="password" name="password" required="required" class="form-control">
			  </div>
				<div class="control-label a">
					<button type="submit" class="btn btn-primary" name="formconnect">Créer un Compte</button>
				</div>
				<a href="connexion.php">Se Connecter?</a>
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
