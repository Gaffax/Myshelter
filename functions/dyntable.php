<?php
include 'returncolomns.php';
  function dyntable($dbc, $page){
    /* Dynamic table*/
    $numcol = returncolomns($dbc, $page); //Counts the number of coloums

    $idoffset = 1; //Excludes the id coloum from the sql query
    $arrayoffset= 1; //Jumps over not used array number
    $q = "SELECT * FROM $page";

    //Not implemented. the database names is in english for now
          // $sql = "SHOW COLUMNS FROM $page";
          // $result = mysqli_query($dbc,$sql);
          // while($row = mysqli_fetch_array($result)){
          // echo $row['Field']."<br>";
          // }


    echo "<table>
            <caption><strong>Herberg liste</strong></caption>
            <tr>
              <th>Institution</th>
              <th>Vej</th>
              <th>Nummer</th>
              <th>Etage</th>
              <th>Dør</th>
              <th>By</th>
              <th>Land</th>
              <th>Telefon nummer</th>
              <th>Hjemmeside</th>
            </tr>";

    //Dynamic table outputting rows and colomns
    if($result = $dbc->query($q)){
              $rows = $result->fetch_all(MYSQLI_NUM);
              foreach ($rows as $key => $value) {
                echo "<tr>";
                for ($i=0; $i < $numcol-$idoffset; $i++) {
                  echo "<td>".$rows[$key][$i+$arrayoffset]."</td>";
                }
                echo "</tr>";
              }
      } else {
        echo "<p> The data was not retrieved </p>";
      }
    echo "</table>";

    /*Finish up*/
    $result->free();
    mysqli_close($dbc);
  }
?>
