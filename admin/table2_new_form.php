<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles-gestion.css">
	<title>Ajouter Données</title>
</head>
<body>

<br>
<a class="bouton-gestion" href="table2_gestion.php">Retour au tableau de bord</a>
<br><br>

<hr>
<h1>Gestion de la table Jeux</h1>
<hr>

<br>
<h2>Ajoutez un jeu</h2>
<br>

<div class="container-form">
<form class="form-ajout-modif" method="post" enctype="multipart/form-data" action="table2_new_valide.php">
		Jaquette : <input type="file" name="photo" required /><br>
    Nom:<input type="text" name="nom"><br>
    Plateforme:<input type="text" name="plat"><br>
    Année:<input type="text" name="an"><br>
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
