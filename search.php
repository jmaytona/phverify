<?php
    $pageTitle = 'Search';
    include 'header.php';
?>
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="display-3">PHverify</h1>
            </div>
            <div class="col-sm-6">
                <br>
                <p>PHVerify.com is a free database that provides an easy way to check highest educational attainment needed for pre employment background checks.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Search Result:</h3>
                        <h5><em>Please Click to see complete school details</em></h5>
                    </div>
                </div>

                <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM school3 WHERE schoolName LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            
            echo "Number of result: ".$queryResult."<br><br>";
            
            if ($queryResult > 1){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='school.php?title=".$row['titleUrl']."'><div class='panel panel-default'>
                    <h3 class='panel-heading'>".$row['schoolName']."</h3>
                    <p class='p-margin'><strong>Region: </strong>".$row['region']."</p>
                    <p class='p-margin'><strong>Preferred Method of Verification: </strong>".$row['method']."</p>       
                    <p class='p-margin'><strong>Average Processing Time (upon submission of complete documents): </strong>".$row['processingTime']."</p>
                </div></a>";
            }
        } 
            else if ($queryResult = 1){
                while($row = mysqli_fetch_assoc($result)){
                echo "
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
            else {
                echo "<br> There are no results matching your search!";
            }
        }
    ?>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-sm-4">
                    <form action="search.php" method="POST" class="main-form">
                        <input class="form-control" id="main-search" type="text" name="search" placeholder="Search..">
                        <button type="submit" name="submit-search" id="main-search" class="btn btn-primary btn-lg btn-block">Search</button>
                    </form>
            </div>
        </div>

        <?php
    include 'footer.php';
?>
