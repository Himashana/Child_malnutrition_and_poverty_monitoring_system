<?php
    include('./site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "./", $pageTitle = "Health users");
    checkLoginStatus();
    menuSetActive(9);
?>

<?php initializePage(); ?>

<br>

<center><h2>ADMIN FUNCTION</h2></center>
<br>

<?php
  if(isset($_GET['alert'])){
    if($_GET['alert'] == "success"){
      echo '<div class="alert alert-success" role="alert">The user was registered successfully.</div>';
    }elseif($_GET['alert'] == "unsuccess"){
      echo '<div class="alert alert-danger" role="alert">Sorry, failed to register the user right now..</div>';
    }
  }
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <div class="form-inline">
        <a href="userRegistration.php"><button class="btn btn-primary">Add user</button></a>
        <input type="text" id="searchCtrl" class="form-control" placeholder="Search by id/name" style="width:150px; position: absolute; left:75%;">
    </div>
  </div>
  <div class="panel-body">

  <p id="filterInfo" class="badge"></p>

  <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">User ID</th>
          <th scope="col">User Name</th>
          <th scope="col">Password</th>
          <th scope="col">Full Name</th>
          <th scope="col">Address</th>
          <th scope="col">ID No/Phone No</th>
          <th scope="col">User Role</th>
          <th scope="col">MOH Office</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php
    include('./HealthUser.php');

    $healthUser = new HealthUser();

    $users = $healthUser->GetHealthUsers();

    if(!empty($users)){
      foreach ($users as $u){
        ?>
          <tr>
            <td><?php echo "00". $u[0] . "/PK"; ?></td>
            <td><?php echo $u[8]; ?></td>
            <td>*****</td>
            <td><?php echo $u[1]; ?></td>
            <td><?php echo $u[7]; ?></td>
            <td><?php echo $u[6] . "<br>" . $u[5]; ?></td>
            <td><?php echo $u[3]; ?></td>
            <td><?php echo $u[4]; ?></td>
            <td><a href="viewProfile.php?id=<?php echo $u[0]; ?>"><button class="btn btn-primary">View profile</button></a></td>
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