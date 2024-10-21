
<?php  

	require_once('../bdd/connexion.php');

	$requete="SELECT * FROM personnels";	
	$resultat=$pdo->query($requete);

	// Pour Exporter
	header("Content-Type:application/vnd.ms-excel");
	header("Content-Disposition:attachment; Filename=MyData.xls");
?>
                            <h2 align="center">LISTE DES PERSONNELS</h2>
                                    <table border="1">
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
                                    </tr>
                                               <?php
                                            }
                                                ?>
                                        </tbody>
                                    </table>

        
    