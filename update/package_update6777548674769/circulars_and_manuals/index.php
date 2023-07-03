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
                    <a href="viewDocument.php?pdf=Breastfeeding book 2021 04-04-2022_Final_Softcopy-May-2022.pdf">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>Breastfeeding book 2021 04-04-2022_Final_Softcopy-May-2022.pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('2020 Circular & Manual SAM & MAM mangement.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>2020 Circular & Manual SAM & MAM mangement.pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('BFW 2022 presentation CNU. English.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>BFW 2022 presentation CNU. English.pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('BFW 2022 presentation CNU.Sinhala .pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>BFW 2022 presentation CNU.Sinhala .pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('Breastfeeding book 2021 04-04-2022_Final_Softcopy-May-2022.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>Breastfeeding book 2021 04-04-2022_Final_Softcopy-May-2022.pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('Complementary Feeding Book English revised.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>Complementary Feeding Book English revised.pdf</p>
                </center>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('Complementary Feeding booklet_S_ONLINE.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>Complementary Feeding booklet_S_ONLINE.pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('practical advice to staff.caregivers on CN in econ crisis - E.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>practical advice to staff.caregivers on CN in econ crisis - E.pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('practical advice to staff.caregivers on CN in econ crisis - S.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>practical advice to staff.caregivers on CN in econ crisis - S.pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('Thriposha circular English 2016.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>Thriposha circular English 2016.pdf</p>
                </center>
            </div>
        </div>

        <div class="col-md-2">
            <div class="pdfLinks">
                <center>
                    <a href="viewDocument.php?pdf=<?php echo urlencode('Thriposha circular Sinhala 2016.pdf'); ?>">
                        <i class="fa fa-file-pdf-o" style='font-size:96px'></i>
                    </a><br><br>
                    <p>Thriposha circular Sinhala 2016.pdf</p>
                </center>
            </div>
        </div>
    </div>
</div>

<?php closePage(); ?>