<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles-gestion.css">
	<title>Supprimer Données</title>
</head>
<body>

<br>
<a class="bouton-gestion" href="table2_gestion.php">Retour au tableau de bord</a>
<br><br>

<hr>
<h1>Gestion des données</h1>
<hr>

<br><br>

<?php
// recupérer dans l'url l'id de l'album à supprimer
$jeux_id=$_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
$mabd->query('SET NAMES utf8;');

// tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
$req = 'DELETE FROM jeux WHERE jeux_id = '.$jeux_id;

$resultat = $mabd->query($req);

echo '<h2>vous venez de supprimer le jeu numéro '.$jeux_id.'</h2>';
?>

</body>
</html>
