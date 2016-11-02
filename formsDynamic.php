
<?php
  #Test data
  $size = "20";
  $lenght = "25";
?>

<?php
  $m_array = array(
    array($tableName = "name", $danishName = "Name", $size, $lenght),
    array($tableName = "number", $danishName = "Nummer", $size, $lenght),
    array($tableName = "floor", $danishName = "Etage", $size, $lenght),
    array($tableName = "door", $danishName = "Dør", $size, $lenght)
  );
  // Temporary test data include
?>


<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Form test</title>
      <link rel="stylesheet" href="/css/master.css" media="screen" title="no title">
    </head>
    <body>

    <!-- Dynamic table-->
      <form class="input-form" action="index.html" method="post">
        <fieldset class="add_institution">
          <legend>Tilføj ny Institution</legend>
            <?php
              foreach($m_array as $value){
                echo "<p><label for=\"$value[0]\">$value[1]</label><input type=\"text\" name=\"$value[0]\" size=\"$value[2]\" lenght=\"$value[3]\" id=\"$value[0]\"><br></p>";
              }
            ?>
        </fieldset>

  <?php include "TestData/allowedOptions.php"
  // Temporary test data include
  ?>


        <fieldset>
          <legend>Tilladt</legend>
            <?php
              echo "<p>";
                foreach($m_array as $value){
                  echo "<label for=\"$tableName\">$danishName</label><input type=\"checkbox\" name=\"$tableName\" value=\"$tableName\" />";
                }
              echo "<p>";
            ?>
          <p>
            <label for="dogs">Hunde</label><input type="checkbox" name="dogs" value="dogs" />
            <label for="Alcohol">Alcohol</label><input type="checkbox" name="alchol" value="alchol" />
            <label for="men">Mænd</label><input type="checkbox" name="men" value="men" />
            <label for="women">Kvinder</label><input type="checkbox" name="women" value="women" />
          </p>
        </fieldset>

          <p><input type="reset" name="name" value="Reset"> <input type="submit" name="submit" value="Submit"></p>
      </form>
    </body>
  </html>
