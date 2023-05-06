<?php
    include('./site.Master.php'); // Including the site master page.
    checkLoginStatus();
    createProperties($filePathPrefix = "./", $pageTitle = "Home");
    menuSetActive(0);
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;"><?php echo $_SESSION['healthUserFullName'] . ' (00' . $_SESSION['healthUserId'] . '/PK)<br>' . $_SESSION['healthUserRole'] . ' - '. $_SESSION['healthUserMOHOffice'] . ' MOH office'; ?></div><hr>
<center>
    <h2>DASHBOARD - PITAKOTTE MOH OFFICE</h2>
</center>
<hr>

<div style="overflow-y:auto; height:90vh">
    <div class="row">
        <div class="col-md-6"><div id="piechart1"><div style="background-color:#A6A6A6; color:white; border-radius:6px; padding:10px; width:150px;">Loading the chart...</div></div></div>
        <div class="col-md-6"><div id="columnChart"><div style="background-color:#A6A6A6; color:white; border-radius:6px; padding:10px; width:150px;">Loading the chart...</div></div></div>
    </div>
    <div class="col-md-6"><div id="piechart2"><br><br><div style="background-color:#A6A6A6; color:white; border-radius:6px; padding:10px; width:150px;">Loading the chart...</div></div></div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['type', 'value'],
    ['MAM', 3],
    ['SAM', 4],
    ['Normal', 6]
    ]);

    var options = {'width':550, 'height':400, colors: ['#EEE465', '#F76462', '#63D36D']};

    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
    chart.draw(data, options);
    }
</script>

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['type', 'value'],
        ['RA 01', 3],
        ['RA 02', 6],
        ['RA 03', 10],
        ['RA 04', 2],
        ['RA 05', 4],
        ['RA 06', 1]
    ]);

    var options = {'width':550, 'height':400};

    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
    chart.draw(data, options);
    }
</script>

<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender', 'MAM', 'SAM'],
          ['Male', 5.2, 6.7],
          ['Female', 4.2, 8.4]
        ]);

        var options = {width: 400, height: 400, colors: ['#EEE465', '#F76462']};

        var chart = new google.charts.Bar(document.getElementById('columnChart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

<?php closePage(); ?>