<?php
    include('../site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "../", $pageTitle = "New reports");
    checkLoginStatus();
    menuSetActive(7);
?>

<?php initializePage(); ?>

<center>
    <h2>Profile Info</h2><br>

    <div style="border: 3px solid black; width:75%; padding:10px;">
    <br>
    <i class="fa fa-user-circle-o" style="font-size:76px"></i><br><br><br>
    <table>
        <tr>
            <td>ID NO:&nbsp;</td>
            <td>00<?php echo $_SESSION['healthUserId']; ?>/PK</td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Full name:&nbsp;</td>
            <td><?php echo $_SESSION['healthUserFullName']; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Role:&nbsp;</td>
            <td><?php echo $_SESSION['healthUserRole']; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>MOH office:&nbsp;</td>
            <td><?php echo $_SESSION['healthUserMOHOffice']; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Phone No:&nbsp;</td>
            <td><?php echo $_SESSION['healthUserphoneNo']; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>NIC NO:&nbsp;</td>
            <td><?php echo $_SESSION['healthUserNICNO']; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Address:&nbsp;</td>
            <td><?php echo $_SESSION['healthUserAddress']; ?></td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Close" onclick="closeBtn_OnClick();" class="btn btn-default">&nbsp;&nbsp;
    <br><br></div>
</center>
<hr>

<script>
    function closeBtn_OnClick(){
        location.replace('../index.php');
    }
</script>

<?php closePage(); ?>