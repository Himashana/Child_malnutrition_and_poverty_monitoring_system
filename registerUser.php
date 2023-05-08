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

                $result = $healthUser->addHealthUser($_POST['fullname'], $_POST['username'], $_POST['password']);
        
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