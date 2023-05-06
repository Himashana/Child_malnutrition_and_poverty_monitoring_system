<?php
    include('../site.Master.php'); // Including the site master page.
    checkLoginStatus();
    createProperties($filePathPrefix = "../", $pageTitle = "Home");
    menuSetActive(1);
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;">User details - top header</div>
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
    <h3 class="panel-title"><a href="childRegistration.php"><button class="btn btn-primary">Add child</button></a></h3>
  </div>
  <div class="panel-body">

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
      <tbody>

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
            <td><?php echo date("Y") - intval(substr($c[8], 6)); ?></td>
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

<?php closePage(); ?>