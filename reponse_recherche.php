<?php

session_start();

if (count($_GET)==0) {
	// Si le le tableau est vide, on affiche le formulaire
  header('location: form_recherche.php');
}

// Vérification des données du formulaire
if (!empty($_GET["recherche"])) {
  $recherche_nettoye = filter_var( $_GET["recherche"] , FILTER_SANITIZE_STRING );
  if($recherche_nettoye==null) { $_SESSION['information'] = '<h4 style="color:red;">*Champ non valide </h4>'; header('location: form_recherche.php'); }
  else {
    $_SESSION['information']=$recherche_nettoye;
    header('location: listing.php');
  }

} else {
  $_SESSION['information'] ='<h4 style="color:red;">*Veuillez compléter ce champ</h4>';
  header('location: form_recherche.php');
}

?>
