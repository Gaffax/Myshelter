<!DOCTYPE html>
<html lang="dk">
  <head>
    <meta charset="utf-8">
    <title>Myshelter</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>

    <!--
      Dynamic test page for tables
    -->


    <?php
    require_once('MyClass.php');
    use MyLib\MyClass;
    $obj = new MyClass();
    echo "<p>".$obj->getName()."</p>";
      #Table descriptive name
      $a_tablename = "Herberg Liste";

      #Table header data
      $a_array = array("Institution", "Vej", "Nummer", "Etage", "By", "Land", "Telefon nummer", "Website");




      function test()
      {
        echo "Hello World!!!";
      }

      function test2($something)
      {
        $something();
      }
      $fun = "test";
      //test();
      test2($fun);


    ?>

    <?php



      #Test data
      $location = "Mændenes hjem";
      $road = "Mandevej";
      $number = "1";
      $floor = "1st";
      $door = "tv";
      $city = "Copenhagen";
      $country = "Denmark";
      $phonenumber = "11223344";
      $website = "www.awebsite.dk";
    ?>

    <?php

      $m_array = array(
        array($location, $road, $number, $floor, $door, $city, $country, $phonenumber, $website),
        array($location, $road, $number, $floor, $door, $city, $country, $phonenumber, $website)
      );

    ?>


    <!-- Dynamic table-->
    <table>
      <caption><strong><?php echo $a_tablename ?></strong></caption>
        <?php
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
