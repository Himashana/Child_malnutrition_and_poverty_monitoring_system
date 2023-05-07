<?php
    include('../dbConfig.php');

    class Inventory{
        function addInventory($inventoryType, $inventoryAmount, $expiryDate){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'INSERT INTO Inventory(inventoryType, inventoryAmount, expiryDate) VALUES ("' . $inventoryType . '", ' . $inventoryAmount . ', "' . $expiryDate . '")';

            $results = $dbconnection->ExecuteQuery($query);

            $dbconnection->CloseConn();

            if($results == 1){
                                    
                return true;
                
            }else{
                return false;
            }
        }

        function GetInventories(){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT inventoryId, inventoryType, inventoryAmount, expiryDate FROM Inventory';

            $results = $dbconnection->ExecuteQuery($query);
            $inventoryDetails = array();
            $inventories = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    $inventoryDetails = array();
                    array_push($inventoryDetails, $r['inventoryId'], $r['inventoryType'], $r['inventoryAmount'], $r['expiryDate']);
                    array_push($inventories, $inventoryDetails);
                }
                
            }

            $dbconnection->CloseConn();

            return $inventories;
        }
    }
?>