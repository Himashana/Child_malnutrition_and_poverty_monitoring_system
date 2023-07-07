<?php
        include('./site.Master.php'); // Including the site master page.
        createProperties($filePathPrefix = "./", $pageTitle = "User registration");
        checkLoginStatus();
    
        include('./HealthUser.php');
    
        $healthUser = new HealthUser();
        
        try{
            if($_POST['username'] == "" || $_POST['password'] == ""){
                header("Location:settings.php?alert=unsuccess");
            }else{

                $result = $healthUser->addHealthUser($_POST['fullname'], $_POST['username'], hash('sha256', $_POST['password']), 1, $_POST['userRole'], $_POST['MOH_office'], $_POST['userPhone'], $_POST['userNIC'], $_POST['userAddress']);
        
                if($result){
                    header("Location:settings.php?alert=success");
                }else{
                    header("Location:settings.php?alert=unsuccess");
                }
            }
        } catch(Exception $e) {
            header("Location:settings.php?alert=unsuccess");
        }
?>