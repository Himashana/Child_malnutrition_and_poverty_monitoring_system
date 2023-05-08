<?php
    include('../site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "../", $pageTitle = "Circulars and manuals");
    checkLoginStatus();
    menuSetActive(6);
?>

<?php initializePage(); ?>

<div style="padding:20px;">

    <a href="index.php"><button class="btn btn-primary">< Go back</button></a><hr>

    <?php
        if(isset($_GET['pdf'])){
            $pdf = $_GET['pdf'];
        }else{
            $pdf = "";
            header('Location:index.php');
        }
    ?>
    <iframe src="../pdfs/<?php echo $pdf; ?>" style="width:100%; height:570px;"></iframe>
</div>

<?php closePage(); ?>