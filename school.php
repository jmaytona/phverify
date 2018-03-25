<?php
    include 'dbh.php';
?>

    <?php
            $title = mysqli_real_escape_string($conn, $_GET['title']);
            $sql = "SELECT * FROM school3 WHERE titleUrl='$title'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

if ($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                $pageTitle = $row['schoolName'];
            }
}
    /*$pageTitle = $queryResults;*/
include 'header.php';
echo "    <div class='dark-background'>
        <div class='row'>
        <br>
            <h1 class='display-about'>".$pageTitle." - Education Verification Process</h1>
            <br>
        </div>
    </div>"

?>
        <br>
        <img class="banner" src="assets/samplebanner.png" alt="addsomething">
        <br>

        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php
            $title = mysqli_real_escape_string($conn, $_GET['title']);
            $sql = "SELECT * FROM school3 WHERE titleUrl='$title'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);
        
        if ($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='school.php?title=".$row['titleUrl']."'><div class='panel panel-default'></a>
                    <h3 class='panel-heading'>".$row['schoolName']."</h3>
                    <p class='p-margin'><strong>Region: </strong>".$row['region']."</p>
                    <p class='p-margin'><strong>Preferred Method of Verification: </strong>".$row['method']."</p>
                    <p class='p-margin'><strong>Average Processing Time (upon submission of complete documents): </strong>".$row['processingTime']."</p>
                    <p class='p-margin'><strong>Address: </strong>".$row['address']."</p>
                    <p class='p-margin'><strong>Operating Hours: </strong>".$row['operatingHours']."</p>
                    <p class='p-margin'><strong>Contact Details - Registrar or POC: </strong>".$row['contactDetails']."</p>
                    <p class='p-margin'><strong>Email Address - Registrar: </strong>".$row['emailaddRegistrar']."</p>
                    <p class='p-margin'><strong>Email Address - POC: </strong>".$row['emailaddPOC']."</p>
                    <p class='p-margin'><strong>Position of POC: </strong>".$row['positionPOC']."</p>
                    <p class='p-margin'><strong>Document Required: </strong>".$row['documentRequired']."</p>
                    <p class='p-margin'><strong>Additional Required Document: </strong>".$row['additionalDocument']."</p>
                    <p class='p-margin'><strong>Source: </strong>".$row['source']."</p>
                <br>
                </div>
                <br>
                <div class='margin-div'>
                <p><em><b>DISCLAIMER:</b> While every effort has been made to offer the most current, accurate, and clearly expressed information possible. We urge you to use the information at your own risk. Our complete disclaimer page can be found <a href='disclaimer.php'>here</a> background checks.</em></p>
                </div>";
            }
        } 
        ?>
                </div>
                <br>
                <br>
                <br>
                <div class="col-sm-4">
                    <form action="search.php" method="POST" class="main-form">
                        <input class="form-control" id="main-search" type="text" name="search" placeholder="Name of School">
                        <button type="submit" name="submit-search" id="main-search" class="btn btn-primary btn-lg btn-block">Search</button>
                    </form>
                    <br>
                    <br>
                    <p><b><em>If you are an applicant or a job seeker completing their pre-employment requirement:</em></b></p>
                    <p class="note-design">PHverify.com can help you process your education check being done by your prospective employer. While documents like Transcript of Records (TOR) or Certified True Copy of Grades are requested from applicants as the primary way to validate highest educational attainment, some employers (depending on their background check policy) would request contact details or email addresses of colleges and university to process the education verification faster.</p>
                    <br>
                    <p><b><em>If you are a recruiter or HR employee conducting pre employment background check:</em></b></p>
                    <p class="note-design">PHverify.com can help you conduct the verification of educational attainment in your pre-employment background check. While most company utilize third party background check companies to do education verification for them, there are instances wherein the checks are not completed or goes beyond your set deadline. Additionally, verification of employees being conducted by recruiters or HR employees are very limited since the verification requirements of schools (e.g preferred method or needed documents to process verification) have to be research individually. By using the PHverify.com database, recruiters can now do internal background check verification since information regarding the verification process of colleges and universities in metro manila can be accessed.</p>
                </div>
            </div>
            <br>
            <img class="banner" src="assets/samplebanner.png" alt="addsomething">
            <br>

<?php     
echo "  <div class='container-fluid'>
        <div class='row'>
        <div class='col-sm-8'>
        <div class='panel panel-default'>
        <h3 class='panel-heading'>Definition of Terms:</h3>
        <ul class='margin-terms'>
            <li><b><u>Name of Institution</u></b> - Official name of ".$pageTitle." as listed in CHED's official list of Institutions of Higher Education</li>
            <li><b><u>Region</u></b> - What region is ".$pageTitle." located</li>
            <li><b><u>Preferred Method of Verification</u></b> - What's the preferred method of ".$pageTitle." to verify educational attainment
                <ul>
                    <li>Site Visit - ".$pageTitle." requires actually visit to the school registrar to initiate the verification process</li>
                    <li>Phone call - ".$pageTitle." would be able to entertain the education verification over the phone</li>
                    <li>Fax - ".$pageTitle." would only be able to entertain the education verification request sent via fax</li>
                    <li>Email - ".$pageTitle." l would only be able to entertain request sent via the listed email</li>
                </ul>
            </li>
            <li><b><u>Average Processing Time (upon submission of complete documents)</u></b> - How long will the verification take once all required documents has been submitted (if the ".$pageTitle." requires additional document</li>
            <li><b><u>Operating Hours</u></b> - When and what time ".$pageTitle." is available to conduct education verification)</li>
            <li><b><u>Contact Details</u></b>- Registrar or POC - What's the number that you can use to call ".$pageTitle." registars office as listed in publicly available information or with PHverify's research</li>
            <li><b><u>Email Address – Registrar</u></b> - What's the email address that you can use to messge the ".$pageTitle." registars office as listed in publicly available information or with PH verify's researchers</li>
            <li><b><u>Email Address - POC</u></b> - What's the email address that you can use to messge the ".$pageTitle." alternate POC as listed in publicly available information or with PH verify's researchers</li>
            <li><b><u>Position of POC</b></u> - What the position of the POC in ".$pageTitle." (If available)</li>
            <li><b><u>Document Required</b></u> - What are the primary documents or information needed by ".$pageTitle." to initiate the verification of their educational attainment
                <ul>
                    <li>If preferred method of verification is thru Phone Call, the usual INFORMATION that are being asked before verification are NAME OF STUDENTS, DATE OF GRADUATION (for Graduates), START AND END DATES (for Undegraduates). The school might also ask for COURSE, STUDENT NUMBER or other information that might help them identify the student in their records. If the preferred method of verification is either thru email, fax or personal visit, the usual DOCUMENTS that are being requested would be a CONSENT FORM or LETTER OF AUTHORIZATION (any format as long as it's shows consent) if being done thru a background check vendor. The school might also need the  NAME OF STUDENTS, DATE OF GRADUATION (for Graduates), START AND END DATES (for Undegraduates) and the primary documents released by the school such as TRANSCRIPT OF RECORDS, Diploma or Certified True Copy of Grades</li>
                </ul>
            </li>
             <li><b><u>Additional Required Document</b></u> - What are the additional documents or information needed by ".$pageTitle." to initiate the verification of their educational attainment
                <ul>
                    <li>Due to the Data Privacy Act, some schools and institution might require additional documents on top of the primary documents stated above, the usual documents requested would be VALID ID with Picture and/or the Letter of Authorization or Consent Form (official school documents). Some school even require notarized consent forms or documents from the back ground check vendor (Company profile)</li>
                </ul>
            </li>     
        </ul>
        </div>
        </div>
        </div>
        </div>"
    
?>
        </div>


        <?php
    include 'footer.php';
?>
