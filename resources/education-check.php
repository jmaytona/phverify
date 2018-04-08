<?php
    $pageTitle = 'Background check – Education Check';
    $metaContent = 'What is an Education check? What is it for? How can you be cleared with the check? Read to find out.';
    include 'header.php';
?>
    <div class="dark-background">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <h1 class="display-about">An education check is a type of background check conducted to verify the education details and the highest education attainment of the candidate.</h1>
                <br>
            </div>
        </div>
    </div>
    <div class="light-background">
        <!-- <div class="container">-->

        <h4><u>Education Check</u></h4><br>
        <p>The scope and coverage might differ from each company but the most common education check could either be:</p>
        <ul>
            <li>Checking with your school if you meet the minimum education requirement of the company. (The company and the position that you are applying for listed College Level – 2nd year completed as the minimum requirement so your school will be checked if you reached the minimum criteria)</li>
            <li>Checking your declared highest level of attainment and if it matches what was verified with your school (You declared college graduate in your forms so your school will be asked if you are a college graduate)</li>
        </ul>
        <br><br>

        <h4><u>How is the education being conducted?</u></h4><br>
        <p>The employment can either be done by the company or can be endorsed to a third-party background check vendor..</p>
        <p>Most common verification process done is by collecting previous school documents like Transcript of Records, Certified True Copy of Grades or Diploma. The collected documents can either be authenticated by reaching out to the previous employers or accepted at face value.</p>
        <p>Another way to do the employment check is by asking candidates to fill out a form outlining the education details that needs to be verified along with a letter of consent or authorization so the company or a third-party vendor can check on your behalf. This can be done by either</p>
        <ul>
            <li>Calling the school’s registrars’ office </li>
            <li>Sending a verification request to the email of the School Registrar of school representative</li>
            <li>By personally visiting the school to conduct the verification</li>
        </ul><br><br>

        <h4><u>How can you be cleared in the education check?</u></h4><br>
        <p>You can be cleared in the education check if you are able to meet the minimum educational requirement of the company and/or if your declared highest educational attainment matches what was verified with your school.</p>
        <p>For companies that does not conduct actual education verification, submission of education documents (like Transcript of Records, Certified Tue Copy of Grads, Diploma) for all declared companies might suffice.</p><br><br>

        <h4><u>What can you do if there are negative or incomplete findings in your education check? </u></h4><br>
        <p>The most common negative finding for the education check are discrepancies between what you declared as highest educational attainment versus what was verified with your school. While not always deliberate, discrepancies happen when candidates assume their highest educational attainment is the same of the year level when they left. This is especially true for college undergraduate or undergraduates that are considered irregular or have subjects from previous years that they have not enrolled yet.</p>
        <p>A good example would be if A 2nd year irregular student has incomplete subjects from the previous semester – given that she is enrolled as a second year student, she declared that she reached 2nd college level however the school might declare her as an irregular 2nd year student or even 1st year college student with 2nd year courses. Another example would be if a vocational or diploma graduate incorrectly declares himself/herself as college graduate of a 4-year course either by mistake or not clarifying the options when he/she was asked to declare.</p>
        <p>The only way to provide correct the findings if this is by providing education documents supporting your claim. If you were tagged by your previous school showing that you are an undergraduate, providing a college diploma would clear you of the negative finding.</p>
        <p>Another common finding for education check is when your education attainment cannot be verified due to unresponsive schools or schools needing additional documents before verifying the details. If this happens, your education check might be tagged as incomplete or unverified since no details were checked. This might be due to some schools might requiring additional documents like Transcript of Records or notarized letter of authorization or even the Registrar’s office just not being able to consistently verify your declared information. The best way to correct this is by providing the your transcript of records or any other required documents so the check can be facilitated. Another way is to coordinate with the schools in getting their preferred verification method and sharing it directly to your employers.</p><br><br>

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
