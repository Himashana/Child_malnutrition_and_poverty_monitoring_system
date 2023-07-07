<?php
    include('./site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "./", $pageTitle = "User Registration");
    checkLoginStatus();
    menuSetActive(9);
?>

<?php initializePage(); ?>

<center>
    <form action="registerUser.php" id="form" method="POST" style="overflow-y:auto; height:90vh" onsubmit="event.preventDefault();">
    <h2>User registration form</h2><br>

    <table>
        <tr><td colspan="2"><center><u><h4>User details</h4></u></center></td></tr>
        <!-- <tr>
            <td>User ID:&nbsp;</td>
            <td><input type="text" name="userId" id="userId" placeholder="Enter user Id" class="form-control" required></td>
        </tr><tr><td><br></td></tr> -->
        <tr>
            <td>User name:&nbsp;</td>
            <td><input type="text" name="username" id="username" placeholder="Enter username" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Password:&nbsp;</td>
            <td><input type="password" name="password" id="password" placeholder="Enter password" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Full name:&nbsp;</td>
            <td><input type="text" name="fullname" id="fullname" placeholder="Enter full name" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Address:&nbsp;</td>
            <td><textarea name="userAddress" id="userAddress" placeholder="Enter address - city/lane/..." class="form-control" rows="3" required></textarea></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Phone No:&nbsp;</td>
            <td><input type="text" name="userPhone" id="userPhone" placeholder="Enter Telephone/Mobile No" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>NIC No:&nbsp;</td>
            <td><input type="text" name="userNIC" id="userNIC" placeholder="Enter NIC No" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Select User Role:&nbsp;</td>
            <td>
                <select type="text" name="userRole" id="userRole" placeholder="Enter the user role" class="form-control">
                    <option value="PHM">PHM</option>
                    <option value="MOH">MOH</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Select MOH Office:&nbsp;</td>
            <td>
                <select type="text" name="MOH_office" id="MOH_office" placeholder="Enter the MOH office" class="form-control">
                    <option value="Pitakotte">Pitakotte</option>
                    <option value="Battaramulla">Battaramulla</option>
                    <option value="Wellawatte">Wellawatte</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Cancel" onclick="cancelBtn_OnClick();" class="btn btn-danger">&nbsp;&nbsp;
    <input type="submit" value="Save" onclick="saveBtn_OnClick();" class="btn btn-primary">

    </form>
</center>
<hr>

<script>
    $(function () {
        $("#dateOfBirth").datepicker({
            dateFormat: "dd/mm/yy",
            inline: true,
            showAnim: 'fadeIn',
            changeMonth: true,
            changeYear: true,
            maxDate: "today"
        });
    });
</script>

<script>
    function saveBtn_OnClick(){
        document.getElementById("form").submit();
    }

    function cancelBtn_OnClick(){
        location.replace('settings.php');
    }
</script>

<?php closePage(); ?>