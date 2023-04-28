<?php
    $GLOBALS['filePathPrefix'] = "";
    $GLOBALS['pageTitle'] = "";

    function createProperties($filePathPrefix, $pageTitle = ""){ // i.e.: ../ and ./ etc...
        $GLOBALS['filePathPrefix'] = $filePathPrefix;
        $GLOBALS['pageTitle'] = $pageTitle;
    }
?>

<?php function initializePage(){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS['pageTitle']; ?> - Child malnutrition and poverty monitoring system</title>

    <link rel="stylesheet" href="<?php echo $GLOBALS['filePathPrefix']; ?>css/styles.css?v=1">

    <!-- Jquery CSS -->

    <link rel="stylesheet" href="<?php echo $GLOBALS['filePathPrefix']; ?>jqueryui/jquery-ui.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $GLOBALS['filePathPrefix']; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $GLOBALS['filePathPrefix']; ?>bootstrap/css/bootstrap-theme.min.css">

    <!-- Jquery js -->
    <script src="<?php echo $GLOBALS['filePathPrefix']; ?>jquery/jquery-3.6.4.min.js"></script>
    <script src="<?php echo $GLOBALS['filePathPrefix']; ?>jqueryui/jquery-ui.min.js"></script>

    <!-- Bootstrap js -->
    <script src="<?php echo $GLOBALS['filePathPrefix']; ?>bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="row">
        <div class="col-md-2 menu">
            <div class="menu-item menu-item-active">Home</div>
            <div class="menu-item">Child registration</div>
            <div class="menu-item">Malnutrition monitoring</div>
            <div class="menu-item">Child follow -ups</div>
            <div class="menu-item">Supplement inventory</div>
            <div class="menu-item">Reports</div>
            <div class="menu-item">Circulars and manuals</div>
            <div class="menu-item">Profile</div>
            <div class="menu-item">Log out</div>
        </div>

        <div class="col-md-10" style="background-color:white;">

<?php } ?>

<?php function closePage(){ ?>

    </div>
    </div>

</body>
</html>

<?php } ?>