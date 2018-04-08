<?php
    $pageTitle = 'Background check – Identity Check';
    $metaContent = 'What is an identity check? What is it for? How can you be cleared with the check? Read to find out.';
    include 'header.php';
?>
    <div class="dark-background">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <h1 class="display-about">An identity check is a type of background check conducted to confirm or validate your identity.</h1>
                <br>
            </div>
        </div>
    </div>
    <div class="light-background">
        <!-- <div class="container">-->

        <h4><u>What is the identity check for? </u></h4><br>
        <p>The identity check is conducted so that companies will be able to confirm that you are indeed the person that you are declaring. This is also to ensure that the documents and forms that you sign up (Government Contributions, employee files etc) are assigned to a validated identity.</p><br><br>

        <h4><u>How is the identity check being conducted?</u></h4><br>
        <p>The identity check is usually conducted by collecting government documents with photo or thru submission of supporting documents that will confirm the identity that you are claiming. The company can either authenticate the document that you have submitted or they can accept the document at face value.</p><br><br>

        <h4><u>How can you be cleared in the identity check?</u></h4><br>
        <p>You can be cleared in the identity check if the identity you have declared is the same with the official documents that you have submitted.</p><br><br>

        <h4><u>What can you do if there are negative or incomplete findings in your address check? </u></h4><br>
        <p>The most common negative finding for the identity checks is when the name that you are using is not aligned with the name used in your official documents. There are many reason for this but the most common issues are:</p>
        <ul>
            <li>Recently married or recently divorced (which either uses the husband’s last name or original maiden name)</li>
            <li>With discrepancies in the names provided (birth certificate documents show a different name versus all other names declared in other official documents)</li>
        </ul>
        <p>The best way to correct the discrepancy from different names is to provide supporting documents that would show that there is a valid reason for the difference in name. The company might require you to submit a notarized document or ask you to update the names that you have declared (versus what has been declared in the official documents)</p><br><br>

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
