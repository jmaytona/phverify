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
            $sql = "SELECT * FROM school2 WHERE schoolName LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            
            echo "Number of result: ".$queryResult;
            
            if ($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='school.php?title=".$row['schoolName']."'><div class='panel panel-default'>
                    <h3 class='panel-heading'>".$row['schoolName']."</h3>
                    <p class='p-margin'><strong>Region: </strong>".$row['region']."</p>
                    <p class='p-margin'><strong>Preferred Method of Verification: </strong>".$row['method']."</p>       
                    <p class='p-margin'><strong>Average Processing Time (upon submission of complete documents): </strong>".$row['processingTime']."</p>
                </div></a>";
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
