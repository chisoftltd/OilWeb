<?php
ob_start();
session_start();
/*
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
        $res = mysqli_query($link, ("SELECT userId, userName, userPass FROM students WHERE userEmail='$email'"));
        $row = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
        if ($count == 1 && $row['userPass'] == $password) {
            $_SESSION['user'] = $row['userId'];
            header("Location: login.php");
        } else {
            $errMSG = "Incorrect Credentials, Try again...";
        }
    }
}*/
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105658588-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-105658588-1');
        </script>

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5281059387375686",
                enable_page_level_ads: true
            });
        </script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>OilWeb | About Us</title>
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
                            <li class="active"><a href="/menu/about.php">About Us</a></li>
                            <li><a href="/menu/courses.php">Courses</a></li>
                            <li><a href="/menu/assessment.php">Test Yourself</a></li>
                            <li><a href="/menu/submission.php">Submission</a></li>
                            <li class="active"><a href="/menu/contact.php">Contact Us</a></li>
                            <li><a href="/menu/help.php">Help</a></li>
                            <li><p class="navbar-text"><span
                                            class="glyphicon glyphicon-user">Signed in as <?php echo $_SESSION['usr_name']; ?>
                                </p></li>
                            <li><a href="/index.php"><span class="glyphicon glyphicon-log-out">Log Out</a></li>

                        <?php } else { ?>
                            <li><a href="/index.php">Home</a></li>
                            <li class="active"><a href="/menu/about.php">About Us</a></li>
                            <li><a href="/menu/courses.php">Courses</a></li>
                            <li><a href="/menu/assessment.php">Test Yourself</a></li>
                            <li><a href="/menu/contact.php">Contact Us</a></li>
                            <li><a href="/menu/help.php">Help</a></li>
                            <li><a href="/menu/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <li><a href="/menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a>
                            </li>

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
    <section>

        <div class="container" style="background-color: #b0e0e6">

            <h2 style="margin-top:10px; text-align: center">OilWeb | Web Application Description</h2>
            <form>
                <hr>
            </form>
            <p>
                Another time is upon us now, new ways of doing things and new ways of understanding! (Siôn Simon - West
                Midlands, 2011) New ways driven by technology, internet and web technology! I am here to chat about the
                future of education, eLearning! The first online teaching started in the early 1980s, based on the
                invention
                of computer conferencing by Murray Turoff in 1970 (Hiltz and Turoff, 1978).</p>
            <p>Computer conferencing or computer-mediated communication (CMC) enables asynchronous communication between
                dispersed individuals. Asynchronous means that the user can communicate at any time, because messages
                from
                all participants are centrally stored, ordered and accessible on demand.</p>
            <p>Early computer conferencing depended on local computer networks, usually within a single institution. One
                of
                the first institutions to offer teaching through computer conferencing was the New Jersey Institute of
                Technology in the USA. Using specially designed computer conferencing software called ‘Virtual
                Classroom’,
                between 1985 and 1987 Roxanne Hiltz and Murray Turoff constructed ‘a prototypical virtual classroom,
                offering many courses fully or partially online (Harasim, 1990).</p>
            <p>The popularity of eLearning is growing as internet speed becomes faster; and cost of computers and mobile
                devices drops. The initial cost of developing a very robust eLearning tutor could be very high when
                compared
                with developing classroom teaching materials and retraining the instructors.</p>
            <p>However, because of delivery cost – web servers and technical support - are lower than arranging
                classroom
                facilities, learners’ travel cost, job time lost and instructor time (Valentina and Nelly, 2014);
                eLearning
                tutor is economically better, so will OilWeb. </p>
            <p>Additional advantages (War Child Holland, 2015) OilWeb will offer is the wider reach, so course
                instructors
                or facilitators can reach dispersed participants that are:</p>
            <ul>
                <li>in difficult to reach places, like war zones;</li>
                <li>busy at work or have family commitments;</li>
                <li>hindered by cultural and religious beliefs;</li>
                <li>limited access to transportation.</li>
            </ul>
            <form>
                <hr>
            </form>
            <p style="text-align: center"> The idea of this site is that of my supervisor <strong>Dr Ines
                    Arana,</strong><br>
                Postgraduate
                Programme Leader for the
                School of Computing <br> Robert Gordon University,<br> Garthdee House, <br>Garthdee Road, <br>Aberdeen,
                AB10 7QB,
                Scotland, UK </p>
            <form>
                <hr>
            </form>
            <P style="text-align: center">The practical and technical responsibility of this work is that of mine,
                <strong>Mr
                    B. U,
                    Chinwe</strong></P>
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