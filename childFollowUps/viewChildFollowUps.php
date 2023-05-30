<?php
    include('../site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "../", $pageTitle = "Malnutrition monitoring");
    checkLoginStatus();
    menuSetActive(3);
?>

<?php initializePage(); ?>

<br><br>

<script src="../sessions/calculateStage_v2.js"></script>

<div class="panel panel-default">
  <div class="panel-heading" style="height:55px;">
        <form method="POST" action="viewChildFollowUps.php" class="form-inline">      
            <input type="text" name="fromDate" id="fromDate" placeholder="dd/mm/yyyy" value="<?php
                if(isset($_POST["fromDate"])){
                  echo $_POST["fromDate"];
                }
              ?>" class="form-control" autocomplete="off">
            <input type="submit" value="Filter" class="btn btn-primary">
            <input type="text" id="searchCtrl" class="form-control" placeholder="Search by id/name" style="width:150px; position: absolute; left:75%;">
        </form>
    </div>
  <div class="panel-body">

  <p id="filterInfo" class="badge"></p>

  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Child registration No</th>
          <th scope="col">Child full name</th>
          <th scope="col">Gender</th>
          <th scope="col">Assignee</th>
          <th scope="col">Stage</th>
          <th scope="col">Next session date</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php
    include('../child/Child.php');
    include('../sessions/Session.php');

    $session = new Session();

    $child = new Child();

    $childs = $child->GetChilds();

    if(!empty($childs)){
      foreach ($childs as $c){
        $sessions = $session->getChildSessions($c[0]);
        if(!empty($sessions)){
        if(isset($_POST["fromDate"])){
            // echo $sessions[0][23] . " | " . date('d/m/Y', strtotime($sessions[0][23])) .  " >= " . date('d/m/Y', strtotime($_POST['fromDate'])) . "<br>";
            if($sessions[0][23] == $_POST['fromDate']){
        ?>
          <tr>
            <th scope="row"><?php echo "00". $c[0] . "/Child/M/PK"; ?></th>
            <td><?php echo $c[2] . " " . $c[3]; ?></td>
            <td><?php echo $c[9]; ?></td>
            <td id="assignee">N/A</td>
            <td>
              <?php
            
                if(!empty($sessions)){
                  if($sessions[0][6] >= 5.0 && $sessions[0][6] <= 11.5){
                    echo "SAM";
                  }else if($sessions[0][6] >= 11.6 && $sessions[0][6] <= 12.5){
                      echo "MAM";
                  }else if($sessions[0][6] >= 12.6 && $sessions[0][6] <= 19.9){
                      echo "NORMAL";
                  }else{
                      echo "N/A";
                  }
                }else{
                    echo "N/A";
                }
                    
              ?>

            </td>
            <td><?php 
                if(!empty($sessions)){
                    echo $sessions[0][23];
                }else{
                    echo 'N/A';
                }
             ?></td>
            <td>
              <div class="form-inline">
                <a href="../sessions/newSession.php?id=<?php echo $c[0]; ?>"><button class="btn btn-primary">Start session</button></a>
              </div>
            </td>
          </tr>
        <?php
            }
        }else{
          ?>
          <tr>
            <th scope="row"><?php echo "00". $c[0] . "/Child/M/PK"; ?></th>
            <td><?php echo $c[2] . " " . $c[3]; ?></td>
            <td><?php echo $c[9]; ?></td>
            <td id="assignee">N/A</td>
            <td>
              <?php
            
                if(!empty($sessions)){
                  if($sessions[0][6] >= 5.0 && $sessions[0][6] <= 11.5){
                    echo "SAM";
                  }else if($sessions[0][6] >= 11.6 && $sessions[0][6] <= 12.5){
                      echo "MAM";
                  }else if($sessions[0][6] >= 12.6 && $sessions[0][6] <= 19.9){
                      echo "NORMAL";
                  }else{
                      if($sessions[0][6] == 0){
                        ?> <script>document.write(calculateStage("<?php echo $c[8]; ?>", "<?php echo $c[9]; ?>", <?php echo $sessions[0][5]; ?>, <?php echo $sessions[0][3]; ?>, <?php echo $sessions[0][4]; ?>));</script> <?php
                      }else{
                        echo "N/A";
                      }
                  }
                }else{
                    echo "N/A";
                }
                    
              ?>

            </td>
            <td><?php 
                if(!empty($sessions)){
                    echo $sessions[0][23];
                }else{
                    echo 'N/A';
                }
             ?></td>
            <td>
              <div class="form-inline">
                <a href="../sessions/newSession.php?id=<?php echo $c[0]; ?>"><button class="btn btn-primary">Start session</button></a>
              </div>
            </td>
          </tr>
        <?php
        }
        }
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

    $("#fromDate").datepicker({
        dateFormat: "dd/mm/yy",
        inline: true,
        showAnim: 'fadeIn',
        changeMonth: true,
        changeYear: true
    });
</script>

<script>
    if(sessionStorage.getItem("assignee") != null){
        document.getElementById('assignee').innerHTML = sessionStorage.getItem("assignee").substring(0, 3);
    }
</script>



<?php closePage(); ?>