<?php
    include('../dbConfig.php');

    class Child{
        function addChild($CHDRNo, $firstName, $lastName, $coreGiverName, $coreGiverNIC, $coreGiverPhone, $childAddress, $dateOfBirth, $childGender, $childWeight, $childHeight, $childLength, $isAnyDisease, $eligibleFamilyNo, $childEthinticity){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'INSERT INTO Child(CHDRNo, firstname, lastname, coreGiverName, coreGiverNIC, coreGiverPhone, address, dateofBirth, gender, weight, height, length, isAnyDeseaseOrCompilation, familynumber, ethinticity) VALUES (' . $CHDRNo . ', "' . $firstName . '", "' . $lastName . '", "' . $coreGiverName . '", "' . $coreGiverNIC . '", ' . $coreGiverPhone . ', "' . $childAddress . '", "' . $dateOfBirth . '", "' . $childGender . '", ' . $childWeight . ', ' . $childHeight . ', ' . $childLength . ', "' . $isAnyDisease . '", ' . $eligibleFamilyNo . ', "' . $childEthinticity . '")';

            $results = $dbconnection->ExecuteQuery($query);
            $UserDetails = array();

            $dbconnection->CloseConn();

            if($results == 1){
                                    
                return true;
                
            }else{
                return false;
            }
        }

        function GetChilds(){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT childId, CHDRNo, firstname, lastname, coreGiverName, coreGiverNIC, coreGiverPhone, address, dateofBirth, gender, weight, height, length, isAnyDeseaseOrCompilation, familynumber, ethinticity FROM Child';

            $results = $dbconnection->ExecuteQuery($query);
            $childDetails = array();
            $childs = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    $childDetails = array();
                    array_push($childDetails, $r['childId'], $r['CHDRNo'], $r['firstname'], $r['lastname'], $r['coreGiverName'], $r['coreGiverNIC'], $r['coreGiverPhone'], $r['address'], $r['dateofBirth'], $r['gender'], $r['weight'], $r['height'], $r['length'], $r['isAnyDeseaseOrCompilation'], $r['familynumber'], $r['ethinticity']);
                    array_push($childs, $childDetails);
                }
                
            }

            $dbconnection->CloseConn();

            return $childs;
        }

        function GetChild($id){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT childId, CHDRNo, firstname, lastname, coreGiverName, coreGiverNIC, coreGiverPhone, address, dateofBirth, gender, weight, height, length, isAnyDeseaseOrCompilation, familynumber, ethinticity FROM Child WHERE childId=' . $id;

            $results = $dbconnection->ExecuteQuery($query);
            $childDetails = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    array_push($childDetails, $r['childId'], $r['CHDRNo'], $r['firstname'], $r['lastname'], $r['coreGiverName'], $r['coreGiverNIC'], $r['coreGiverPhone'], $r['address'], $r['dateofBirth'], $r['gender'], $r['weight'], $r['height'], $r['length'], $r['isAnyDeseaseOrCompilation'], $r['familynumber'], $r['ethinticity']);
                }
                
            }

            $dbconnection->CloseConn();

            return $childDetails;
        }
    }
?>