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
    Panel content
  </div>
</div>

<?php closePage(); ?>