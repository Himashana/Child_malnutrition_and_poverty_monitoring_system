<?php
    include('../site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "../", $pageTitle = "Child details");
    checkLoginStatus();
    menuSetActive(1);
?>

<?php initializePage(); ?>

<br><br>

<?php
  if(isset($_GET['alert'])){
    if($_GET['alert'] == "success"){
      echo '<div class="alert alert-success" role="alert">The child was registered successfully.</div>';
    }elseif($_GET['alert'] == "unsuccess"){
      echo '<div class="alert alert-danger" role="alert">Sorry, failed to register the child right now..</div>';
    }
  }
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <div class="form-inline">
        <a href="childRegistration.php"><button class="btn btn-primary">Add child</button></a>
        <input type="text" id="searchCtrl" class="form-control" placeholder="Search by id/name" style="width:150px; position: absolute; left:75%;">
    </div>
  </div>
  <div class="panel-body">

  <p id="filterInfo" class="badge"></p>

  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Child registration No</th>
          <th scope="col">Child full name</th>
          <th scope="col">Gender</th>
          <th scope="col">Age</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php
    include('./Child.php');

    $child = new Child();

    $childs = $child->GetChilds();

    if(!empty($childs)){
      foreach ($childs as $c){
        ?>
          <tr>
            <th scope="row"><?php echo "00". $c[0] . "/Child/M/PK"; ?></th>
            <td><?php echo $c[2] . " " . $c[3]; ?></td>
            <td><?php echo $c[9]; ?></td>
            <td><?php 
                $age = date("Y") - intval(substr($c[8], 6));
                if ($age == 0){
                    echo date("m") - substr($c[8], 3, 2) . " months";
                }else{
                    if(substr($c[8], 3, 2) > date("m")){
                      echo (12 - substr($c[8], 3, 2)) + date("m") . " months";
                    }else{
                      echo $age . ' years';
                    }
                }
            ?></td>
            <td><a href="viewChild.php?id=<?php echo $c[0]; ?>"><button class="btn btn-primary">View profile</button></a></td>
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