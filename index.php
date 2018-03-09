<?php
    $pageTitle = 'PH Verify';
    include 'header.php';
?>

    <div class="jumbotron">
        <h1 class="display-3">PH Verify</h1>
            <p>A free online resource that contains education verification details for top schools and universities in NCR/Calabarzon Area. <br>Perfect for Recruiters, HR practioners and even background check verifiers.</p>
    </div>

    <p class="text-center note-design">NCR and CALABARZON only - Based on Ched Masterlist ao 2017</p>
    <br>
    <!--Search Form-->
    <div class='container-fluid'>
        <div class="row">
            <div class="col-sm-12">
                <form action="search.php" method="POST" class="main-form">
                    <input class="form-control" id="main-search" type="text" name="search" placeholder="Search..">
                    <button type="submit" name="submit-search" id="main-search" class="btn btn-primary btn-lg btn-block">Search</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <p class="text-center note-design">Disclaimer: Information shown in this website were gathered manually or electronically thru publicly available data. Please use at your own risk</p>

    <?php
    include 'footer.php';
?>
