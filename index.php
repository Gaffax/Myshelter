<?php include 'TestData/indexTestData.php'; ?>

<!DOCTYPE html>
<html lang="dk">
  <head>
    <meta charset="utf-8">
    <title>Myshelter</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <a href="/formsDynamic.php">Tilføj nyt herberg</a>
    <!-- Dynamic table-->
    <table>
      <caption>
        <strong>
          <?php echo $a_tablename ?>
        </strong>
      </caption>
      <?php
        //Table header
        echo "<tr>";
          for($i = 0; $i < count($hm_array[0]); $i++){
            echo "<th>".$hm_array[0][$i]."</th>";
          }
        echo "</tr>";

        //Table info rows
          foreach($m_array as $value){
            echo "<tr>";
            $n = count($value);
            for($i = 0; $i < $n; $i++){
              echo "<td>$value[$i]</td>\r\n";
            }
            echo "</tr>";
          }
      ?>
    </table>
  </body>
</html>
