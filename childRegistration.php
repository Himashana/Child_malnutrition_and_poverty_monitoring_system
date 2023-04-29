<?php
    include('./site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "./", $pageTitle = "Child Registration");
    menuSetActive(1);
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;">User details - top header</div>
<center>
    <form action="registerChild.php" method="POST" style="overflow-y:auto; height:90vh">
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
            <td><input type="text" name="dateOfBirth" id="dateOfBirth" placeholder="dd/mm/yyyy" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Gender:&nbsp;</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="childGender" id="childGenderMale" value="Male">
                    <label class="form-check-label" for="childGenderMale">
                        Male
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="childGender" id="childGenderFemale" value="Female">
                    <label class="form-check-label" for="childGenderFemale">
                        Female
                    </label>
                </div>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Weight on register date(Kg):&nbsp;</td>
            <td><input type="text" name="childWeight" id="childWeight" placeholder="Enter child weight" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Height on register date(Cm):&nbsp;</td>
            <td><input type="text" name="childHeight" id="childHeight" placeholder="Enter child height" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Length on register date(Cm):&nbsp;</td>
            <td><input type="text" name="childLength" id="childLength" placeholder="Enter child length" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>No any diseases / complications:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="isAnyDisease" name="isAnyDisease"></div>
            </td>
        </tr><tr><td><br></td></tr>
    </table>

    <u><h4>Other details</h4></u>
    <table>
        <tr>
            <td>Eligible family number:&nbsp;</td>
            <td><input type="text" name="eligibleFamilyNo" id="eligibleFamilyNo" placeholder="Enter eligible family number" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Ethinticity:&nbsp;</td>
            <td>
                <select type="text" name="childEthinticity" id="childEthinticity" placeholder="Enter the ethinticity" class="form-control">
                    <option value="Sinhalese">Sinhalese</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Muslims">Muslims</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Cancel" class="btn btn-danger">&nbsp;&nbsp;
    <input type="submit" value="Save" class="btn btn-primary">

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