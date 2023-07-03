<?php
        include('../site.Master.php'); // Including the site master page.
        createProperties($filePathPrefix = "../", $pageTitle = "Supplement resource management");
        checkLoginStatus();
    
        include('./Inventory.php');
    
        $inventory = new Inventory();
        
        try{
            if(!isset($_GET['id'])){
                header("Location:viewInventory.php?alert=unsuccess");
            }else{

                $result = $inventory->deleteInventory($_GET['id']);
        
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