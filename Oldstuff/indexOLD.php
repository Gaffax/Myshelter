<?php
  #includes
  include 'config/setup.php';

  # functions:
  include 'functions/dyntable.php';

  $dbc = dbconnect();
  $page = "Hostel";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Myshelter | <?php echo $page." List"; ?></title>
    <link rel="stylesheet" href="/css/master.css">
    <script src="script.js"></script>
  </head>
  <body>
    <!-- Dynamic table -->
    <?php dyntable($dbc, $page); ?>
  </body>
</html>

<?php include 'config/setup_end.php'; ?>
