<?php
    include('../site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "../", $pageTitle = "Supplement resource management");
    checkLoginStatus();
    menuSetActive(4);
?>

<?php initializePage(); ?>

<center>
    <form action="createInventory.php" id="form" method="POST" onsubmit="event.preventDefault();">
    <h2>Supplement resource management</h2><br>

    <?php
        if(isset($_GET['alert'])){
            if($_GET['alert'] == "success"){
            echo '<div class="alert alert-success" role="alert">The resource entries was updated successfully.</div>';
            }elseif($_GET['alert'] == "unsuccess"){
            echo '<div class="alert alert-danger" role="alert">Sorry, failed to update the resource entries.</div>';
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
            <td><input type="text" name="expiryDate" id="expiryDate" placeholder="dd/mm/yyyy" class="form-control" autocomplete="off">
            <br><p style="color:red; display:none;" id="expiryDate_errormsg">Please enter the expiry date.</p></td>
        </tr><tr><td><br></td></tr>
    </table>

    <input type="submit" value="Create New Inventory" onclick="saveBtn_OnClick();" class="btn btn-primary">

    </form>
</center>

<hr>

<div>
<div class="panel panel-default">
  <div class="panel-heading" style="height:55px;">
    <div class="form-inline">
        <input type="text" id="searchCtrl" class="form-control" placeholder="Search by id/name" style="width:150px; position: absolute; left:75%;">
    </div>
  </div>
  <div class="panel-body" style="overflow-y:auto; height:250px;">

  <p id="filterInfo" class="badge"></p>

  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Inventory code</th>
          <th scope="col">Type of Inventory</th>
          <th scope="col">Expire date</th>
          <th scope="col">Received amount (packets)</th>
          <th scope="col">Issued amount (packets)</th>
          <th scope="col">Available amount (packets)</th>
          <th scope="col">Actions</th>
          <th scope="col">Action date</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php

    

    include('./Inventory.php');
    include('../sessions/Session.php');

    $session = new Session();
    $sessions = $session->getSessions();

    $issuedAmountThriposha = 0;
    $issuedAmountBP100 = 0;

    if(!empty($sessions)){
        foreach ($sessions as $s){
            if($s[19] == "Thriposha"){
                $issuedAmountThriposha += (int)$s[20];
            }

            if($s[19] == "BP100"){
                $issuedAmountBP100 += (int)$s[20];
            }
        }
    }



    $inventory = new Inventory();

    $inventories = $inventory->GetInventories();

    if(!empty($inventories)){
      foreach ($inventories as $i){
        ?>
          <tr>
            <th scope="row"><?php 
            if($i[1] == "Thriposha"){
                echo "TP -A00". $i[0];
            }else if($i[1] == "BP100"){
                echo "BP -A00". $i[0];
            }
             ?></th>
            <td><?php echo $i[1]; ?></td>
            <td><?php echo $i[3]; ?></td>
            <td><?php echo $i[2]; ?></td>
            <td><?php 
              if($i[1] == "Thriposha"){
                  echo $issuedAmountThriposha;
              }else if($i[1] == "BP100"){
                  echo $issuedAmountBP100;
              }
             ?></td>
            <td><?php 
                if($i[1] == "Thriposha"){
                    echo $i[2] - $issuedAmountThriposha;
                }else if($i[1] == "BP100"){
                    echo $i[2] - $issuedAmountBP100;
                }
            ?></td>
            <td style="width:150px;">
                <a href="editInventory.php?id=<?php echo $i[0]; ?>"><button class="btn btn-primary">Edit</button></a>
                <a href="closeInventory.php?id=<?php echo $i[0]; ?>"><button class="btn btn-danger">Close</button></a>
            </td>
            <td><?php echo $i[4]; ?></td>
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
        if(document.getElementById("expiryDate").value != ""){
          document.getElementById("expiryDate_errormsg").style.display = "none";
          document.getElementById("form").submit();
        }else{
          document.getElementById("expiryDate_errormsg").style.display = "block";
        }
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

<script>
  $(document).ready(function(){
    $("#searchCtrl").on("keyup", function() {
      var value = $(this).val().toLowerCase();

      if(value == ""){
        $("#filterInfo").text("")
      }else{
        $("#filterInfo").text("Filter=" + value)
      }

      $("#table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });

    });
  });
</script>

<?php closePage(); ?>