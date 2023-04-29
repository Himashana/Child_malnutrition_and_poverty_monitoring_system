<?php
    include('./site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "./", $pageTitle = "Child Registration");
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;">User details - top header</div>
<center>
    <form action="registerChild.php" method="POST">
    <h2>Child registration form</h2><br>

    <u><h4>Personal details</h4></u>
    <table>
        <tr>
            <td>CHDR No:&nbsp;</td>
            <td><input type="text" name="CHDRNo" id="CHDRNo" placeholder="Enter CHDR No" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>First name:&nbsp;</td>
            <td><input type="text" name="firstName" id="firstName" placeholder="Enter first name" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Last name:&nbsp;</td>
            <td><input type="text" name="lastName" id="lastName" placeholder="Enter last name" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Name of the core giver:&nbsp;</td>
            <td><input type="text" name="coreGiverName" id="coreGiverName" placeholder="Enter coregiver name" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>NIC No of the core giver:&nbsp;</td>
            <td><input type="text" name="coreGiverNIC" id="coreGiverNIC" placeholder="Enter coregiver NIC No" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Telephone/Mobile phone of the core giver:&nbsp;</td>
            <td><input type="text" name="coreGiverPhone" id="coreGiverPhone" placeholder="Enter Telephone/Mobile No" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Address:&nbsp;</td>
            <td><textarea name="childAddress" id="childAddress" placeholder="Enter address - city/lane/..." class="form-control" rows="3"></textarea></td>
        </tr><tr><td><br></td></tr>
    </table>

    <u><h4>Bio details</h4></u>
    <table>
        <tr>
            <td>Date of the birth:&nbsp;</td>
            <td><input type="text" name="dateOfBirth" id="dateOfBirth" placeholder="dd/mm/yy" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Gender:&nbsp;</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="childGender" id="childGender">
                    <label class="form-check-label">
                        Male
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="childGender" id="childGender">
                    <label class="form-check-label">
                        Female
                    </label>
                </div>
            </td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Submit">

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

<?php closePage(); ?>