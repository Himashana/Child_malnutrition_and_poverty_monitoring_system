<?php
    include('./site.Master.php'); // Including the site master page.
    checkLoginStatus();
    createProperties($filePathPrefix = "./", $pageTitle = "New reports");
    menuSetActive(5);
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;">User details - top header</div>
<center>
    <form action="registerChild.php" method="POST" style="overflow-y:auto; height:90vh" onsubmit="event.preventDefault();">
    <h2>Reports</h2><br>

    <table>
        <tr>
            <td>Report type:&nbsp;</td>
            <td>
                <select type="text" name="reportType" id="reportType" class="form-control">
                    <option value="Child registration report">Child registration report</option>
                    <option value="Child malnutrition stage report">Child malnutrition stage report</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Date from:&nbsp;</td>
            <td><input type="text" name="fromDate" id="fromDate" placeholder="dd/mm/yyyy" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Date to:&nbsp;</td>
            <td><input type="text" name="toDate" id="toDate" placeholder="dd/mm/yyyy" class="form-control"></td>
        </tr><tr><td><br></td></tr>

        <tr>
            <td>Child malnutrition stages:&nbsp;</td>
            <td>
                <select type="text" name="malnutritionStages" id="malnutritionStages" class="form-control">
                    <option value="SAM">SAM</option>
                    <option value="MAM">MAM</option>
                    <option value="Normal">Normal</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>

        <tr>
            <td>Gender:&nbsp;</td>
            <td>
                <select type="text" name="childGender" id="childGender" class="form-control">
                    <option value="SAM">MALE</option>
                    <option value="MAM">FEMALE</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Cancel" class="btn btn-danger">&nbsp;&nbsp;
    <input type="submit" value="Print" class="btn btn-primary">

    </form>
</center>
<hr>

<script>
    $(function () {
        $("#fromDate").datepicker({
            dateFormat: "dd/mm/yy",
            inline: true,
            showAnim: 'fadeIn',
            changeMonth: true,
            changeYear: true,
            maxDate: "today"
        });

        $("#toDate").datepicker({
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