<?php

$server = "localhost";
$username = "root";
$password = "password99";
$dbname = "dbsearch2";

$conn = mysqli_connect($server, $username, $password, $dbname);

?>

<?php
            $title = mysqli_real_escape_string($conn, $_GET['title']);
            $sql = "SELECT * FROM school2 WHERE schoolName='$title'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

if ($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                $pageTitle = $row['schoolName'];
            }
}
    /*$pageTitle = $queryResults;*/
    include 'header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>School Details: </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
            $title = mysqli_real_escape_string($conn, $_GET['title']);
            $sql = "SELECT * FROM school2 WHERE schoolName='$title'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);
        
        if ($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='school.php?title=".$row['schoolName']."'><div class='panel panel-default'></a>
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
                </div>";
            }
        } 
        ?>
    </div>

    <?php
    include 'footer.php';
?>
