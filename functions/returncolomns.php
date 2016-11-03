<?php

  function returncolomns($dbc, $tableid){
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if ($result = mysqli_query($dbc, "SELECT * FROM $tableid")) {

        /* determine number of fields in result set */
        $field_cnt = mysqli_num_fields($result);

        /* close result set */
        mysqli_free_result($result);
    }

    /* close connection */
    //mysqli_close($dbc);

    return $field_cnt;
  }
?>
