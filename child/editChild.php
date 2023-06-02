<?php
    include('../site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "../", $pageTitle = "Edit child");
    checkLoginStatus();
    menuSetActive(1);
?>

<?php initializePage(); ?>

<center>
    <?php
        include('../child/Child.php');

        $child = new Child();

        if(isset($_GET['id'])){
            $childDetails = $child->GetChild($_GET['id']);

            if(empty($childDetails)){
                die('<div class="alert alert-danger" role="alert">Sorry, no child found for this given id.</div>');
            }
        }else{
            die('<div class="alert alert-danger" role="alert">Sorry, no child found for this given id.</div>');
        }

    ?>

    <form action="updateChild.php" id="form" method="POST" style="overflow-y:auto; height:90vh" onsubmit="event.preventDefault();">
    <h2>Child registration form</h2><br>

    <table>
        <tr><td colspan="2"><center><u><h4>Personal details</h4></u></center></td></tr>
        <tr>
            <td><input type="text" name="childId" id="childId" value="<?php echo $childDetails[0]; ?>" style="display:none;" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
        <tr>
            <td>CHDR No:&nbsp;</td>
            <td><input type="text" name="CHDRNo" id="CHDRNo" value="<?php echo $childDetails[1]; ?>" placeholder="Enter CHDR No" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>First name:&nbsp;</td>
            <td><input type="text" name="firstName" id="firstName" value="<?php echo $childDetails[2]; ?>" placeholder="Enter first name" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Last name:&nbsp;</td>
            <td><input type="text" name="lastName" id="lastName" value="<?php echo $childDetails[3]; ?>" placeholder="Enter last name" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Name of the care giver:&nbsp;</td>
            <td><input type="text" name="coreGiverName" id="coreGiverName" value="<?php echo $childDetails[4]; ?>" placeholder="Enter caregiver name" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>NIC No of the care giver:&nbsp;</td>
            <td><input type="text" name="coreGiverNIC" id="coreGiverNIC" value="<?php echo $childDetails[5]; ?>" placeholder="Enter caregiver NIC No" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Telephone/Mobile phone of the core giver:&nbsp;</td>
            <td><input type="text" name="coreGiverPhone" id="coreGiverPhone" value="<?php echo $childDetails[6]; ?>" placeholder="Enter Telephone/Mobile No" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Address:&nbsp;</td>
            <td><textarea name="childAddress" id="childAddress" placeholder="Enter address - city/lane/..." class="form-control" rows="3" required><?php echo $childDetails[7]; ?></textarea></td>
        </tr><tr><td><br></td></tr>
    
        <tr><td colspan="2"><center><u><h4>Bio details</h4></u></center></td></tr>
        <tr>
            <td>Date of the birth:&nbsp;</td>
            <td><input type="text" name="dateOfBirth" id="dateOfBirth" value="<?php echo $childDetails[8]; ?>" placeholder="dd/mm/yyyy" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Gender:&nbsp;</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="childGender" id="childGenderMale" value="Male" required <?php
                        if($childDetails[9] == "Male"){
                            echo "checked";
                        }
                    ?>>
                    <label class="form-check-label" for="childGenderMale">
                        Male
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="childGender" id="childGenderFemale" value="Female" required <?php
                        if($childDetails[9] == "Female"){
                            echo "checked";
                        }
                    ?>>
                    <label class="form-check-label" for="childGenderFemale">
                        Female
                    </label>
                </div>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Weight on register date(Kg):&nbsp;</td>
            <td><input type="text" name="childWeight" id="childWeight" value="<?php echo $childDetails[10]; ?>" placeholder="Enter child weight" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Height on register date(Cm):&nbsp;</td>
            <td><input type="text" name="childHeight" id="childHeight" value="<?php echo $childDetails[11]; ?>" placeholder="Enter child height" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Length on register date(Cm):&nbsp;</td>
            <td><input type="text" name="childLength" id="childLength" value="<?php echo $childDetails[12]; ?>" placeholder="Enter child length" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>No any diseases / complications:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="yes" id="isAnyDisease" name="isAnyDisease" <?php
                    if($childDetails[13] == "Yes"){
                        echo "checked";
                    }
                ?>></div>
            </td>
        </tr><tr><td><br></td></tr>
    
        <tr><td colspan="2"><center><u><h4>Other details</h4></u></center></td></tr>
        <tr>
            <td>Eligible family number:&nbsp;</td>
            <td><input type="text" name="eligibleFamilyNo" id="eligibleFamilyNo" value="<?php echo $childDetails[14]; ?>" placeholder="Enter eligible family number" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Ethinticity:&nbsp;</td>
            <td>
                <?php if($childDetails[15] == "Tamil"){ ?>
                    <select type="text" name="childEthinticity" id="childEthinticity" placeholder="Enter the ethinticity" class="form-control">
                        <option value="Tamil">Tamil</option>
                        <option value="Sinhalese">Sinhalese</option>
                        <option value="Muslims">Muslims</option>
                    </select>
                <?php }else if($childDetails[15] == "Muslims"){ ?>
                    <select type="text" name="childEthinticity" id="childEthinticity" placeholder="Enter the ethinticity" class="form-control">
                        <option value="Muslims">Muslims</option>
                        <option value="Tamil">Tamil</option>
                        <option value="Sinhalese">Sinhalese</option>
                    </select>
                <?php }else{ ?>
                <select type="text" name="childEthinticity" id="childEthinticity" placeholder="Enter the ethinticity" class="form-control">
                    <option value="Sinhalese">Sinhalese</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Muslims">Muslims</option>
                </select>
                <?php } ?>
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
        location.replace('viewChild.php?id=<?php echo $_GET['id']; ?>');
    }
</script>

<?php closePage(); ?>