<!-- Test data -->
<?php
      $m_array = array(
        array($tableName = "dogs", $danishName = "Hunde"),
        array($tableName = "alcohol", $danishName = "Alcohol"),
        array($tableName = "men", $danishName = "Mænd"),
        array($tableName = "women", $danishName = "Kvinder"),
        array($tableName = "men", $danishName = "Mænd"),
        array($tableName = "women", $danishName = "Kvinder")
      );
 ?>

<?php
  $lines = file_get_contents("allowedOptions.txt");

  $m_array = array();

  $words = preg_split('/[\s]+/', $lines, -1, PREG_SPLIT_NO_EMPTY);
  //print_r($words);

    for($i = 0; $i < count($words)-1; $i = $i + 2){
      // echo $i;
      // echo $words[$i];

      $n = $i;
      $t_array = array(
        array ($words[$n],$words[$n + 1])
      );
      $n = $n + 2;
      // $n = $i;
      // $an_array[$words[$n]][$words[$n+1]];
      // echo  $words[$n+1];
    }

    echo $t_array[0][1];
 ?>
 <!-- Test data end-->
