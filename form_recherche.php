<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <?php include('import.php')?>
    <title>Fire Emblem - Recherche</title>
  </head>
  <body id="recherche-body" >
    <?php include('header.php');?>
    <main>
      <div class="container-personnages">
      <form action="reponse_recherche.php" id="form" action="index.html" method="get">
        <label for="recherche-jeux" class="form-content form-label">Quel jeux recherchez vous ? </label>
        <input type="text" name="recherche" id="recherche-jeux" class="form-content form-control" list="datalistOptions"  placeholder="Saisir votre recherche" required>
        <datalist id="datalistOptions">
        <option value="Thracia 776">
        <option value="The Sacred Stones">
        <option value="Path of Radiance">
        <option value="Radiant Dawn">
        <option value="Awakening">
        <option value="Fates">
        <option value="Echoes">
        <option value="Three Houses">
        <option value="Engage">
        <option value="Warrior">
        <option value="Heroes">
        </datalist>
        <input id="submit-recherche" class="form-content" type="submit" value="Rechercher">
      </form>
      </div>
    </main>

    <?php include('footer.php'); ?>
  </body>
</html>
