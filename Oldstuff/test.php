<!DOCTYPE html>
<html lang="dk">
<?php
include 'config/dbconnect.php';
//$dbc = mysqli_connect('localhost', 'root', 'mben', 'MyshelterDB') OR die('Alert'.mysqli_connect_error());

#include 'config/setup.php';
  if($result = $dbc->query("SELECT * FROM TableHostel")){
    if($count = $result->num_rows){

        $rows = $result->fetch_all(MYSQLI_NUM);

        for ($i=0; $i < 9; $i++) {
          echo $rows[0][$i];
        }

        $result->free();

    }
  }
?>
</html>
