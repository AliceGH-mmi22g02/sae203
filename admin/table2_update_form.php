<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles-gestion.css">
	<title>Modifier Données</title>
</head>
<body>

<br>
<a class="bouton-gestion" href="table2_gestion.php">Retour au tableau de bord</a>
<br><br>

<hr>
<h1>Gestion des données</h1>

<?php
$num = $_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM jeux WHERE jeux_id = ".$num;
$resultat = $mabd->query($req);
$perso = $resultat->fetch();
?>
<hr>
<br>
<h2>Modifiez le jeu </h2>
<br>
<div class="container-form">
<form class="form-ajout-modif" method="POST" enctype="multipart/form-data" action="table2_update_valide.php">
		<input type="hidden" name="num" value="<?php echo $perso['jeux_id']; ?>"><br>
		Jaquette: <input type="file" name="photo" required /><br />
		Nom:<input type="text" name="nom" value="<?php echo $perso['jeux_nom']; ?>"><br>
    Plateforme:<input type="text" name="plat" value="<?php echo $perso['jeux_plateforme']; ?>"><br>
    Année:<input type="text" name="an" value="<?php echo $perso['jeux_année']; ?>"><br>
	<br>
  <input type="submit" name="envoyer">
</form>
</div>

</tbody>
</table>
</body>
</html>
