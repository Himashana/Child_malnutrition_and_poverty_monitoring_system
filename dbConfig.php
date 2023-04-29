<?php
    class DBconnect{
        // Database connection details.
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "child_malnutrition_and_poverty_monitoring_system_db";

        function MakeConn(){
            $dbconnect = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

            if(mysqli_connect_errno()){
                die('Database connection failed');
                // die('Database connection failed : '. mysqli_connect_error());
            }
        }

        function CloseConn(){
            mysqli_close(mysqli_connect($this->servername, $this->username, $this->password, $this->dbname));
        }

        function ExecuteQuery($query){
            $results = mysqli_query(mysqli_connect($this->servername, $this->username, $this->password, $this->dbname), $query);
            return $results;
        }
    }
?>