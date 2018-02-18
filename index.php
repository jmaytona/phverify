<?php
    include 'header.php';
?>

    <div class="jumbotron">
        <h1 class="display-3">BGC Search</h1>
    </div>
    <!--Search Form-->
    <div class='container-fluid'>
        <div class="row">
            <div class="col-sm-12">
                <form action="searchResult.php" method="post" class="main-form">
                    <input class="form-control" type="text" name="search" placeholder="Patrick is an Idiot">
                    <button type="submit" name="submit-search" class="btn btn-primary btn-lg btn-block">Search</button>
                </form>
            </div>
        </div>
    </div>

<hr>
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

    </div>

<?php
    include 'footer.php';
?>


