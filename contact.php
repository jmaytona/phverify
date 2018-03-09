<?php
    $pageTitle = 'Contact';
    include 'header.php';
?>

    <div class="header-title">
        <h1>Contact Us</h1>
    </div>
    <br>
    <div class="dark-background">
        <div class="container">
            <h4>For question, comments and suggestions, you may email us at phverify@yahoo.com.ph</h4>
            <h4>To report inaccurate entries, please use the report form below:</h4>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
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
                                <button type="submit" name="submit-contact" class="btn btn-primary btn-lg btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
    <br>
    <p class="text-center"><em>Disclaimer: Information shown in this website were gathered manually or electronically thru publicly available data. Please use at your own risk</em></p>

    <?php
    include 'footer.php';
?>
