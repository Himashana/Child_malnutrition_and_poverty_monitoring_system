<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <script src="./calculateStage_v2.js"></script>

    <script>
        document.close();
        document.write(calculateStage("<?php echo $_GET['dateOfBirth']; ?>", "<?php echo $_GET['childGender']; ?>", <?php echo $_GET['childLength']; ?>, <?php echo $_GET['childWeight']; ?>, <?php echo $_GET['childHeight']; ?>));
    </script>
</body>
</html>