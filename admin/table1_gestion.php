<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles-gestion.css">
	<title>Gestion Peronnages</title>
</head>
<body>

<hr>
<h1>Gestion des données</h1>
<div class="container-form">
<form class="form-gestion" action="admin.php" method="">
<h2>Table Personnages</h2>
<input type="submit" name="" value="Retour au Back-Office">
</form>
</div>
<br>
<hr>

<br><br>

<a class="bouton-gestion" href="table1_new_form.php">Ajouter un personnage</a>

<br><br><br>

<table border=1>
	<thead>
		<tr><td>id</td><td>photo</td><td>nommage photo</td><td>nom</td><td>affiliation</td><td>classe</td><td>arme</td><td>arme primaire</td><td>arme secondaire</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM personnages ORDER BY personnages_id";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
		echo '<td>'.$value['personnages_id'] . '</td>';
		echo '<td> <img class="personnage" src="../images/uploads/' . $value['personnages_photo'] . '"> </td>';
    echo '<td>' . $value['personnages_photo'] . '</td>';
    echo '<td>' . $value['personnages_nom'] . '</td>';
		echo '<td>' . $value['personnages_affiliation'] . '</td>';
		echo '<td>' . $value['personnages_classe'] . '</td>';
		echo '<td>' . $value['personnages_arme'] . '</td>';
		echo '<td>' . $value['perso_arme_prim'] . '</td>';
		echo '<td>' . $value['perso_arme_second'] . '</td>';
    echo '<td> <a href="table1_delete.php?num='.$value['personnages_id'].'" > supprimer </a> </td>';
    echo '<td> <a href="table1_update_form.php?num='.$value['personnages_id'].'" > modifier </a> </td>';
    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>
