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
<h2>Table Jeux</h2>
<input type="submit" name="" value="Retour au Back-Office">
</form>
</div>
<br>
<hr>

<br><br>

<a class="bouton-gestion" href="table2_new_form.php">Ajouter un jeu</a>

<br><br><br>

<table border=1>
	<thead>
		<tr><td>id</td><td>photo</td><td>nommage photo</td><td>nom</td><td>plateforme</td><td>année</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
	<tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM jeux ORDER BY jeux_id";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
		echo '<td>'.$value['jeux_id'] . '</td>';
		echo '<td> <img class="couverture-jeu" src="../images/uploads/' . $value['jeux_jaquette'] . '"> </td>';
    echo '<td>' . $value['jeux_jaquette'] . '</td>';
    echo '<td>' . $value['jeux_nom'] . '</td>';
		echo '<td>' . $value['jeux_plateforme'] . '</td>';
		echo '<td>' . $value['jeux_année'] . '</td>';
    echo '<td> <a href="table2_delete.php?num='.$value['jeux_id'].'" > supprimer </a> </td>';
    echo '<td> <a href="table2_update_form.php?num='.$value['jeux_id'].'" > modifier </a> </td>';
    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>
