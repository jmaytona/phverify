<?php
    include 'header.php';
?>

    <div class="jumbotron">
        <h1 class="display-3">BGC Search</h1>
        <p class="p-margin">"A free online resource that contains education verification details for top schools and universities in NCR/Calabarzon Area. <br>Perfect for Recruiters, HR practioners and even background check verifiers!"</p>
    </div>

<p class="text-center"><em>NCR and CALABARZON only - Based on Ched Masterlist ao 2017</em></p>
<br>
    <!--Search Form-->
    <div class='container-fluid'>
        <div class="row">
            <div class="col-sm-12">
                <form action="search.php" method="POST" class="main-form">
                    <input class="form-control" type="text" name="search" placeholder="Search..">
                    <button type="submit" name="submit-search" class="btn btn-primary btn-lg btn-block">Search</button>
                </form>
            </div>
        </div>
    </div>
<br>
<p class="text-center"><em>Disclaimer: Information shown in this website were gathered manually or electronically thru publicly available data. Please use at your own risk</em></p>

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
