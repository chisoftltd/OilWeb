<?php
ob_start();
session_start();
require_once 'dbconnect.php';

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
        <title>RGUEthics- About Us</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="../css/main-style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
              crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
    </head>
    <body>
    <div>
        <?php include 'include/header.php'; ?>
    </div>
    <div class="container">
        <h3>Web Application Description - WebOil</h3>
        <p>
            Another time is upon us now, new ways of doing things and new ways of understanding! (Siôn Simon - West
            Midlands, 2011) New ways driven by technology, internet and web technology! I am here to chat about the
            future of education, eLearning! The first online teaching started in the early 1980s, based on the invention
            of computer conferencing by Murray Turoff in 1970 (Hiltz and Turoff, 1978).</p>
        <p>Computer conferencing or computer-mediated communication (CMC) enables asynchronous communication between
            dispersed individuals. Asynchronous means that the user can communicate at any time, because messages from
            all participants are centrally stored, ordered and accessible on demand.</p>
        <p>Early computer conferencing depended on local computer networks, usually within a single institution. One of
            the first institutions to offer teaching through computer conferencing was the New Jersey Institute of
            Technology in the USA. Using specially designed computer conferencing software called ‘Virtual Classroom’,
            between 1985 and 1987 Roxanne Hiltz and Murray Turoff constructed ‘a prototypical virtual classroom,
            offering many courses fully or partially online (Harasim, 1990).</p>
        <p>The popularity of eLearning is growing as internet speed becomes faster; and cost of computers and mobile
            devices drops. The initial cost of developing a very robust eLearning tutor could be very high when compared
            with developing classroom teaching materials and retraining the instructors.</p>
        <p>However, because of delivery cost – web servers and technical support - are lower than arranging classroom
            facilities, learners’ travel cost, job time lost and instructor time (Valentina and Nelly, 2014); eLearning
            tutor is economically better, so will OilWeb. </p>
        <p>Additional advantages (War Child Holland, 2015) OilWeb will offer is the wider reach, so course instructors
            or facilitators can reach dispersed participants that are:</p>
        <ul>
            <li>in difficult to reach places, like war zones;</li>
            <li>busy at work or have family commitments;</li>
            <li>hindered by cultural and religious beliefs;</li>
            <li>limited access to transportation.</li>
        </ul>

    </div>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
    </body>
    </html>
<?php ob_end_flush(); ?>