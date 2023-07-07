<h2>Child malnutrition & poverty monitoring system - update</h2><br>

<form action="" method="post">
    <input type="submit" name="submit" value="Update">
</form>

<?php

if(isset($_POST['submit'])) {
    $files = array("calculateStage.js");
    $destination = '../sessions/';

    foreach($files as $fileToCopy){
        
        $newFileName = basename($fileToCopy);
        
        if(copy($fileToCopy, $destination . $newFileName)) {
            echo 'Copied file : ' . $fileToCopy . "<br>";
        } else {
            echo 'There was an error copying the file.<br>';
        }
    }

    $files = array("newSession.php");
    $destination = '../sessions/';

    foreach($files as $fileToCopy){
        
        $newFileName = basename($fileToCopy);
        
        if(copy($fileToCopy, $destination . $newFileName)) {
            echo 'Copied file : ' . $fileToCopy . "<br>";
        } else {
            echo 'There was an error copying the file.<br>';
        }
    }

    $files = array("Chart1.jpg");
    $destination = '../images/';

    foreach($files as $fileToCopy){
        
        $newFileName = basename($fileToCopy);
        
        if(copy($fileToCopy, $destination . $newFileName)) {
            echo 'Copied file : ' . $fileToCopy . "<br>";
        } else {
            echo 'There was an error copying the file.<br>';
        }
    }

    $files = array("Chart2.jpg");
    $destination = '../images/';

    foreach($files as $fileToCopy){
        
        $newFileName = basename($fileToCopy);
        
        if(copy($fileToCopy, $destination . $newFileName)) {
            echo 'Copied file : ' . $fileToCopy . "<br>";
        } else {
            echo 'There was an error copying the file.<br>';
        }
    }

    $files = array("Chart3.jpg");
    $destination = '../images/';

    foreach($files as $fileToCopy){
        
        $newFileName = basename($fileToCopy);
        
        if(copy($fileToCopy, $destination . $newFileName)) {
            echo 'Copied file : ' . $fileToCopy . "<br>";
        } else {
            echo 'There was an error copying the file.<br>';
        }
    }

    $files = array("Chart4.jpg");
    $destination = '../images/';

    foreach($files as $fileToCopy){
        
        $newFileName = basename($fileToCopy);
        
        if(copy($fileToCopy, $destination . $newFileName)) {
            echo 'Copied file : ' . $fileToCopy . "<br>";
        } else {
            echo 'There was an error copying the file.<br>';
        }
    }
}

?>