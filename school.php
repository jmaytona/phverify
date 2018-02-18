<?php
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
            $sql = "SELECT * FROM school WHERE schoolName='$title'";
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
