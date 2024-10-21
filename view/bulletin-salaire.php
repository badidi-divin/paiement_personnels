<?php
	session_start();
	$id=1;
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
	<!-- navigation end -->
	<?php 
	    require_once("../bdd/connexion.php");
		require_once('../model/selection_salaire-2.php');
	?>
			<div class="contenair col-md-6 col-xd-12 col-md-offset-3" style="margin-top:10px;&">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading" style="font-size: 25px;font-weight: bold;">
						Bulletin de Paie
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<div class="table-responsive table--no-card m-b-30">
						<table class="table table-striped">
							<thead>
								<tr>
								</tr>
							</thead>
							<tbody style="font-size:20px;">
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><span style="font-weight:bold;">N°</span><?php  echo($et['id']);?><br>
								<span style="font-weight:bold;">Matricule:</span><?php  echo($et['matricule'])?><br>
								<span style="font-weight:bold;">Ancienneté:</span><?php  echo($et['anciennete'])?> ans<br>
								<span style="font-weight:bold;">Sal Journ:</span><?php  echo($et['sal_journ'])?>$<br>
								<span style="font-weight:bold;">Sal Brut:</span><?php  echo($et['salbrut'])?>$<br>
								<span style="font-weight:bold;">Soin Méd:</span><?php  echo($et['soinmed'])?>(%)<br>
								<span style="font-weight:bold;">Prime:</span><?php  echo($et['prime'])?>$<br>
								<span style="font-weight:bold;">Sal Net:</span><?php  echo($et['salnet'])?>$ <br>
								<span style="font-weight:bold;">Mois:</span><?php  echo($et['mois'])?>Mois <br>
								<span style="font-weight:bold;">Année:</span>20<?php  echo($et['annee'])?>
								</td>
								<!--liens -->
								<td>Signature Agent</td>
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