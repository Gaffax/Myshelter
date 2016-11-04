<?php

    //Native includes
    include 'config/setup.php';
    include 'functions/dyntable.php';
    include 'config/DatabaseConnection.php';

    //Page variables
    $page = "Hostel";
    $dbc = new DatabaseConnection('localhost', 'root', 'mben', 'MyshelterDB');

 ?>

<!DOCTYPE html>
<html lang=<?php echo D_LANGUAGE; ?>>
  <head>
      <?php include D_TEMPLATE.'/htmlmetadata.php'; ?>

      <title>Myshelter | Test site</title>

      <!--Css master page-->
      <?php include 'config/setupcss.php'; ?>
  </head>

  <body>
    <?php
      $q = "SELECT * FROM $page";
      $result = $dbc->getdbc()->query($q);

      while($row = mysqli_fetch_assoc($result)){
          foreach($row as $cname => $cvalue){
              print "$cname: $cvalue\t";
          }
          print "\r\n";
      }
    ?>
  </body>
</html>

<!-- Finishes the page. Must be the last item in the page -->
<?php include 'config/setup_end.php'; ?>
