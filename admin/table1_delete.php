<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles-gestion.css">
	<title>Supprimer Données</title>
</head>
<body>

<br>
<a class="bouton-gestion" href="table1_gestion.php">Retour au tableau de bord</a>
<br><br>

<hr>
<h1>Gestion des données</h1>
<hr>

<br><br>

<?php
// recupérer dans l'url l'id de l'album à supprimer
$personnages_id=$_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
$mabd->query('SET NAMES utf8;');

// tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
$req = 'DELETE FROM personnages WHERE personnages_id = '.$personnages_id;

$resultat = $mabd->query($req);

echo '<h2>vous venez de supprimer le personnage numéro '.$personnages_id.'</h2>';
?>

</body>
</html>
