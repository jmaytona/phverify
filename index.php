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

<?php
    include 'footer.php';
?>
