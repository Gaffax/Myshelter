<?php
  // Error messages goes to the top, just to be sure.
  include "errormessages.php";

  include "dbconnect.php";
/*---------------------------------------------------*/
    ob_start(); //Prepares entire page, before sending page to class_implements

    DEFINE ('D_TEMPLATE', 'template');
    DEFINE ('D_LANGUAGE', 'eng');
    DEFINE ('D_INSERT','insert');

    $dbc = dbconnect(); //Connects to database
?>
