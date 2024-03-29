<?php
    include('./site.Master.php'); // Including the site master page.
    checkLoginStatus();
    createProperties($filePathPrefix = "./", $pageTitle = "Home");
    menuSetActive(0);
?>

<?php initializePage(); ?>

<div style="background-color:white; color:black; margin-left:0px; padding-top:10px;">
    <?php echo $_SESSION['healthUserFullName'] . ' (00' . $_SESSION['healthUserId'] . '/PK)<br>' . $_SESSION['healthUserRole'] . ' - '. $_SESSION['healthUserMOHOffice'] . ' MOH office'; ?>
    <i class='fa fa-bell' onclick="showNotifications();" style='font-size:25px; position: absolute; right:5%;'></i>
    
    <div class="notificationsBox" style="display:none;" id="notificationsBox">
        <center>
            <p id="noNotificationsMsg">No new notifications<p>
        </center>
        <div style="background-color:white; width:100%; border: 3px solid #DED6D6; height:60px; padding:5px; display:none;" id="message">
            Message
        </div>
    </div>
</div><hr>

<center>
    <h2>DASHBOARD - PITAKOTTE MOH OFFICE</h2>
</center>
<hr>

<div style="overflow-y:auto; height:90vh">
    <div class="row">
        <div class="col-md-6">
            <div class="form-inline">
            From : <input type="text" name="fromDate1" id="fromDate1" placeholder="dd/mm/yyyy" style="width:100px;" class="form-control" autocomplete="off">
            &nbsp;to : <input type="text" name="toDate1" id="toDate1" placeholder="dd/mm/yyyy" style="width:100px;" class="form-control" autocomplete="off">
            </div>
            <div id="piechart1"><div style="background-color:#A6A6A6; color:white; border-radius:6px; padding:10px; width:150px;">Loading the chart...</div></div>
        </div>
        <div class="col-md-6">
        <div class="form-inline">
            From : <input type="text" name="fromDate2" id="fromDate2" placeholder="dd/mm/yyyy" style="width:100px;" class="form-control" autocomplete="off">
            &nbsp;to : <input type="text" name="toDate2" id="toDate2" placeholder="dd/mm/yyyy" style="width:100px;" class="form-control" autocomplete="off">
        </div>    
        <div id="columnChart"><div style="background-color:#A6A6A6; color:white; border-radius:6px; padding:10px; width:150px;">Loading the chart...</div></div></div>
    </div>
    <div class="col-md-6">
    <div class="form-inline">
        From : <input type="text" name="fromDate3" id="fromDate3" placeholder="dd/mm/yyyy" style="width:100px;" class="form-control" autocomplete="off">
        &nbsp;to : <input type="text" name="toDate3" id="toDate3" placeholder="dd/mm/yyyy" style="width:100px;" class="form-control" autocomplete="off">
    </div>    
    <div id="piechart2"><br><br><div style="background-color:#A6A6A6; color:white; border-radius:6px; padding:10px; width:150px;">Loading the chart...</div></div></div>
</div>


<script>
    function showNotifications(){
        var notificationsBox = document.getElementById('notificationsBox');

        if(notificationsBox.style.display == "none"){
            notificationsBox.style.display = "block";
            return
        }
        
        if(notificationsBox.style.display == "block"){
            notificationsBox.style.display = "none";
            return
        }
    }

    if(sessionStorage.getItem("assignee") != null){
        document.getElementById("noNotificationsMsg").style.display = "none";
        document.getElementById("message").style.display = "block";
        document.getElementById('message').innerHTML = sessionStorage.getItem("assigneeNotification");
    }
</script>

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
        ['RA 01 - Poor income and poverly', 3],
        ['RA 02 - Insufficient to child care', 6],
        ['RA 03 - Poor child feeding practices', 10],
        ['RA 04 - Low food security', 2],
        ['RA 05 - Poor nutrition knowledge', 4],
        ['RA 06 - Lack of access water and sanitation', 1]
    ]);

    var options = {'width':850, 'height':400};

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

<script>
    $("#fromDate1").datepicker({
        dateFormat: "dd/mm/yy",
        inline: true,
        showAnim: 'fadeIn',
        changeMonth: true,
        changeYear: true
    });

    $("#toDate1").datepicker({
        dateFormat: "dd/mm/yy",
        inline: true,
        showAnim: 'fadeIn',
        changeMonth: true,
        changeYear: true
    });

    $("#fromDate2").datepicker({
        dateFormat: "dd/mm/yy",
        inline: true,
        showAnim: 'fadeIn',
        changeMonth: true,
        changeYear: true
    });

    $("#toDate2").datepicker({
        dateFormat: "dd/mm/yy",
        inline: true,
        showAnim: 'fadeIn',
        changeMonth: true,
        changeYear: true
    });

    $("#fromDate3").datepicker({
        dateFormat: "dd/mm/yy",
        inline: true,
        showAnim: 'fadeIn',
        changeMonth: true,
        changeYear: true
    });

    $("#toDate3").datepicker({
        dateFormat: "dd/mm/yy",
        inline: true,
        showAnim: 'fadeIn',
        changeMonth: true,
        changeYear: true
    });
</script>

<?php closePage(); ?>