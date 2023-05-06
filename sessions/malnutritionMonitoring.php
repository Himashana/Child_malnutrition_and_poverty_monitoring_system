<?php
    include('../site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "../", $pageTitle = "Malnutrition monitoring");
    checkLoginStatus();
    menuSetActive(2);
?>

<?php initializePage(); ?>

<br><br>

<div class="panel panel-default">
  <div class="panel-heading" style="height:55px;">
        <input type="text" id="searchCtrl" class="form-control" placeholder="Search by id/name" style="width:150px; position: absolute; left:75%;">
  </div>
  <div class="panel-body">

  <p id="filterInfo" class="badge"></p>

  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Child registration No</th>
          <th scope="col">Child full name</th>
          <th scope="col">Gender</th>
          <th scope="col">Malnutrition stage</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php
    include('../child/Child.php');

    $child = new Child();

    $childs = $child->GetChilds();

    if(!empty($childs)){
      foreach ($childs as $c){
        ?>
          <tr>
            <th scope="row"><?php echo "00". $c[0] . "/Child/M/PK"; ?></th>
            <td><?php echo $c[2] . " " . $c[3]; ?></td>
            <td><?php echo $c[9]; ?></td>
            <td>MAM</td>
            <td>
              <div class="form-inline">
                <a href="viewSessions.php?id=<?php echo $c[0]; ?>"><button class="btn btn-primary">View sessions</button></a>
                <a href="newSession.php?id=<?php echo $c[0]; ?>"><button class="btn btn-primary">Start session</button></a>
                <select type="text" name="assignee" onchange="updateAssignee();" id="assignee" placeholder="Assignee" class="form-control">
                    <option value="Assignee">Assignee</option>    
                    <option value="MOH - Mrs. shani">MOH - Mrs. shani</option>
                    <option value="PHM - Maheshi Silva">PHM - Maheshi Silva</option>
                </select>
              </div>
            </td>
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
    function updateAssignee(){
        alert("The assignee was updated successfully.");
    }
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