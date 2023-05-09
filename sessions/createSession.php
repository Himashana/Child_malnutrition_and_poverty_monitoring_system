<?php
        include('../site.Master.php'); // Including the site master page.
        createProperties($filePathPrefix = "../", $pageTitle = "Child Registration");
        checkLoginStatus();
    
        include('./Session.php');
    
        $session = new Session();
    
        $chartImages = ":";

        if(isset($_POST['needWeightHeightChart'])){
            $chartImages = $chartImages . "[WeightHeightChart]";
        }

        if (isset($_POST['needWeightLengthChart'])){
            $chartImages = $chartImages . "[WeightLengthChart]";
        }

        if (!isset($_POST['RA01'])){
            $RA01 = "No";
        }else{
            $RA01 = $_POST['RA01'];
        }

        if (!isset($_POST['RA02'])){
            $RA02 = "No";
        }else{
            $RA02 = $_POST['RA02'];
        }

        if (!isset($_POST['RA03'])){
            $RA03 = "No";
        }else{
            $RA03 = $_POST['RA03'];
        }

        if (!isset($_POST['RA04'])){
            $RA04 = "No";
        }else{
            $RA04 = $_POST['RA04'];
        }

        if (!isset($_POST['RA05'])){
            $RA05 = "No";
        }else{
            $RA05 = $_POST['RA05'];
        }

        if (!isset($_POST['RA06'])){
            $RA06 = "No";
        }else{
            $RA06 = $_POST['RA06'];
        }

        if (!isset($_POST['isVitaminA'])){
            $isVitaminA = "No";
        }else{
            $isVitaminA = $_POST['isVitaminA'];
        }

        if (!isset($_POST['isMebendazole'])){
            $isMebendazole = "No";
        }else{
            $isMebendazole = $_POST['isMebendazole'];
        }

        if($_POST['childWeight'] == ""){
            $_POST['childWeight'] = 0;
        }

        if($_POST['childHeight'] == ""){
            $_POST['childHeight'] = 0;
        }

        if($_POST['childLength'] == ""){
            $_POST['childLength'] = 0;
        }
    
        try{
            $result = $session->addSession($_POST['childId'], date('d/m/Y'), $_POST['childWeight'], $_POST['childHeight'], $_POST['childLength'], $_POST['childMUAC'], $chartImages, $RA01, $RA02, $RA03, $RA04, $RA05, $RA06, $isVitaminA, $_POST['noteForVitaminA'], $isMebendazole, $_POST['noteForMebendazole'], $_POST['vaccineType'], $_POST['supplement'], $_POST['supplementAmount'], $_POST['supplementGuidelines'], $_POST['dietaryGuide'], $_POST['nextSessionDate']);
    
            if($result){
                header("Location:viewSessions.php?id=" . $_POST['childId'] . "&alert=success");
            }else{
                header("Location:viewSessions.php?id=" . $_POST['childId'] . "&alert=unsuccess");
            }
        } catch(Exception $e) {
            header("Location:viewSessions.php?id=" . $_POST['childId'] . "&alert=unsuccess");
        }
?>