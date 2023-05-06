<?php
    include('../site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "../", $pageTitle = "Child Registration");
    checkLoginStatus();
    menuSetActive(1);
?>

<?php initializePage(); ?>

<center>
    <form action="registerChild.php" id="form" method="POST" style="overflow-y:auto; height:90vh" onsubmit="event.preventDefault();">
    <h2>Child details</h2><br>

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

    <table>
        <tr><td colspan="2"><center><u><h4>Personal details</h4></u></center></td></tr>
        <tr>
            <td>Child registration No:&nbsp;</td>
            <td><?php echo "00" . $childDetails[0] . "/Child/M/PK"; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>CHDR No:&nbsp;</td>
            <td><?php echo $childDetails[1]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>First name:&nbsp;</td>
            <td><?php echo $childDetails[2]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Last name:&nbsp;</td>
            <td><?php echo $childDetails[3]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Name of the core giver:&nbsp;</td>
            <td><?php echo $childDetails[4]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>NIC No of the core giver:&nbsp;</td>
            <td><?php echo $childDetails[5]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Telephone/Mobile phone of the core giver:&nbsp;</td>
            <td><?php echo $childDetails[6]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Address:&nbsp;</td>
            <td><?php echo $childDetails[7]; ?></td>
        </tr><tr><td><br></td></tr>
    
        <tr><td colspan="2"><center><u><h4>Bio details</h4></u></center></td></tr>
        <tr>
            <td>Date of the birth:&nbsp;</td>
            <td><?php echo $childDetails[8]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Gender:&nbsp;</td>
            <td><?php echo $childDetails[9]; ?></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Weight on register date(Kg):&nbsp;</td>
            <td><input type="text" name="childWeight" id="childWeight" placeholder="Enter child weight" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Height on register date(Cm):&nbsp;</td>
            <td><input type="text" name="childHeight" id="childHeight" placeholder="Enter child height" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Length on register date(Cm):&nbsp;</td>
            <td><input type="text" name="childLength" id="childLength" placeholder="Enter child length" class="form-control" required></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>No any diseases / complications:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="yes" id="isAnyDisease" name="isAnyDisease"></div>
            </td>
        </tr><tr><td><br></td></tr>
    
        <tr><td colspan="2"><center><u><h4>Other details</h4></u></center></td></tr>
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
        location.replace('index.php');
    }
</script>

<?php closePage(); ?>