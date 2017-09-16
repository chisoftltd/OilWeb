<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 29/07/2017
 * Time: 16:12
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>OilWeb | Oil and Gas Pipelines Course</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add JavaScript file-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
    <script src="/js/weboil.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/jspdf.min.js"></script>

    <!-- Add css file-->
    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><!-- Body area start-->
<header>
    <!-- add top navigational bar using bootstrap-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navoilweb">
                    <!--<span class="sr-only">Toggle navigation</span>-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">OilWeb | Oil and Gas Pipelines</a>
            </div>
            <div class="collapse navbar-collapse" id="navoilweb">
                <ul class="nav navbar-nav navbar-right">
                    <!-- check if same user is still same as the active session user and load appropriate menu options -->
                    <?php if (isset($_SESSION['usr_id'])) { ?>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li class="active"><a href="/menu/courses.php">Courses</a></li>
                        <li><a href="/menu/assessment.php">Test Yourself</a></li>
                        <li><a href="/menu/submission.php">Submission</a></li>

                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><p class="navbar-text"><span
                                    class="glyphicon glyphicon-user">Signed in as <?php echo $_SESSION['usr_name']; ?>
                            </p></li>
                        <li><a href="/index.php"><span class="glyphicon glyphicon-log-out">Log Out</a></li>

                    <?php } else { ?>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li class="active"><a href="/menu/courses.php">Courses</a></li>
                        <li><a href="/menu/assessment.php">Test Yourself</a></li>
                        <li><a href="/menu/submission.php">Submission</a></li>

                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><a href="/menu/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                        <li><a href="/menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

</header>
<hr> <!-- draw a line-->
<section>
    <div class="container" style="background-color: #263395">
        <h2>Oil and Gas Pipelines course coming soon</h2>
    </div>
</section><!-- end of section-->
<hr> <!-- draw a line-->
<footer>
    <!-- footer area-->
    <div>
        <?php include '../include/footer.php'; ?>
    </div>
</footer>
<!-- Latest compiled JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>