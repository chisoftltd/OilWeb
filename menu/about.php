<?php
ob_start();
session_start();
require_once '../db/dbconnect.php';

// it will never let you open index(login) page if session is set
if (isset($_SESSION['user']) != "") {
    header("Location: login.php");
    exit;
}

$error = false;

if (isset($_POST['btn-login'])) {

    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    // prevent sql injections / clear user invalid inputs

    if (empty($email)) {
        $error = true;
        $emailError = "Please enter your email address.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    }

    if (empty($pass)) {
        $error = true;
        $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {

        $password = hash('sha256', $pass); // password hashing using SHA256

        $res = mysqli_query($link, ("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'"));
        $row = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

        if ($count == 1 && $row['userPass'] == $password) {
            $_SESSION['user'] = $row['userId'];
            header("Location: login.php");
        } else {
            $errMSG = "Incorrect Credentials, Try again...";
        }
    }
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>WebOil | About Us</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/styles.css" type="text/css"/>
        <link rel="stylesheet" href="/css/main-style.css">
    </head>
    <body>
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
                    <a class="navbar-brand" href="/index.php">Home | WebOil E-Solution</a>
                </div>
                <div class="collapse navbar-collapse" id="navweboil">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- check if same user is still same as the active session user and load appropriate menu options -->
                        <?php if (isset($_SESSION['usr_id'])) { ?>
                            <li><a href="signinindex.php">Home</a></>
                            <li class="active"><a href="/menu/about.php">About Us</a></li>
                            <li><a href="/menu/courses.php">Courses</a></li>
                            <li><a href="/menu/assessment.php">Assessment</a></li>
                            <li><a href="/menu/submission.php">Submission</a></li>
                            <li><a href="/menu/demo.php">Demo</a></li>
                            <li class="active"><a href="/menu/contact.php">Contact Us</a></li>
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
                            <li class="active"><a href="/menu/about.php">About Us</a></li>
                            <li><a href="/menu/courses.php">Courses</a></li>
                            <li><a href="/menu/assessment.php">Assessment</a></li>
                            <li><a href="/menu/submission.php">Submission</a></li>
                            <li><a href="/menu/demo.php">Demo</a></li>
                            <li><a href="/menu/contact.php">Contact Us</a></li>
                            <li><a href="/menu/help.php">Help</a></li>
                            <li><a href="/menu/login.php"><span class="glyphicon glyphicon-log-in">Login</a></li>
                            <li><a href="/menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a>
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
    <section>

        <div class="container" style="margin-top: 70px; background-color:#b0e0e6; border:3px solid #006400;">
            <h3 class="panel-heading">Web Application Description - WebOil</h3>
            <div class="panel-body"><p>
                    This web application which I called RGUEthics is an online application that will manage RGU
                    student’s
                    experiment ethics. </p>
                <p>The interface should have a logo, navigation bar with elements like “Home”, “About Us”,
                    “Student”,
                    “Experiment Approval Officers (EAO)”, “Contact US” and “Login”. </p>
                <p>The interface should have a “News Section” about current government and university policy on
                    research
                    ethics. </p>
                <p>The landing page should contain a summary of, a least five, ongoing experiments. Also present
                    on
                    the
                    interface is are logos to Social media platforms like Facebook etc. </p>
                <p>The application will allow students, after authentication to seek approval for their propose
                    experiment
                    from
                    EAO. EAOs should be able to approve, request additional information or reject an experiment
                    proposal. </p>
                <p>To implement fairness and objectivity each experiment will be randomly assign to two
                    different
                    EAOs, by
                    an
                    Administrator.
                </p>
                <p>Furthermore, the application will allow students and staff to submit assessment of EAO and
                    the
                    EAOs in
                    turn
                    will also have same permission for the Administrators.
                </p>
            </div>
        </div>
    </section>
    <footer>
        <div>
            <?php include '../include/footer.php'; ?>
        </div>
    </footer>

    </body>
    </html>
<?php ob_end_flush(); ?>