<?php
    session_start();

    include('../HealthUser.php');

    $healthUser = new HealthUser();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $UserDetails = $healthUser->GetHealthUser($username, hash('sha256', $password));

    if(!empty($UserDetails)){
        $_SESSION['username'] = $username;
        $_SESSION['healthUserId'] = $UserDetails[0];
        $_SESSION['healthUserFullName'] = $UserDetails[1];
        $_SESSION['healthUserPrivileges'] = $UserDetails[2];
        $_SESSION['healthUserRole'] = $UserDetails[3];
        $_SESSION['healthUserMOHOffice'] = $UserDetails[4];
        header("Location:../");
    }else{
        header("Location:index.php?error=Login_Error");
    }
?>