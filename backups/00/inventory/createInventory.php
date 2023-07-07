<?php
        include('../site.Master.php'); // Including the site master page.
        createProperties($filePathPrefix = "../", $pageTitle = "Supplement resource management");
        checkLoginStatus();
    
        include('./Inventory.php');
    
        $inventory = new Inventory();
        
        try{
            if($_POST['inventoryType'] == "" || $_POST['inventoryAmount'] == "" || $_POST['expiryDate'] == ""){
                header("Location:viewInventory.php?alert=unsuccess");
            }else{

                $result = $inventory->addInventory($_POST['inventoryType'], $_POST['inventoryAmount'], $_POST['expiryDate']);
        
                if($result){
                    header("Location:viewInventory.php?alert=success");
                }else{
                    header("Location:viewInventory.php?alert=unsuccess");
                }
            }
        } catch(Exception $e) {
            header("Location:viewInventory.php?alert=unsuccess");
        }
?>