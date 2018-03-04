<?php
    $pageTitle = 'Search Page';
    include 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Search Result:</h1>
            </div>
            <div class="col-sm-6">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <div class="container">
        <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM school2 WHERE schoolName LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            
            echo "Number of result: ".$queryResult;
            
            if ($queryResult > 1){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='school.php?title=".$row['schoolName']."'><div class='panel panel-default'>
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

    <?php
    include 'footer.php';
?>
