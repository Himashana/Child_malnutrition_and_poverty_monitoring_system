<?php
    include('../site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "../", $pageTitle = "Supplement resource management");
    checkLoginStatus();
    menuSetActive(4);
?>

<?php initializePage(); ?>

<center>

    <?php
        include('./Inventory.php');

        $inventory = new Inventory();

        if(isset($_GET['id'])){
            $inventoryDetails = $inventory->GetInventory($_GET['id']);

            if(empty($inventoryDetails)){
                die('<div class="alert alert-danger" role="alert">Sorry, no inventory found for this given id.</div>');
            }
        }else{
            die('<div class="alert alert-danger" role="alert">Sorry, no inventory found for this given id.</div>');
        }
    ?>

    <form action="deleteInventory.php?id=<?php echo $_GET['id']; ?>" id="form" method="POST" onsubmit="event.preventDefault();">
    <h2>Supplement resource management</h2><br>

    <table>
        <tr><td colspan="2"><center><u><h4>Close resource entry</h4></u></center></td></tr>
        <tr>
            <td>Type of inventory:&nbsp;</td>
            <td>
                <select type="text" name="inventoryType" id="inventoryType" class="form-control" disabled>
                    <?php if($inventoryDetails[1] == "BP100"){ ?>
                        <option value="BP100">BP100</option>
                        <option value="Thriposha">Thriposha</option>
                    <?php }else{ ?>
                        <option value="Thriposha">Thriposha</option>
                        <option value="BP100">BP100</option>
                    <?php } ?>
                </select>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Inventory amount (Packets):&nbsp;</td>
            <td><input type="number" name="inventoryAmount" id="inventoryAmount" placeholder="0" value="<?php echo $inventoryDetails[2]; ?>" min="1" class="form-control" disabled></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Expiry date:&nbsp;</td>
            <td><input type="text" name="expiryDate" id="expiryDate" value="<?php echo $inventoryDetails[3]; ?>" placeholder="dd/mm/yyyy" class="form-control" autocomplete="off" disabled></td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Cancel" onclick="cancelBtn_OnClick();" class="btn btn-default">
    <input type="submit" value="Close inventory" onclick="saveBtn_OnClick();" class="btn btn-danger">

    </form>
</center>

<script>
    function saveBtn_OnClick(){
        document.getElementById("form").submit();
    }

    function cancelBtn_OnClick(){
        location.replace('index.php');
    }

    $(function () {
        $("#expiryDate").datepicker({
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