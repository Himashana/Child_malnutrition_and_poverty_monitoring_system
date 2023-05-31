<?php
    include('./site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "./", $pageTitle = "Vew profile");
    checkLoginStatus();
    menuSetActive(9);
?>

<?php initializePage(); ?>

<?php
include('./HealthUser.php');

$healthUser = new HealthUser();

$user = $healthUser->GetHealthUserById($_GET['id']);

if(!empty($user)){
?>

<center>
    <h2>Profile Info</h2><br>

    <div style="border: 3px solid black; width:75%; padding:10px;">
    <br>
    <i class="fa fa-user-circle-o" style="font-size:76px"></i><br><br><br>
    <table>
        <tr>
            <td>ID NO:&nbsp;</td>
            <td>00<?php echo $user[0]; ?>/PK</td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Full name:&nbsp;</td>
            <td><?php echo $user[1]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Role:&nbsp;</td>
            <td><?php echo $user[3]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>MOH office:&nbsp;</td>
            <td><?php echo $user[4]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Phone No:&nbsp;</td>
            <td><?php echo $user[5]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>NIC NO:&nbsp;</td>
            <td><?php echo $user[6]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Address:&nbsp;</td>
            <td><?php echo $user[7]; ?></td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Close" onclick="closeBtn_OnClick();" class="btn btn-default">&nbsp;&nbsp;
    <br><br></div>
</center>
<hr>

<?php } ?>

<script>
    function closeBtn_OnClick(){
        location.replace('./settings.php');
    }
</script>

<?php closePage(); ?>