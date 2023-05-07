<?php
    include('../dbConfig.php');

    class Inventory{
        function addInventory($inventoryType, $inventoryAmount, $expiryDate){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'INSERT INTO Inventory(inventoryType, inventoryAmount, expiryDate, actionDate) VALUES ("' . $inventoryType . '", ' . $inventoryAmount . ', "' . $expiryDate . '", "'. date('d/m/Y') . '")';

            $results = $dbconnection->ExecuteQuery($query);

            $dbconnection->CloseConn();

            if($results == 1){
                                    
                return true;
                
            }else{
                return false;
            }
        }

        function updateInventory($inventoryId, $inventoryAmount, $expiryDate){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'UPDATE Inventory SET inventoryAmount=' . $inventoryAmount . ', expiryDate="' . $expiryDate . '", actionDate="'. date('d/m/Y') . '" WHERE inventoryId=' . $inventoryId;

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
            
            $query = 'SELECT inventoryId, inventoryType, inventoryAmount, expiryDate, actionDate FROM Inventory';

            $results = $dbconnection->ExecuteQuery($query);
            $inventoryDetails = array();
            $inventories = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    $inventoryDetails = array();
                    array_push($inventoryDetails, $r['inventoryId'], $r['inventoryType'], $r['inventoryAmount'], $r['expiryDate'], $r['actionDate']);
                    array_push($inventories, $inventoryDetails);
                }
                
            }

            $dbconnection->CloseConn();

            return $inventories;
        }

        function GetInventory($id){
            $dbconnection = new DBconnect();
            $dbconnection->MakeConn();
            
            $query = 'SELECT inventoryId, inventoryType, inventoryAmount, expiryDate, actionDate FROM Inventory WHERE inventoryId=' . $id;

            $results = $dbconnection->ExecuteQuery($query);
            $inventoryDetails = array();

            if($results){
                                    
                while($r = mysqli_fetch_assoc($results)){
                    array_push($inventoryDetails, $r['inventoryId'], $r['inventoryType'], $r['inventoryAmount'], $r['expiryDate'], $r['actionDate']);
                }
                
            }

            $dbconnection->CloseConn();

            return $inventoryDetails;
        }
    }
?>