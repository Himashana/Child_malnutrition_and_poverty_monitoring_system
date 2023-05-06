<?php
    include('../site.Master.php'); // Including the site master page.
    checkLoginStatus();
    createProperties($filePathPrefix = "../", $pageTitle = "Child Registration");
    menuSetActive(2);
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;">User details - top header</div>
<center>
    <form action="registerChild.php" id="form" method="POST" style="overflow-y:auto; height:90vh" onsubmit="event.preventDefault();">
    <h2>Malnutrition Monitoring Session</h2><br>

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
        <tr><td colspan="2"><center><u><h4>Child bio details</h4></u></center></td></tr>
        <tr>
            <td>Child full name:&nbsp;</td>
            <td><input type="text" name="childFullName" id="childFullName" value="<?php echo $childDetails[2] . ' ' . $childDetails[3]; ?>" class="form-control" disabled></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Child date of birth:&nbsp;</td>
            <td><input type="text" name="dateOfBirth" id="dateOfBirth" value="<?php echo $childDetails[8]; ?>" class="form-control" disabled></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Gender:&nbsp;</td>
            <td><input type="text" name="childGender" id="childGender" value="<?php echo $childDetails[9]; ?>" class="form-control" disabled></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Age:&nbsp;</td>
            <td><input type="text" name="childAge" id="childAge" class="form-control" value="<?php echo date("Y") - intval(substr($childDetails[8], 6)) . ' years'; ?>" disabled></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Date:&nbsp;</td>
            <td><input type="text" name="date" id="date" placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" class="form-control" disabled></td>
        </tr><tr><td><br></td></tr>

        <tr><td colspan="2"><center><u><h4>Nutrition Assessment</h4></u></center></td></tr>
        <tr>
            <td>Weight (Kg):&nbsp;</td>
            <td><input type="text" name="childWeight" id="childWeight" placeholder="Enter child weight" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Height (Cm):&nbsp;</td>
            <td><input type="text" name="childHeight" id="childHeight" placeholder="Enter child height" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Length (Cm):&nbsp;</td>
            <td><input type="text" name="childLength" id="childLength" placeholder="Enter child length" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>MUAC (Cm):&nbsp;</td>
            <td><input type="text" name="childMUAC" id="childMUAC" placeholder="Enter child MUAC" class="form-control"></td>
            <td>&nbsp;&nbsp;<button class="btn btn-primary" id="calculateBtn" onclick="calculateBtn_OnClick();">Calculate</button></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Malnutrition Stage:&nbsp;</td>
            <td><input type="text" name="malnutritionStage" id="malnutritionStage" placeholder="N/A" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <!-- <tr>
            <td>Weight gain or loss:&nbsp;</td>
            <td><input type="text" name="weightGainLoss" id="weightGainLoss" placeholder="N/A" class="form-control"></td>
        </tr><tr><td><br></td></tr> -->
        <tr>
            <td>Chart images:&nbsp;</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="needWeightHeightChart" name="needWeightHeightChart">
                    <label class="form-check-label" for="needWeightHeightChart">Weight,Height chart</label>
                </div>
                

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="needWeightLengthChart" name="needWeightLengthChart">
                    <label class="form-check-label" for="needWeightLengthChart">Weight,Length chart</label>
                </div>
                
            </td>
        </tr><tr><td><br></td></tr>
        
        <tr><td colspan="2"><center><u><h4>Risk assessment</h4></u></center></td></tr>
        
        <tr>
            <td>RA01 - Poor income and poverly:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="RA01" name="RA01"></div>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>RA02 - Insufficient to child care:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="RA02" name="RA02"></div>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>RA03 - Poor child feeding practices:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="RA03" name="RA03"></div>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>RA04 - Low food security:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="RA04" name="RA04"></div>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>RA05 - Poor nutrition knowledge:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="RA05" name="RA05"></div>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>RA06 - Lack of access water and sanitation:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="RA06" name="RA06"></div>
            </td>
        </tr><tr><td><br></td></tr>

        <tr><td colspan="2"><center><u><h4>Prescription Medication</h4></u></center></td></tr>

        <tr>
            <td>Vitamin A:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="isVitaminA" name="isVitaminA"></div>
                <input type="text" name="noteForVitaminA" id="noteForVitaminA" placeholder="Enter note" class="form-control">
            </td>
        </tr><tr><td><br></td></tr>

        <tr>
            <td>Mebendazole:&nbsp;</td>
            <td>
                <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="isMebendazole" name="isMebendazole"></div>
                <input type="text" name="noteForMebendazole" id="noteForMebendazole" placeholder="Enter note" class="form-control">
            </td>
        </tr><tr><td><br></td></tr>

        <tr>
            <td>Vaccine:&nbsp;</td>
            <td>
                <select type="text" name="vaccineType" id="vaccineType" placeholder="Enter the vaccine" class="form-control">
                    <option value="Not given">Not given</option>
                    <option value="Pentavalent">Pentavalent</option>
                    <option value="Measeles,MUMPS,Rubella(MMR)">Measeles,MUMPS,Rubella(MMR)</option>
                    <option value="DPT">DPT</option>
                    <option value="OPV4">OPV4</option>
                    <option value="MMR2">MMR2</option>
                    <option value="DT">DT</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>

        <tr>
            <td>Supplement:&nbsp;</td>
            <td>
                <select type="text" name="supplement" id="supplement" placeholder="Enter the supplement" class="form-control">
                    <option value="Thriposha">Thriposha</option>
                    <option value="BP100">BP100</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Supplement Packets (Amount):&nbsp;</td>
            <td><input type="number" name="supplementAmount" id="supplementAmount" placeholder="0" value="1" min="1" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Supplement treatment Guidelines:&nbsp;</td>
            <td>
                <textarea name="supplementGuidelines" id="supplementGuidelines" placeholder="Enter the supplement treatment guidelines" class="form-control" rows="3"></textarea>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="MAMsuppGuidImg" name="MAMsuppGuidImg">
                    <label class="form-check-label" for="MAMsuppGuidImg">MAM supplementary guidelines image</label>
                </div>
                

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="SAMsuppGuidImg" name="SAMsuppGuidImg">
                    <label class="form-check-label" for="SAMsuppGuidImg">SAM supplementary guidelines image</label>
                </div>
            </td>
        </tr><tr><td><br></td></tr>

        <tr>
            <td>Dietary guidelines:&nbsp;</td>
            <td>
                <textarea name="dietaryGuide" id="dietaryGuide" placeholder="Enter dietary guide for parent of child" class="form-control" rows="3"></textarea>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="MAMdietaryGuidImg" name="MAMdietaryGuidImg">
                    <label class="form-check-label" for="MAMdietaryGuidImg">MAM dietary guidelines image</label>
                </div>
                

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="SAMdietaryGuidImg" name="SAMdietaryGuidImg">
                    <label class="form-check-label" for="SAMdietaryGuidImg">SAM dietary guidelines image</label>
                </div>
            </td>
        </tr><tr><td><br></td></tr>

        <tr>
            <td>Next session date:&nbsp;</td>
            <td><input type="text" name="nextSessionDate" id="nextSessionDate" placeholder="dd/mm/yyyy" class="form-control"></td>
        </tr><tr><td><br></td></tr>

    </table>

    <input type="submit" value="Cancel" class="btn btn-danger">&nbsp;&nbsp;
    <input type="submit" value="Save session" onclick="saveBtn_OnClick();" class="btn btn-primary">

    </form>
</center>
<hr>

<script>
    function calculateBtn_OnClick(){
        var childMUAC = document.getElementById("childMUAC").value;

        if(childMUAC >= 5.0 && childMUAC <= 11.5){
            document.getElementById("malnutritionStage").style.backgroundColor = "#F76462";
            document.getElementById("malnutritionStage").value = "SAM";
        }else if(childMUAC >= 11.6 && childMUAC <= 12.5){
            document.getElementById("malnutritionStage").style.backgroundColor = "#EEE465";
            document.getElementById("malnutritionStage").value = "MAM";
        }else if(childMUAC >= 12.6 && childMUAC <= 19.9){
            document.getElementById("malnutritionStage").style.backgroundColor = "#63D36D";
            document.getElementById("malnutritionStage").value = "NORMAL";
        }else{
            document.getElementById("malnutritionStage").style.backgroundColor = "white";
            document.getElementById("malnutritionStage").value = "";
        }
    }
</script>

<script>
    function saveBtn_OnClick(){
        document.getElementById("form").submit();
    }

    $(function () {
        $("#nextSessionDate").datepicker({
            dateFormat: "dd/mm/yy",
            inline: true,
            showAnim: 'fadeIn',
            changeMonth: true,
            changeYear: true,
            minDate: "today"
        });
    });
</script>

<?php closePage(); ?>