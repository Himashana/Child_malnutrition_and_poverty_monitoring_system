<?php
    include('dbConfig.php');

    class HealthUser{
        function GetHealthUser($username, $password){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT userId, fullName, userPrivileges, role, MOHOffice, phoneNo, NICNO, address FROM HealthUser
                        WHERE userName="' . $username . '" AND userPassword="' . $password . '"';

            $results = $dbconnection->ExecuteQuery($query);
            $UserDetails = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    array_push($UserDetails, $r['userId'], $r['fullName'], $r['userPrivileges'], $r['role'], $r['MOHOffice'], $r['phoneNo'], $r['NICNO'], $r['address']);
                }
                
            }

            $dbconnection->CloseConn();

            return $UserDetails;
        }
    }
?>