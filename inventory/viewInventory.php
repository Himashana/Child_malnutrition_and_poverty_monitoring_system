<?php
    include('../site.Master.php'); // Including the site master page.
    checkLoginStatus();
    createProperties($filePathPrefix = "../", $pageTitle = "Supplement resource management");
    menuSetActive(4);
?>

<?php initializePage(); ?>

<center>
    <form action="createInventory.php" id="form" method="POST" onsubmit="event.preventDefault();">
    <h2>Supplement resource management</h2><br>

    <?php
        if(isset($_GET['alert'])){
            if($_GET['alert'] == "success"){
            echo '<div class="alert alert-success" role="alert">The resource entry was created successfully.</div>';
            }elseif($_GET['alert'] == "unsuccess"){
            echo '<div class="alert alert-danger" role="alert">Sorry, failed to create the resource entry.</div>';
            }
        }
    ?>

    <table>
        <tr><td colspan="2"><center><u><h4>New resource entry</h4></u></center></td></tr>
        <tr>
            <td>Type of inventory:&nbsp;</td>
            <td>
                <select type="text" name="inventoryType" id="inventoryType" class="form-control">
                    <option value="Thriposha">Thriposha</option>
                    <option value="BP100">BP100</option>
                </select>
            </td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Inventory amount (Packets):&nbsp;</td>
            <td><input type="number" name="inventoryAmount" id="inventoryAmount" placeholder="0" value="1" min="1" class="form-control"></td>
        </tr><tr><td><br></td></tr>
        <tr>
            <td>Expiry date:&nbsp;</td>
            <td><input type="text" name="expiryDate" id="expiryDate" placeholder="dd/mm/yyyy" class="form-control" autocomplete="off"></td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Create New Inventory" onclick="saveBtn_OnClick();" class="btn btn-primary">

    </form>
</center>

<hr>

<div style="overflow-y:auto; height:350px;">
<div class="panel panel-default">
  <div class="panel-heading" style="height:55px;">
    <div class="form-inline">
        <input type="text" id="searchCtrl" class="form-control" placeholder="Search by id/name" style="width:150px; position: absolute; left:75%;">
    </div>
  </div>
  <div class="panel-body">

  <p id="filterInfo" class="badge"></p>

  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Inventory code</th>
          <th scope="col">Type of Inventory</th>
          <th scope="col">Expirt date</th>
          <th scope="col">Received amount (packets)</th>
          <th scope="col">Issued amount (packets)</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php
    include('./Inventory.php');

    $inventory = new Inventory();

    $inventories = $inventory->GetInventories();

    if(!empty($inventories)){
      foreach ($inventories as $i){
        ?>
          <tr>
            <th scope="row"><?php echo "BP -A00". $i[0]; ?></th>
            <td><?php echo $i[1]; ?></td>
            <td><?php echo $i[3]; ?></td>
            <td><?php echo $i[2]; ?></td>
            <td></td>
          </tr>
        <?php
      }
    }else{
        echo "<tr><td>No details found.</td></tr>";
    }
  ?>

    </tbody>
</table>

  </div>
</div>
</div>

<script>
    function saveBtn_OnClick(){
        document.getElementById("form").submit();
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