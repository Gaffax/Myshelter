<?php
  include '/var/www/html/config/dbconnect.php';

  $dbc = dbconnect();

  // Escape user inputs for security
  $name = mysqli_real_escape_string($dbc, $_POST['name']);
  $description = mysqli_real_escape_string($dbc, $_POST['description']);

  // attempt insert query execution
  $sql = "INSERT INTO Allowed (name, description) VALUES ('$name', '$description')";
  if(mysqli_query($dbc, $sql)){
      echo "Records added successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbc);
  }

  // close connection
  mysqli_close($link);

  /* Redirect browser */
  header("Location: ../insertallowedoptions.php");

  /* Make sure that code below does not get executed when we redirect. */
  exit;
