<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New report</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
</head>
<body>
<div style="padding:6px;">

<b><p>
    MOH Office - Pitakotte<br>
    <?php echo $_POST['reportType']; ?><br>
    <?php echo "From : " . $_POST['fromDate'] . " to " . $_POST['toDate']; ?>
</p></b>

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

    if(!empty($childs)){
      foreach ($childs as $c){
        if(date('d/m/Y', strtotime($c[16])) >= date('d/m/Y', strtotime($_POST['fromDate'])) && date('d/m/Y', strtotime($c[16])) <= date('d/m/Y', strtotime($_POST['toDate']))){
        ?>
          <tr>
            <td scope="row"></td>
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
                    echo $age . ' years';
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
</div>
</body>
</html>