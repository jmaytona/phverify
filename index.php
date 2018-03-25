<?php
    $pageTitle = 'PH Verify';
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

    <br>
    <br>
    <br>
    <br>
    <!--Search Form-->
    <div class='container'>
        <div class="row">
            <div class="col-sm-6">
                <form action="search.php" method="POST" class="main-form">
                    <input class="form-control" id="main-search" type="text" name="search" placeholder="Search..">
                    <button type="submit" name="submit-search" id="main-search" class="btn btn-primary btn-lg btn-block">Search</button>
                </form>
            </div>
            <div class="col-sm-6">
                <p>While every effort has been made to offer the most current, accurate, and clearly expressed information possible. We urge you to use the information at your own risk. Our complete disclaimer page can be found <a href="disclaimer.php">here</a> background checks.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>


<!--
<br> 
    <div class="container">
        <h1>School Database</h1>
        <?php
            $sql = "SELECT * FROM school";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);
        
        if ($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='panel panel-default'>
                    <h3 class='panel-heading'>".$row['schoolName']."</h3>
                    <p class='p-margin'><strong>Region: </strong>".$row['region']."</p>
                    <p class='p-margin'><strong>Operating Hours: </strong>".$row['operatingHours']."</p>
                    <p class='p-margin'><strong>Address: </strong>".$row['address']."</p>
                    <p class='p-margin'><strong>Contact Number: </strong>".$row['contactNum']."</p>
                    <p class='p-margin'><strong>Email Address: </strong>".$row['emailAdd']."</p>
                </div>";
            }
        } 
        ?>
    </div>-->

    <?php
    include 'footer.php';
?>
