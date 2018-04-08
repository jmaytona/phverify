<?php
    $pageTitle = 'Contact';
    $metaContent = 'Contact us here';
    include 'header.php';
?>

    <?php

    //Message Variable
    $msg = '';
    $msgClass = '';

    //Submit
    if(filter_has_var(INPUT_POST, 'submit')){
        //Get Form Data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        //Check Required Field
        if(!empty($name) && !empty($email) && !empty($message)){
            //Proceed
            if(filter_var($email, FILTER_VALIDATE_EMAIL)=== false){
                //Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                //Proceed
                $toEmail = 'admin@phverify.com';
                $subject = 'Contact From '.$name;
                $body = '<h2>Contact Request </h2>
                <h4>Name<h4><p>'.$name.'</p>
                <h4>Email<h4><p>'.$email.'</p>
                <h4>Mesesage<h4><p>'.$message.'</p>
                ';
                
                //Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html; charset=UTF-8" ."\r\n";
                
                //Additional Headers(from)
                $headers .= "From: ". $name."<". $email. ">". "\r\n";
                
                if(mail($toEmail, $subject, $body, $headers)){
                    //Email Sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
                
            }
        } else {
            //Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
       
        
    }
?>

        <div class="dark-background">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="display-about">For questions, comments and suggestions, you may email us at admin@phverify.com</h1>
                    <h4 class="display-about">To report inaccurate entries, please use the report form below:</h4>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>">
                <?php echo $msg; ?>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4>Contact Form</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-group">
                                    <label class="contact-label" for="formGroupExampleInput">Name</label>
                                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="contact-label" for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="contact-label" for="exampleFormControlTextarea1">Message</label>
                                    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" id="contact-search">Submit</button>
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
