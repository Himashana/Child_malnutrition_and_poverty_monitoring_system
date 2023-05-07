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

        function getSessions(){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT sessionid, childId, startDate, childWeight, childHeight, childLength, childMUAC, chartImages, RA01, RA02, RA03, RA04, RA05, RA06, vitaminA, vitaminA_notes, mebendazole, mebendazole_notes, vaccine, supplement, supplementPackets, supplementTreatmentGuid, dietaryGuid, nextSessionDate FROM Session';

            $results = $dbconnection->ExecuteQuery($query);
            $sessionDetails = array();
            $sessions = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    $sessionDetails = array();
                    array_push($sessionDetails, $r['sessionid'], $r['childId'], $r['startDate'], $r['childWeight'], $r['childHeight'], $r['childLength'], $r['childMUAC'], $r['chartImages'], $r['RA01'], $r['RA02'], $r['RA03'], $r['RA04'], $r['RA05'], $r['RA06'], $r['vitaminA'], $r['vitaminA_notes'], $r['mebendazole'], $r['mebendazole_notes'], $r['vaccine'], $r['supplement'], $r['supplementPackets'], $r['supplementTreatmentGuid'], $r['dietaryGuid'], $r['nextSessionDate']);
                    array_push($sessions, $sessionDetails);
                }
                
            }

            $dbconnection->CloseConn();

            return $sessions;
        }
    }
?>