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
      $result = $dbc->query($q);
      while($row = $result->fetch_assoc()){
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
