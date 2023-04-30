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
    }
?>