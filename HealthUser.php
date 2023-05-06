<?php
    include('dbConfig.php');

    class HealthUser{
        function GetHealthUser($username, $password){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT fullName, userPrivileges FROM HealthUser
                        WHERE userName="' . $username . '" AND userPassword="' . $password . '"';

            $results = $dbconnection->ExecuteQuery($query);
            $UserDetails = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    array_push($UserDetails, $r['fullName'], $r['userPrivileges']);
                }
                
            }

            $dbconnection->CloseConn();

            return $UserDetails;
        }
    }
?>