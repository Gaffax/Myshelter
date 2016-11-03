<?php
  include '/var/www/html/config/dbconnect.php';

  if($result = $dbc->query("SELECT * FROM TableHostel")){
    echo "test";
      if($result->num_rows){
        echo 'Yay';
        $result->free();
    }
  }
echo "test";


?>
