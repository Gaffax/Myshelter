<?php
    class DatabaseConnection extends mysqli{
      // Remember to change variables when deploying
        private $server;
        private $user;
        private $password;
        private $database;

        private $dbc;

      // Dev connection
      public function __construct(){
        $this->server   = "localhost";
        $this->user     = "root";
        $this->password = "mben";
        $this->database = "MyshelterDB";

        //Create mysqli connection
        $this->dbc = mysqli_connect($this->server, $this->user, $this->password, $this->database)
        OR die('Alert'.mysqli_connect_error());
      }

      // Deploy connection
      public function create($server, $user, $password, $database){
        $this->server=$server;
        $this->user=$user;
        $this->password=$password;
        $this->database=$database;

        //Create mysqli connection
        $this->dbc = mysqli_connect($this->server, $this->user, $this->password, $this->database)
        OR die('Alert'.mysqli_connect_error());
      }

      //Get connection for accessing database
      public function getdbc(){
        return $this->dbc;
      }
    }
?>
