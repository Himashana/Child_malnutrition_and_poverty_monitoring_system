<?php
    include('../site.Master.php'); // Including the site master page.
    createProperties($filePathPrefix = "../", $pageTitle = "Circulars and manuals");
    checkLoginStatus();
    menuSetActive(6);
?>

<?php initializePage(); ?>

<div style="padding:20px;">
    <center><h2>Circulars and manuals</h2></center>

    <div class="row">
        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=document_01.pdf">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>Document 1</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=document_02.pdf">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>Document 2</p>
                </center>
            </div>
        </div>
    </div>
</div>

<?php closePage(); ?>