<?php
    $pageTitle = 'Background check – Criminal Check';
    $metaContent = 'What is an Criminal check? What is it for? How can you be cleared with the check? Read to find out.';
    include 'header.php';
?>
    <div class="dark-background">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <h1 class="display-about">A criminal check is a type of background check conducted to see if a candidate has an active or ongoing criminal case or to check if a candidate has been convicted of any crime or has been involved in criminal activities. </h1>
                <br>
            </div>
        </div>
    </div>
    <div class="light-background">
        <!-- <div class="container">-->

        <h4><u>What is the criminal check for? </u></h4><br>
        <p>The identity check is conducted so that companies will be able to know if a candidate is cleared with any criminal activity. Each employer might have different policies regarding hiring of convicted employees but the main purpose of the check is to check for possible employee that might be potential liabilities with the company.</p><br><br>

        <h4><u>How is the criminal check being conducted?</u></h4><br>
        <p>The identity check is conducted by either the company itself or endorsed to a third-party vendor. If it’s done internally by the company, the most common way is to verify that you are cleared is by collecting a valid NBI clearance that shows no derogatory record. They might also require a police clearance or Regional Trial Court or Metropolitan Trail Court clearance (RTC/MTC).</p>
        <p>The criminal check conducted by the third-party vendor would technically be the same as how the company would do it – the only exception is that instead of submitting a document to the company, the third party vendor would collect a consent form and/or a photocopy of a valid ID and do the verification on your behalf.</p><br><br>

        <h4><u>How can you be cleared in the criminal check?</u></h4><br>
        <p>You can be cleared in the criminal check if you are able to show valid documents that shows that you have no active records against you or the results of the check conducted by the vendor shows that you are cleared with any criminal liability.</p><br><br>

        <h4><u>What can you do if there are negative or incomplete findings in your criminal check?</u></h4><br>
        <p>The most common negative finding in criminal check is having a HIT in your NBI clearance or having a possible match found or exact match found in the third-party vendor report. This happens when the name (and other information like birth date and place of residence) that you have provided would match with a record that has an active criminal case. One of the ways to clear this discrepancy is by providing or submitting a valid NBI Clearance that has no derogatory records.</p>

        <p>Other possible negative finding in your criminal check is if the third-party vendor check shows that you have pending or ongoing cases filed against you in either their database (Police Report or Local Court Cases). One of the ways to clear this is by submitting an NBI Clearance or the valid Police Clearance or MTC/RTC clearance from where the case was originating.</p>
        <p>Another negative finding is if you have previous case against you but you were already cleared or exonerated. Previous cases sometimes appear in the database check conducted by third party vendors so submission of an NBI clearance or a notarized legal document regarding closure of the case might clear you from this check. However – please note that each company would have different policies regarding acceptance on those with have criminal records in the past.</p>
        <p>Lastly – if you have indeed an active criminal record, the possibility of you being cleared in the criminal check might be low as most companies require being cleared with the criminal check with no derogatory records.</p><br><br>

        <a href="../index">
            <div class='card'>
                <h3 class='card-header'>PHVerify.com</h3>
                <p class="p-margin">Is a free and comprehensive database that contains the education verification information of CHED recognized colleges and universities in Metro Manila (NCR and CALABARZON). It's primarily designed to provide an easy way of getting verification details from colleges and universities which is needed for checking highest educational attainment on their pre-employment background checks.</p><br>
            </div>
        </a>
        <form action="../search.php" method="POST" class="main-form">
            <input class="form-control" id="main-search" type="text" name="search" placeholder="Name of School">
            <button type="submit" name="submit-search" id="main-search" class="btn btn-primary btn-lg btn-block">Search</button>
        </form>
        <br><br>
    </div>
    <?php
    include 'footer.php';
?>
