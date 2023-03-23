<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles-gestion.css">
	<title>Modifier Données</title>
</head>
<body>

<br>
<a class="bouton-gestion" href="table1_gestion.php">Retour au tableau de bord</a>
<br><br>

<hr>
<h1>Gestion de nos données</h1>

<?php
$num = $_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM personnages WHERE personnages_id = ".$num;
$resultat = $mabd->query($req);
$perso = $resultat->fetch();
?>
<hr>
<br>
<h2>Modifiez le personnage </h2>
<br>
<div class="container-form">
<form class="form-ajout-modif" method="POST" enctype="multipart/form-data" action="table1_update_valide.php">
		<input type="hidden" name="num" value="<?php echo $perso['personnages_id']; ?>"><br>
		Photo : <input type="file" name="photo" required /><br />
		Nom:<input type="text" name="nom" value="<?php echo $perso['personnages_nom']; ?>"><br>
    Affiliation:<input type="text" name="affil" value="<?php echo $perso['personnages_affiliation']; ?>"><br>
    Classe:<input type="text" name="classe" value="<?php echo $perso['personnages_classe']; ?>"><br>
    Arme:<input type="text" name="arme" value="<?php echo $perso['personnages_arme']; ?>"><br>
		Arme primaire:<input type="text" name="armePrim" value="<?php echo $perso['perso_arme_prim']; ?>"><br>
		Arme secondaire:<input type="text" name="armeSecond" value="<?php echo $perso['perso_arme_second']; ?>"><br>
    Jeu:
		<select name="numjeu">
    	<?php
			$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
			$mabd->query('SET NAMES utf8;');
			$req = "SELECT * FROM  jeux ";
			$resultat = $mabd->query($req);

			foreach ($resultat as $value) {
  			$selection="";
  			if($perso['_jeux_id'] == $value['jeux_id']) $selection="selected";
  			echo '<option '.$selection . ' value="' .  $value['jeux_id'] . '"> ' .  $value['jeux_nom'] . '</option>';
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
