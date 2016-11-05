    <?php
      include '/var/www/html/config/dbconnect.php';

      $dbc = dbconnect();

      // Escape user inputs for security
      $institution = mysqli_real_escape_string($dbc, $_POST['institution']);
      $roadname = mysqli_real_escape_string($dbc, $_POST['roadname']);
      $housenumber = mysqli_real_escape_string($dbc, $_POST['housenumber']);

      $floor = mysqli_real_escape_string($dbc, $_POST['floor']);
      $door = mysqli_real_escape_string($dbc, $_POST['door']);
      $city = mysqli_real_escape_string($dbc, $_POST['city']);

      $country = mysqli_real_escape_string($dbc, $_POST['country']);
      $cellphone = mysqli_real_escape_string($dbc, $_POST['cellphone']);
      $website = mysqli_real_escape_string($dbc, $_POST['website']);

      // attempt insert query execution
      $sql = "INSERT INTO Hostel (institution, roadname, housenumber, floor, door, city, country, cellphone, website) VALUES ('$institution', '$roadname', '$housenumber', '$floor', '$door', '$city', '$country', '$cellphone', '$website')";
      if(mysqli_query($dbc, $sql)){
          echo "Records added successfully.";
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbc);
      }

      // close connection
      mysqli_close($link);

      /* Redirect browser */
      header("Location: ../listinstitution.php");

      /* Make sure that code below does not get executed when we redirect. */
      exit;
