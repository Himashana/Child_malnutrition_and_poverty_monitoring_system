<?php
    session_start();

    $GLOBALS['filePathPrefix'] = "";
    $GLOBALS['pageTitle'] = "";
    $GLOBALS['menuItem'] = 0;

    function createProperties($filePathPrefix, $pageTitle = ""){ // i.e.: ../ and ./ etc...
        $GLOBALS['filePathPrefix'] = $filePathPrefix;
        $GLOBALS['pageTitle'] = $pageTitle;
    }

    function checkLoginStatus(){
        if(!$_SESSION['username']){
            header("Location:{$GLOBALS['filePathPrefix']}login");
        }
    }

    function menuSetActive($menuItem = 0){
        $GLOBALS['menuItem'] = $menuItem;
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="row">
        <div class="col-md-2 menu">
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>index.php"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 0) ? 'menu-item-active' : ''; ?>">Home</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>child/viewChilds.php"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 1) ? 'menu-item-active' : ''; ?>">Child registration</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>sessions/malnutritionMonitoring.php"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 2) ? 'menu-item-active' : ''; ?>">Malnutrition monitoring</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>childFollowUps"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 3) ? 'menu-item-active' : ''; ?>">Child follow -ups</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>inventory"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 4) ? 'menu-item-active' : ''; ?>">Supplement inventory</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>reports/newReport.php"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 5) ? 'menu-item-active' : ''; ?>">Reports</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>circulars_and_manuals"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 6) ? 'menu-item-active' : ''; ?>">Circulars and manuals</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>login/profile.php"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 7) ? 'menu-item-active' : ''; ?>">Profile</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>login/logout.php"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 8) ? 'menu-item-active' : ''; ?>">Log out</div></a>
            <a href="<?php echo $GLOBALS['filePathPrefix']; ?>settings.php"><div class="menu-item <?php echo ($GLOBALS['menuItem'] == 9) ? 'menu-item-active' : ''; ?>">Settings</div></a>
        </div>

        <div class="col-md-10" style="background-color:white;">

<?php } ?>

<?php function closePage(){ ?>

        </div>
    </div>

</body>
</html>

<?php } ?>