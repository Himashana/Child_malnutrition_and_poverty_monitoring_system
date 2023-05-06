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

    $dateOfBirth = $_POST['dateOfBirth'];

    $result = $child->addChild($_POST['CHDRNo'], $_POST['firstName'], $_POST['lastName'], $_POST['coreGiverName'], $_POST['coreGiverNIC'], $_POST['coreGiverPhone'], $_POST['childAddress'], $dateOfBirth, $_POST['childGender'], $_POST['childWeight'], $_POST['childHeight'], $_POST['childLength'], $isAnyDisease, $_POST['eligibleFamilyNo'], $_POST['childEthinticity']);

    if($result){
        header("Location:viewChilds.php?alert=success");
    }else{
        header("Location:viewChilds.php?alert=unsuccess");
    }
?>