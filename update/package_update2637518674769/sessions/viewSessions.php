<?php
    include('../site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "../", $pageTitle = "Malnutrition monitoring");
    checkLoginStatus();
    menuSetActive(2);
?>

<?php initializePage(); ?>

<br><br>
<?php 
  if(!isset($_GET['id'])){
      die('<div class="alert alert-danger" role="alert">Sorry, invalid parameters received.</div>');
  }
?>

<?php
  if(isset($_GET['alert'])){
    if($_GET['alert'] == "success"){
      echo '<div class="alert alert-success" role="alert">The session was created successfully.</div>';
    }elseif($_GET['alert'] == "unsuccess"){
      echo '<div class="alert alert-danger" role="alert">Sorry, failed to create the session right now.</div>';
    }
  }
?>

<script src="./calculateStage_v2.js"></script>

<?php if(isset($_GET['back']) && $_GET['back'] == "viewChildFollowUps"){ ?>
  <a href="../childFollowUps/viewChildFollowUps.php"><button class="btn btn-primary">< Go back</button></a><hr>
<?php }else{ ?>
  <a href="index.php"><button class="btn btn-primary">< Go back</button></a><hr>
<?php } ?>

<h4>Child registration No: 00<?php echo $_GET['id']; ?>/Child/M/PK</h4>
<div class="panel panel-default">
  <div class="panel-heading" style="height:55px;">
        <input type="text" id="searchCtrl" class="form-control" placeholder="Search by id/name" style="width:150px; position: absolute; left:75%;">
  </div>
  <div class="panel-body" style="overflow-x:auto; overflow-y:auto; height:500px;">

  <p id="filterInfo" class="badge"></p>

  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Session No.</th>
          <th scope="col">Session date.</th>
          <th scope="col">Weight (Kg)</th>
          <th scope="col">Height (Cm)</th>
          <th scope="col">Length (Cm)</th>
          <th scope="col">MUAC (Cm)</th>
          <th scope="col">Malnutrition Stage</th>
          <th scope="col">Vitamin A</th>
          <th scope="col">Mebendazole</th>
          <th scope="col">Vaccine</th>
          <th scope="col">Supplement</th>
          <th scope="col">Supplement Packets</th>
          <th scope="col">Supplement Guidelines</th>
          <th scope="col">Dietary Guidelines</th>
          <th scope="col">Risk assessment</th>
          <th scope="col">Next session date</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php
    include('./Session.php');
    include('../child/Child.php');

    $session = new Session();
    $child = new Child();

    $sessions = $session->getChildSessions($_GET['id']);
    $childDetails = $child->GetChild($_GET['id']);

    if(!empty($sessions) && !empty($childDetails)){
      foreach ($sessions as $s){
        ?>
          <tr>
            <th scope="row"><?php echo "00". $s[0] . "/Session/PK"; ?></th>
            <td><?php echo $s[2]; ?></td>
            <td><?php echo $s[3] . " Kg"; ?></td>
            <td><?php echo $s[4] . " Cm"; ?></td>
            <td><?php echo $s[5] . " Cm"; ?></td>
            <td><?php echo $s[6] . " Cm"; ?></td>
            <td>
                <?php
                    if($s[6] >= 5.0 && $s[6] <= 11.5){
                        echo "SAM";
                    }else if($s[6] >= 11.6 && $s[6] <= 12.5){
                        echo "MAM";
                    }else if($s[6] >= 12.6 && $s[6] <= 19.9){
                        echo "NORMAL";
                    }else{
                      if($s[6] == 0){
                        ?> <script>document.write(calculateStage("<?php echo $childDetails[8]; ?>", "<?php echo $childDetails[9]; ?>", <?php echo $s[5]; ?>, <?php echo $s[3]; ?>, <?php echo $s[4]; ?>));</script> <?php
                      }else{
                        echo "N/A";
                      }
                    }
                ?>
            </td>
            <td><?php 
            if($s[14] == "yes"){
                echo '<input type="checkbox" checked disabled><br>';
                echo $s[15];
            }else{
                echo '<input type="checkbox" disabled>';
            }
            ?></td>
            <td><?php 
              if($s[16] == "yes"){
                echo '<input type="checkbox" checked disabled><br>';
                echo $s[17];
              }else{
                  echo '<input type="checkbox" disabled>';
              }
            ?></td>
            <td><?php echo $s[18]; ?></td>
            <td><?php echo $s[19]; ?></td>
            <td><?php echo $s[20]; ?></td>
            <td><?php echo $s[21]; ?></td>
            <td><?php echo $s[22]; ?></td>
            <td><?php
                if($s[8] == "yes"){
                    echo "Poor income and poverly, ";
                }
                if($s[9] == "yes"){
                  echo "Insufficient to child care, ";
                }
                if($s[10] == "yes"){
                  echo "Poor child feeding practices, ";
                }
                if($s[11] == "yes"){
                  echo "Low food security, ";
                }
                if($s[12] == "yes"){
                  echo "Poor nutrition knowledge, ";
                }
                if($s[13] == "yes"){
                  echo "Lack of access water and sanitation, ";
                }
            ?></td>
            <td><?php echo $s[23]; ?></td>
            <!-- <td>
              <div class="form-inline">
                <a href="viewSessions.php?id=<?php echo $c[0]; ?>"><button class="btn btn-primary">View session</button></a>
              </div>
            </td> -->
          </tr>
        <?php
      }
    }else{
        echo "No details found.";
    }
  ?>

    </tbody>
</table>

  </div>
</div>

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