<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles-gestion.css">
    <title>Validation Modifications</title>
</head>
<body>

<br>
<a class="bouton-gestion" href="table2_gestion.php">Retour au tableau de bord</a>
<br><br>

<hr>
<h1>Gestion des données</h1>
<h2>vous venez de modifier le jeu</h2>
<hr>

<br><br>

<?php
$num = $_POST['num'];
$Nom = $_POST['nom'];
$Plateforme = $_POST['plat'];
$Année = $_POST['an'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');
$mabd->query('SET NAMES utf8;');

$imageName=$_FILES["photo"]["name"];

//vérification du format de l'image téléchargée
			$imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }

    		//creation d'un nouveau nom pour cette image téléchargée
            // pour éviter d'avoir 2 fichiers avec le même nom
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];


    		// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"],
	            "../images/uploads/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
          }

if (empty($_FILES["photo"]["name"])) {
  $req = 'UPDATE jeux SET jeux_nom="'.$Nom.'", jeux_plateforme="'.$Plateforme.'", jeux_année="'.$Année.'" WHERE jeux_id="'.$num.'"';
}
else{
  $req = 'UPDATE jeux SET jeux_jaquette="'.$nouvelleImage.'", jeux_nom="'.$Nom.'", jeux_plateforme="'.$Plateforme.'", jeux_année="'.$Année.'" WHERE jeux_id="'.$num.'"';
}

$resultat = $mabd->query($req);

?>
</tbody>
</table>
</body>
</html>
