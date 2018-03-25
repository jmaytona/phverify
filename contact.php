<?php
    $pageTitle = 'Contact';
    include 'header.php';
?>

    <div class="dark-background">
        <div class="row">
            <h1 class="display-about">For questions, comments and suggestions, you may email us at admin@phverify.com</h1>
            <h4 class="display-about">To report inaccurate entries, please use the report form below:</h4>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Form</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label class="contact-label" for="formGroupExampleInput">Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label class="contact-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="contact-label" for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <br>
                                <button type="submit" name="submit-contact" class="btn btn-primary btn-lg btn-block" id="contact-search">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
    <br>
    <p class="text-center"><em>Disclaimer: Information shown in this website were gathered manually or electronically thru publicly available data. Please use at your own risk</em></p>

    <?php
    include 'footer.php';
?>
