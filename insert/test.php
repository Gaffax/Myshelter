<?php
include '/var/www/html/config/dbconnect.php';

// Escape user inputs for security
$test = "waaaaarg";

//mysqli_real_escape_string($dbc, $_POST['test']);

if($insert = $dbc->query("
  INSERT INTO testtable (id, test)
  VALUES (null, '$test')")){
    echo $dbc->affected_rows;
  }


// attempt insert query execution
//$sql = "INSERT INTO testtable (test) VALUES ('$test')";
// if(mysqli_query($dbc, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbc);
// }

// close connection
mysqli_close($dbc);
?>
