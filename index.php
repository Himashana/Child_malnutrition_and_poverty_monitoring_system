<?php
    include('./site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "./", $pageTitle = "Home");
    menuSetActive(0);
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;">User details - top header</div>
<center>
    <h2>DASHBOARD - PITAKOTTE MOH OFFICE</h2>
</center>
<hr>

<?php closePage(); ?>