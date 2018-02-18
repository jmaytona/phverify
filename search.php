<?php
    include 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Search Result:</h1>
            </div>
        </div>
        </div>
<div class="container">
    <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM school WHERE schoolName LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            
            echo "Number of result: ".$queryResult;
            
            if ($queryResult > 0){
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
        } else {
                echo "There are no results matching your search!";
            }
        }

    ?>
    
</div>

<?php
    include 'footer.php';
?>
