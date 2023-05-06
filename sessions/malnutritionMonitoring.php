<?php
    include('../site.Master.php'); // Including the site master page.
    
    createProperties($filePathPrefix = "../", $pageTitle = "Home");
    checkLoginStatus();
    menuSetActive(2);
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;">User details - top header</div>
<br><br>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Malnutrition monitoring</h3>
  </div>
  <div class="panel-body">

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
      <tbody>

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
                <a href="viewSessions.php?id=<?php echo $c[0]; ?>"><button class="btn btn-primary">View sessions</button></a>
                <a href="newSession.php?id=<?php echo $c[0]; ?>"><button class="btn btn-primary">Start session</button></a>
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

<?php closePage(); ?>