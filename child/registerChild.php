<?php
    include('../site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "../", $pageTitle = "Child Registration");
    checkLoginStatus();

    include('./Child.php');

    $child = new Child();

    if (!isset($_POST['isAnyDisease'])){
        $isAnyDisease = "No";
    }else{
        $isAnyDisease = $_POST['isAnyDisease'];
    }

    if ($_POST['CHDRNo'] == ""){
        $_POST['CHDRNo'] = 0;
    }

    if ($_POST['coreGiverPhone'] == ""){
        $_POST['coreGiverPhone'] = 0;
    }

    if ($_POST['childWeight'] == ""){
        $_POST['childWeight'] = 0;
    }

    if ($_POST['childHeight'] == ""){
        $_POST['childHeight'] = 0;
    }

    if ($_POST['childLength'] == ""){
        $_POST['childLength'] = 0;
    }

    if ($_POST['eligibleFamilyNo'] == ""){
        $_POST['eligibleFamilyNo'] = 0;
    }


    try{
        $dateOfBirth = $_POST['dateOfBirth'];

        $result = $child->addChild($_POST['CHDRNo'], $_POST['firstName'], $_POST['lastName'], $_POST['coreGiverName'], $_POST['coreGiverNIC'], $_POST['coreGiverPhone'], $_POST['childAddress'], $dateOfBirth, $_POST['childGender'], $_POST['childWeight'], $_POST['childHeight'], $_POST['childLength'], $isAnyDisease, $_POST['eligibleFamilyNo'], $_POST['childEthinticity']);

        if($result){
            header("Location:viewChilds.php?alert=success");
        }else{
            header("Location:viewChilds.php?alert=unsuccess");
        }
    } catch(Exception $e) {
        header("Location:viewChilds.php?alert=unsuccess");
    }
?>