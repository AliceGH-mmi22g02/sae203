<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styles.css">
    <?php include('../import.php')?>
    <title>Fire Emblem - Back-Office</title>
  </head>
  <body id="admin-body">
    <?php include('header.php'); ?>
    <main>
      <h1 class="text-white">Back-Office</h1>
      <br>
      <br>
      <div id="container-form">

      <form id="form_backoffice_table1" class="form_backoffice" action="table1_gestion.php" method="">
        <p>Table Personnages</p>
        <input type="submit" name="" value="Gestion">
      </form>

      <form id="form_backoffice_table2" class="form_backoffice" action="table2_gestion.php" method="">
        <p>Table Jeux</p>
        <input type="submit" name="" value="Gestion">
      </form>
      </div>
    </main>

    <?php include('../footer.php'); ?>
  </body>
</html>
