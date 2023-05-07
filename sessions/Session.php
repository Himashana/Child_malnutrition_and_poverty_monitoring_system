<?php
    include('../dbConfig.php');

    class Session{
        function addSession($childId, $startDate, $childWeight, $childHeight, $childLength, $childMUAC, $chartImages, $RA01, $RA02, $RA03, $RA04, $RA05, $RA06, $vitaminA, $vitaminA_notes, $mebendazole, $mebendazole_notes, $vaccine, $supplement, $supplementPackets, $supplementTreatmentGuid, $dietaryGuid, $nextSessionDate){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'INSERT INTO Session(childId, startDate, childWeight, childHeight, childLength, childMUAC, chartImages, RA01, RA02, RA03, RA04, RA05, RA06, vitaminA, vitaminA_notes, mebendazole, mebendazole_notes, vaccine, supplement, supplementPackets, supplementTreatmentGuid, dietaryGuid, nextSessionDate) VALUES (' . $childId . ', "' . $startDate . '", ' . $childWeight . ', ' . $childHeight . ', ' . $childLength . ', ' . $childMUAC . ', "' . $chartImages . '", "' . $RA01 . '", "' . $RA02 . '", "' . $RA03 . '", "' . $RA04 . '", "' . $RA05 . '", "' . $RA06 . '", "' . $vitaminA . '", "' . $vitaminA_notes . '", "' . $mebendazole . '", "' . $mebendazole_notes . '", "' . $vaccine . '", "' . $supplement . '", ' . $supplementPackets . ', "' . $supplementTreatmentGuid . '", "' . $dietaryGuid . '", "' . $nextSessionDate . '")';

            $results = $dbconnection->ExecuteQuery($query);

            $dbconnection->CloseConn();

            if($results == 1){
                                    
                return true;
                
            }else{
                return false;
            }
        }
    }
?>