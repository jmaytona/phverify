<?php
    $pageTitle = 'Background check – Credit Check';
    $metaContent = 'What is an Credit check? What is it for? How can you be cleared with the check? Read to find out.';
    include 'header.php';
?>
    <div class="dark-background">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <h1 class="display-about">A credit check is a type of background check conducted to see if a candidate is cleared with any financial obligations from credit card companies and/or utility companies. Delinquent or Unpaid accounts for services that you have bought might also reflect in this check.</h1>
                <br>
            </div>
        </div>
    </div>
    <div class="light-background">
        <!-- <div class="container">-->

        <h4><u>What is the credit check for? </u></h4><br>
        <p>While the credit check is not widely used, company would usually run the credit check to see if you are cleared with any financial obligation from services that you have requested. This also includes delinquent or past due accounts from utilities and manufacturing companies or accounts that you have that were endorsed to Lawyers for collection. This check is a common requirement for companies that are either in the financial sector or roles that deals with sensitive information like credit cards.</p><br><br>

        <h4><u>How is the credit check being conducted?</u></h4><br>
        <p>The credit check is usually conducted via a third-party vendor which has access to the database of Credit Management associate of the Philippines (CMAP).</p><br><br>

        <h4><u>How can you be cleared in the credit check?</u></h4><br>
        <p>Since the credit check is done to check if you are cleared with any financial obligations, you will only be cleared if there are no derogatory financial records under you name.</p><br><br>

        <h4><u>What can you do if there are negative or incomplete findings in your credit check? </u></h4><br>
        <p>The most common negative finding for the credit check is delinquent accounts for utilities (Meralco, Telco et) or credit cards. Since each company would have different policies, the only way to know if you can get cleared is by checking with the company. Some documents that might help you in being cleared would be certification that you are cleared with any financial obligation or documents that shows ongoing action to close the delinquent account.</p><br><br>

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
