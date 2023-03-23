<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <?php include('import.php')?>
    <title>Fire Emblem - Personnages</title>
  </head>
  <body class="listing-body">

    <?php include('header.php'); ?>
    <h1 >Personnages</h1>
    <main>
      <div class="container-personnages">
        <?php
        require 'secretDB.php';
        $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', LUTILISATEUR, LEMOTDEPASSE);
        $mabd->query('SET NAMES utf8;');
        $req = "SELECT * FROM personnages INNER JOIN jeux ON personnages._jeux_id = jeux.jeux_id";
        $resultat = $mabd->query($req);

        foreach ($resultat as $key => $value) {

          echo "<div class='personnage'>";
          echo "<div class='container-image'>";
          echo "<img class='img-carte' src='images/uploads/".$value['personnages_photo']."' alt=''>";
          echo "</div>";
          echo "<div class='nom-affiliation groupe-categorie' >";
          echo "<p>".$value['personnages_nom']."</p><p>".$value['personnages_affiliation']."</p>";
          echo "</div>";

          echo "<div class='classe-arme groupe-categorie'>";
          echo "<div class='classe groupe-categorie'> <img src='images/uploads/classe_perso".$value['personnages_id'].".gif' alt=''> <p>".$value['personnages_classe']."</p> </div>";
          echo "<div class='arme groupe-categorie'> <img class='icon icon-arme-prim' src='images/uploads/".$value['perso_arme_prim']."' alt=''> <img class='icon icon-arme-second' src='images/uploads/".$value['perso_arme_second']."' alt=''> <p>".$value['personnages_arme']."</p> </div>";
          echo "</div>";

          echo "<div class='jeu groupe-categorie'>";
          echo "<img class='couverture-jeu' src='images/uploads/".$value['jeux_jaquette']."' alt=''> <p>".$value['jeux_nom']."</p>";
          echo "</div>";

          echo "<div class='annee-plateforme groupe-categorie'>";
          echo "<img class='picto' src='images/uploads/plateforme_".$value['jeux_plateforme'].".svg' alt=''> <p>(".$value['jeux_année'].")</p>";
          echo "</div>";

          echo "</div>";
        }
        ?>
        </div>

    </main>

    <?php include('footer.php'); ?>
  </body>
</html>
