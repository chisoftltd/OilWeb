<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 30/07/2017
 * Time: 17:27
 */


// Start a session
session_start();
/*
if (!isset($_SESSION['usr_id'])) {
    header("Location: index.php");
    echo "''<h1>.Timed Out!.</h1>";
}*/

// include the database script
include_once '../db/dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);

    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if (strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if ($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if (mysqli_query($link, "INSERT INTO students(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Successfully Registered!";
            header("refresh:5; url=login.php");
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WebOil | Registration Page!</title>
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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navweboil">
                    <!--<span class="sr-only">Toggle navigation</span>-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">WebOil | Registration</a>
            </div>
            <div class="collapse navbar-collapse" id="navweboil">
                <ul class="nav navbar-nav navbar-right">
                    <!-- check if same user is still same as the active session user and load appropriate menu options -->
                    <?php if (isset($_SESSION['usr_id'])) { ?>
                        <li><a href="signinindex.php">Home</a></>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li><a href="/menu/courses.php">Courses</a></li>
                        <li><a href="/menu/assessment.php">Assessment</a></li>
                        <li><a href="/menu/submission.php">Submission</a></li>
                        <li><a href="/menu/demo.php">Demo</a></li>
                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><p class="navbar-text"><span
                                        class="glyphicon glyphicon-user">Signed in as <?php echo $_SESSION['usr_name']; ?>
                            </p></li>
                        <li><a href="/index.php"><span class="glyphicon glyphicon-log-out">Log Out</a></li>
                        <form class="navbar-form navbar-right">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php } else { ?>
                        <li><a href="/index.php">Home</a></>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li><a href="/menu/courses.php">Courses</a></li>
                        <li><a href="/menu/assessment.php">Assessment</a></li>
                        <li><a href="/menu/submission.php">Submission</a></li>
                        <li><a href="/menu/demo.php">Demo</a></li>
                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><a href="/menu/login.php"><span class="glyphicon glyphicon-log-in">Login</a></li>
                        <li class="active"><a href="/menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a>
                        </li>
                        <form class="navbar-form navbar-right">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

</header>
<form>
    <hr> <!-- draw a line-->
</form>
<section>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Student Registration</legend>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Full Name" required
                               value="<?php if ($error) echo $name; ?>" class="form-control"/>
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" placeholder="Email" required
                               value="<?php if ($error) echo $email; ?>" class="form-control"/>
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control"/>
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required
                               class="form-control"/>
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="signup" value="Register" class="btn btn-primary"/>
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) {
                    echo $successmsg;
                } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) {
                    echo $errormsg;
                } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            Already Registered? <a href="login.php">Login Here</a>
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