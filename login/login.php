<?php
    session_start();

    include('../HealthUser.php');

    $healthUser = new HealthUser();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $UserDetails = $healthUser->GetHealthUser($username, hash('sha256', $password));

    if(!empty($UserDetails)){
        $_SESSION['username'] = $username;
        $_SESSION['healthUserFullName'] = $UserDetails[0];
        $_SESSION['healthUserPrivileges'] = $UserDetails[1];
        header("Location:../");
    }else{
        header("Location:index.php?error=Login_Error");
    }
?>