<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles-gestion.css">
	<title>Ajouter Données</title>
</head>
<body>

<br>
<a class="bouton-gestion" href="table1_gestion.php">Retour au tableau de bord</a>
<br><br>

<hr>
<h1>Gestion de la table personnages</h1>
<hr>

<br>
<h2>Ajoutez un personnage</h2>
<br>

<div class="container-form">
<form class="form-ajout-modif" method="post" enctype="multipart/form-data" action="table1_new_valide.php">
		Photo : <input type="file" name="photo" required /><br>
    Nom:<input type="text" name="nom"><br>
    Affiliation:<input type="text" name="affil"><br>
    Classe:<input type="text" name="classe"><br>
    Arme:<input type="text" name="arme"><br>
		Arme primaire:<input type="text" name="armePrim"><br>
		Arme secondaire:<input type="text" name="armeSecond"><br>
		Jeu: <select name="numjeu">
    	<?php
				$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
				$mabd->query('SET NAMES utf8;');
				$req = "SELECT * FROM  jeux ";
				$resultat = $mabd->query($req);

				foreach ($resultat as $value) {
    		echo '<option value="'.$value['jeux_id'].'">'.$value['jeux_nom'].'</option>';
				}
				?>
</select>
	<br>
	<br>
  <input type="submit" name="envoyer">
</form>
</div>

</tbody>
</table>
</body>
</html>
