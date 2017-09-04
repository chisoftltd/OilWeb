<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 30/07/2017
 * Time: 17:26
 */
session_start();

if (isset($_SESSION['usr_id']) != "") {
    header("Location: index.php");
}

include_once '../db/dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $result = mysqli_query($link, "SELECT * FROM students WHERE email = '" . $email . "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['student_id'];
        $_SESSION['usr_name'] = $row['name'];
        header("Location: ../index.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Application Description - OilWeb!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Add css file-->
    <!-- <link href="css/styles.css" rel="stylesheet" type="text/css"/>-->
    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
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
                <a class="navbar-brand" href="/index.php">Home | OilWeb E-Solution</a>
            </div>
            <div class="collapse navbar-collapse" id="navoilweb">
                <ul class="nav navbar-nav navbar-right">
                    <!-- check if same user is still same as the active session user and load appropriate menu options -->

                    <?php if (isset($_SESSION['usr_id'])) { ?>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li><a href="/menu/courses.php">Courses</a></li>
                        <li class="active"><a href="/menu/assessment.php">Test Yourself</a></li>
                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><p class="navbar-text"><span
                                    class="glyphicon glyphicon-user">Signed in as <?php echo $_SESSION['usr_name']; ?>
                            </p></li>
                        <li><a href="/index.php"><span class="glyphicon glyphicon-log-out">Log Out</a></li>

                    <?php } else { ?>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li><a href="/menu/courses.php">Courses</a></li>
                        <li class="active"><a href="/menu/assessment.php">Test Yourself</a></li>
                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><a href="/menu/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                        <li><a href="/menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php if (isset($_SESSION['usr_id'])) { ?>
        <?php include '../include/signinheader.php'; ?>
    <?php } else { ?>
        <?php include '../include/header.php'; ?><?php } ?>
</header>
<form>
    <hr> <!-- draw a line-->
</form>
<section>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 well">
                <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                    <fieldset>
                        <legend>Login</legend>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="email" placeholder="Your Email" required class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" name="password" placeholder="Your Password" required
                                   class="form-control"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="login" value="Login" class="btn btn-primary"/>
                        </div>
                    </fieldset>
                </form>
                <span class="text-danger"><?php if (isset($errormsg)) {
                        echo $errormsg;
                    } ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                Not Registered? <a href="register.php">Register Here</a>
            </div>
        </div>
    </div>
</section><!-- end of section-->
<form>
    <hr> <!-- draw a line-->
</form>
<footer>
    <!-- footer area-->
    <div>
        <?php include '../include/footer.php'; ?>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
</body>
</html>
