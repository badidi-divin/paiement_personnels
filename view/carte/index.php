<?php 
    require_once('../../bdd/connexion.php');
    require_once('../../model/select-fiche.php');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>VOICI L'HOMME</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="profile-bottom">
        Voici L'Homme Hospital
        <div class="profile-infos">
          <h1>Fiche de Paie N° <?php echo $userinfo['id'] ?><br><?php echo date('m');  ?>è Mois</h1>
          <div class="main-infos">
          </div>
           <p class="email" align="left" style="font-size:20px"> <span style="font-weight:bold;">Matricule   :</span><?php echo $userinfo['matricule'] ?></span> </p>
          <p class="email" align="left" style="font-size:20px"><span  style="font-weight:bold;">Ancienneté   :</span><?php echo $userinfo['anciennete'] ?></span> </p>
          <p class="email" align="left" style="font-size:20px"><span style="font-weight:bold;">Nbre Prest.  :</span><?php echo $userinfo['nbre_prest'] ?></p>
          <p class="email" align="left" style="font-size:20px"><span style="font-weight:bold">Salaire Journ:</span><?php echo $userinfo['sal_journ'] ?>$</p>
          <p class="email" align="left" style="font-size:20px"><span style="font-weight:bold">Salaire Brut :</span><?php echo $userinfo['salbrut'] ?>$</p>
          <p class="email" align="left" style="font-size:20px"><span style="font-weight:bold">Soin Médicaux:</span><?php echo $userinfo['soinmed'] ?>$</p>
          <p class="email" align="left" style="font-size:20px"><span style="font-weight:bold">Prime        :</span><?php echo $userinfo['prime'] ?>$</p>
          <p class="email" align="left" style="font-size:20px"><span style="font-weight:bold">Salaire Net  :</span><?php echo $userinfo['salnet'] ?>$</p>
        </div>

        <div class="profile-stats">
          <div class="stat-item">
            <p class="stat"></p>
            
          </div>
          <div class="stat-item">
            <p class="stat"></p>
            
          </div>
        </div>
      </div>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
