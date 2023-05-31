<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New report - Child malnutrition & poverty monitoring system</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <script src="../sessions/calculateStage_v2.js"></script>
</head>
<body>
<div style="padding:11px; margin:10px; border:2px solid black;" id="reportContent">

<center>
<h2>Child malnutrition & poverty monitoring system</h2>
<h3>MALNUTRITION TRACKER</h3><br><div style="background-color:black; height:2px; width:100%;"></div><br>
</center>

<b><p>
    MOH Office - Pitakotte<br>
    <?php echo $_POST['reportType']; ?><br>
    <?php echo "From : " . $_POST['fromDate'] . " to " . $_POST['toDate']; ?>
</p></b>

<?php if ($_POST['reportType'] == "Child registration report"){ ?>

<table class="table" border="1">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Child registration No</th>
          <th scope="col">CHDR No</th>
          <th scope="col">Child name</th>
          <th scope="col">Address</th>
          <th scope="col">DOB</th>
          <th scope="col">Gender</th>
          <th scope="col">Age</th>
          <th scope="col">Registration date</th>
          <th scope="col">Weight ( Kg )</th>
          <th scope="col">Height ( Cm)</th>
          <th scope="col">Length (Cm)</th>
          <th scope="col">Eligible Family No</th>
          <th scope="col">Ethiniticity</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php
    include('../child/Child.php');

    $child = new Child();

    $childs = $child->GetChilds();

    $count = 0;

    if(!empty($childs)){
      foreach ($childs as $c){
        if(date('d/m/Y', strtotime(str_replace('/', '-', $c[16]))) >= date('d/m/Y', strtotime(str_replace('/', '-', $_POST['fromDate']))) && date('d/m/Y', strtotime(str_replace('/', '-', $c[16]))) <= date('d/m/Y', strtotime(str_replace('/', '-', $_POST['toDate'])))){
            $count += 1;
        ?>
          <tr>
            <td scope="row"><?php echo $count; ?></td>
            <td scope="row"><?php echo "00". $c[0] . "/Child/M/PK"; ?></td>
            <td scope="row"><?php echo $c[1]; ?></td>
            <td scope="row"><?php echo $c[2] . " " . $c[3]; ?></td>
            <td scope="row"><?php echo $c[7]; ?></td>
            <td scope="row"><?php echo $c[8]; ?></td>
            <td scope="row"><?php echo $c[9]; ?></td>
            <td scope="row"><?php 
                $age = date("Y") - intval(substr($c[8], 6));
                if ($age == 0){
                    echo date("m") - substr($c[8], 3, 2) . " months";
                }else{
                  if(substr($c[8], 3, 2) > date("m")){
                    echo (12 - substr($c[8], 3, 2)) + date("m") . " months";
                  }else{
                    echo $age . ' years';
                  }
                }
            ?></td>
            <td scope="row"><?php echo $c[16]; ?></td>
            <td scope="row"><?php echo $c[10]; ?> Kg</td>
            <td scope="row"><?php echo $c[11]; ?> Cm</td>
            <td scope="row"><?php echo $c[12]; ?> Cm</td>
            <td scope="row"><?php echo $c[14]; ?></td>
            <td scope="row"><?php echo $c[15]; ?></td>
          </tr>
        <?php
        }
      }
    }else{
        echo "No details found.";
    }
  ?>

    </tbody>
</table>

<?php } ?>

<?php if ($_POST['reportType'] == "Child malnutrition stage report"){ ?>

<table class="table" border="1">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Child registration No</th>
          <th scope="col">CHDR No</th>
          <th scope="col">Child name</th>
          <th scope="col">DOB</th>
          <th scope="col">Gender</th>
          <th scope="col">Age</th>
          <th scope="col">Registration date</th>
          <th scope="col">Weight ( Kg )</th>
          <th scope="col">Height ( Cm)</th>
          <th scope="col">Length (Cm)</th>
          <th scope="col">Malnutrition stage ( MAM , SAM , NORMAL)</th>
          <th scope="col">Duration of treatement</th>
        </tr>
      </thead>
      <tbody id="table">

  <?php
    include('../child/Child.php');
    include('../sessions/Session.php');

    $session = new Session();

    $child = new Child();

    $childs = $child->GetChilds();

    $count = 0;

    if(!empty($childs)){
      foreach ($childs as $c){
        if(date('d/m/Y', strtotime(str_replace('/', '-', $c[16]))) >= date('d/m/Y', strtotime(str_replace('/', '-', $_POST['fromDate']))) && date('d/m/Y', strtotime(str_replace('/', '-', $c[16]))) <= date('d/m/Y', strtotime(str_replace('/', '-', $_POST['toDate'])))){
            $count += 1;
        ?>
          <tr>
            <td scope="row"><?php echo $count; ?></td>
            <td scope="row"><?php echo "00". $c[0] . "/Child/M/PK"; ?></td>
            <td scope="row"><?php echo $c[1]; ?></td>
            <td scope="row"><?php echo $c[2] . " " . $c[3]; ?></td>
            <td scope="row"><?php echo $c[8]; ?></td>
            <td scope="row"><?php echo $c[9]; ?></td>
            <td scope="row"><?php 
                $age = date("Y") - intval(substr($c[8], 6));
                if ($age == 0){
                    echo date("m") - substr($c[8], 3, 2) . " months";
                }else{
                  if(substr($c[8], 3, 2) > date("m")){
                    echo (12 - substr($c[8], 3, 2)) + date("m") . " months";
                  }else{
                    echo $age . ' years';
                  }
                }
            ?></td>
            <td scope="row"><?php echo $c[16]; ?></td>
            <td scope="row"><?php echo $c[10]; ?> Kg</td>
            <td scope="row"><?php echo $c[11]; ?> Cm</td>
            <td scope="row"><?php echo $c[12]; ?> Cm</td>
            <td scope="row">
            <?php
                $sessions = $session->getChildSessions($c[0]);
            
                if(!empty($sessions)){
                  if($sessions[0][6] >= 5.0 && $sessions[0][6] <= 11.5){
                    echo "SAM";
                  }else if($sessions[0][6] >= 11.6 && $sessions[0][6] <= 12.5){
                      echo "MAM";
                  }else if($sessions[0][6] >= 12.6 && $sessions[0][6] <= 19.9){
                      echo "NORMAL";
                  }else{
                    if($sessions[0][6] == 0){
                      ?> <script>document.write(calculateStage("<?php echo $c[8]; ?>", "<?php echo $c[9]; ?>", <?php echo $sessions[0][5]; ?>, <?php echo $sessions[0][3]; ?>, <?php echo $sessions[0][4]; ?>));</script> <?php
                    }else{
                      echo "N/A";
                    }
                  }
                }else{
                    echo "N/A";
                }
                    
              ?>        
            </td>
            <td scope="row">
                <?php 
                    if(!empty($sessions)){
                        $date_deff = date_diff(date_create(date('Y/m/d', strtotime(str_replace('/', '-', $sessions[0][2])))), date_create(date('Y/m/d', strtotime(str_replace('/', '-', $c[16])))));
                        echo $date_deff->format("%a days");
                        // $durationOftreatement = intval(substr($sessions[0][2], 6)) - intval(substr($c[16], 6));
                        // if ($durationOftreatement == 0){
                        //     $durationOftreatement = substr($sessions[0][2], 3, 2) - substr($c[16], 3, 2);
                        //     if($durationOftreatement == 0){
                        //         echo substr($sessions[0][2], 0, 2) - substr($c[16], 0, 2) . " days";
                        //     }else{
                        //         echo $durationOftreatement . " months";
                        //     }
                        // }else{
                        //     echo $durationOftreatement . ' years';
                        // }
                    }else{
                        echo '0 days';
                    }
                ?>
            </td>
          </tr>
        <?php
        }
      }
    }else{
        echo "No details found.";
    }
  ?>

    </tbody>
</table>

<?php } ?>

<p>Total count of childs : <?php echo $count; ?></p>

</div>

</body>
</html>