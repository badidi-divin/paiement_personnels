<?php
	session_start();
	// Connection datatabase
	require_once '../bdd/connexion.php';
	require_once '../model/authentification.php';
	
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
		PAIEMENT PERSONNELS
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color:blue;">
			<h3 class="a" style="font-weight:bold; font-size: 40px; color: white;">SE CONNECTER</h3>
		</div>
		<div class="panel-body" style="background-color:skyblue;">
			<form method="post" action="">
				<div class="form-group">
					<label class="control-label">
						<span style="font-weight:bold;font-size: 20px;">Username:</span>
					</label>
					<input type="text" name="nom" required="required" class="form-control">
				</div>
			  <div class="form-group">
					<label class="control-label" style="font-weight:bold;font-size: 20px;">
						Password:
					</label>
					<input type="password" name="password" required="required" class="form-control">
			  </div>
				<div class="control-label a">
					<button type="submit" class="btn btn-primary" name="formconnect">Connexion</button>
				</div>
				<a href="inscription.php">Créer un compte?</a>
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
