<?php
    include('dbConfig.php');

    class HealthUser{
        function addHealthUser($fullName, $username, $userPassword, $userPrivileges, $role, $MOHOffice, $phoneNo, $NICNo, $address){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'INSERT INTO HealthUser(fullName, role, MOHOffice, userName, userPassword, userPrivileges, phoneNo, NICNO, address) VALUES ("' . $fullName . '", "' . $role . '", "' . $MOHOffice . '", "' . $username . '", "' . $userPassword . '", ' . $userPrivileges . ', "' . $phoneNo . '", "' . $NICNo . '", "' . $address . '")';

            $results = $dbconnection->ExecuteQuery($query);
            $UserDetails = array();

            $dbconnection->CloseConn();

            if($results == 1){
                                    
                return true;
                
            }else{
                return false;
            }
        }

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

        function GetHealthUserById($id){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT userId, fullName, userPrivileges, role, MOHOffice, phoneNo, NICNO, address FROM HealthUser
                        WHERE userId=' . $id;

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

        function GetHealthUsers(){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT userId, fullName, userPrivileges, role, MOHOffice, phoneNo, NICNO, address, userName FROM HealthUser';

            $results = $dbconnection->ExecuteQuery($query);
            $UserDetails = array();
            $users = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    $UserDetails = array();
                    array_push($UserDetails, $r['userId'], $r['fullName'], $r['userPrivileges'], $r['role'], $r['MOHOffice'], $r['phoneNo'], $r['NICNO'], $r['address'], $r['userName']);
                    array_push($users, $UserDetails);
                }
                
            }

            $dbconnection->CloseConn();

            return $users;
        }
    }
?>