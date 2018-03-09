<?php
    include 'dbh.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle.' - Education Verification | PHVerify'; ?></title>
    <meta name="description" content="<?php echo $pageTitle.' - Add Description here'; ?>">
    <meta name="keywords" content="<?php echo $pageTitle.' - Add Keyword here'; ?>">
    <!--<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Vollkorn" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>   
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="#">PH Verify</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="listcolor" href="http://localhost/phverify/index">Home</a></li>
                    <li><a class="listcolor" href="http://localhost/phverify/about">About</a></li>
                    <li><a class="listcolor" href="http://localhost/phverify/contact">Contact</a></li>
                    <li><a class="listcolor" href="http://localhost/phverify/privacy">Privacy</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>