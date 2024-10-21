<?php
	session_start();
	require_once '../bdd/connexion.php';
	require_once('../model/imprimer-salaire.php');
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tableau de Bord</title>
	<link rel="stylesheet" href="../includes/css/bootstrap.css">
	<style type="text/css">
		@page
		{
			size:A4;
			margin:0; 

		}
		#print-btn{
			display: none;
			visibility: none;
		}
		.margetop{
			margin-top: 60px;
		}
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
	<!--************************ Header ***********************************-->
	<!-- Navigation -->

			<div class="container headings text-center margetop" >
				<h2 class=" pt-1" style="font-weight: bold;">COLLEGE SAINT PIERRE</h2>			
			</div>
		<div class="col-md-12 col-xs-12 spacer">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						GESTION DE PAIE
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th><th>MATRICULE</th><th>ANCIENNETE</th><th>NBRE PRESTATION</th><th>SALAIRE-JOURNALIER($)</th><th>SALAIRE BRUT($)</th><th>SOIN MEDICAl(%)</th><th>PRIME($)</th><th>SALAIRE NET($)</th><th>DATES</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$ps->fetch()){?>
								<tr>
								<td><?php  echo($et['id'])?></td>
								<td><?php  echo($et['matricule'])?></td>
								<td><?php  echo($et['anciennete'])?></td>
								<td><?php  echo($et['nbre_prest'])?></td>
								<td><?php  echo($et['sal_journ'])?></td>
								<td><?php  echo($et['salbrut'])?></td>
								<td><?php  echo($et['soinmed'])?></td>
								<td><?php  echo($et['prime'])?></td>
								<td><?php  echo($et['salnet'])?></td>
								<td><?php  echo($et['dates'])?></td>
								<!--liens -->
											</tr>	
									<?php } ?>	
							</tbody>
						</table>
						<div class="text-center">
							<button onclick="window.print();" class="btn btn-primary">Print</button>
						</div>	
					</div>
				</div>	
			</div>
		
</body>
</html>
