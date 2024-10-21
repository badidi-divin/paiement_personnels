
<?php  

	require_once('../bdd/connexion.php');

	$requete="SELECT * FROM presence";	
	$resultat=$pdo->query($requete);

	// Pour Exporter
	header("Content-Type:application/vnd.ms-excel");
	header("Content-Disposition:attachment; Filename=MyData.xls");
?>
                            <h2 align="center">LISTE DES PRESTATIONS</h2>
                                    <table border="1">
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
                                

                                    </tr>
                                               <?php
                                            }
                                                ?>
                                        </tbody>
                                    </table>

        
    