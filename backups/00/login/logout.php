<?php
    include('../site.Master.php'); // Including the site master page.
    checkLoginStatus();
    createProperties($filePathPrefix = "../", $pageTitle = "Logout");
    menuSetActive(8);
?>

<?php initializePage(); ?>

<?php
    if(isset($_GET['action'])){
        if($_GET['action'] == "clear_session"){
            session_destroy();
            header('Location:../index.php');
        }
    }
?>

<div style="padding:20px; margin-top:200px;">
    <center>
        <div style="border:3px solid black; padding:6px; border-radius:6px; width:250px;">
            <h4>Do you want to sign out?</h4>
            <a href="../index.php"><button class="btn btn-danger">No</button></a>&nbsp;
            <a href="logout.php?action=clear_session"><button class="btn btn-success">Yes</button></a>
        </div>
    </center>
</div>

<?php closePage(); ?>