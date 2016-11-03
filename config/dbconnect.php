<?php
    function dbconnect(){
      // Remember to change variables when deploying
      $server = 'localhost';
      $root = 'root';
      $password = 'mben';
      $database = 'MyshelterDB';

      //Database connect object
      $dbc = mysqli_connect($server, $root, $password, $database)
                            OR die('Alert'.mysqli_connect_error());
      if (!$dbc) {
        die('Could not connect: ' . mysqli_error());

      }
      return $dbc;
    }
?>
