<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles-gestion.css">
  <title>Validation Ajout</title>
</head>
<body>

<br>
<a class="bouton-gestion" href="table1_gestion.php">Retour au tableau de bord</a>
<br><br>

<hr>
<h1>Gestion des données</h1>
<h2>Vous venez d'ajouter un personnage</h2>
<hr>

<br><br>

<?php

$Nom = $_POST['nom'];
$Affiliation = $_POST['affil'];
$Classe = $_POST['classe'];
$Arme = $_POST['arme'];
$Armeprimaire = $_POST['armePrim'];
$Armesecondaire = $_POST['armeSecond'];
$numjeu = $_POST['numjeu'];

$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'roXXpM8t4tfarREh.$');

//vérification du format de l'image téléchargée
			$imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") && ($imageType != "image/jpg") && ($imageType != "image/jpeg") ) {
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

$mabd->query('SET NAMES utf8;');
$req = 'INSERT INTO personnages (personnages_photo, personnages_nom, personnages_affiliation, personnages_classe, personnages_arme, perso_arme_prim, perso_arme_second, _jeux_id) VALUES("'.$nouvelleImage.'","'.$Nom.'","'.$Affiliation.'","'.$Classe.'","'.$Arme.'", "'.$Armeprimaire.'", "'.$Armesecondaire.'", "'.$numjeu.'")';
$resultat = $mabd->query($req);

?>
</tbody>
</table>
</body>
</html>
