<?php
ob_start();
session_start();
require_once '../db/dbconnect.php';

// it will never let you open index(login) page if session is set
if (isset($_SESSION['user']) != "") {
    header("Location: login.php");
    exit;
}


//if statement to process a POST data from a form when a submit buuton is clicked
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form';
    $to = 'example@bootstrapbay.com';
    $subject = 'Message from Contact Demo ';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
    }

    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail($to, $subject, $body, $from)) {
            $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    }
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>WebOil | Contact Us</title>
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
                            <li><a href="/menu/about.php">About Us</a></li>
                            <li><a href="/menu/courses.php">Courses</a></li>
                            <li><a href="/menu/assessment.php">Test Yourself</a></li>
                            <li><a href="/menu/submission.php">Submission</a></li>
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
                            <li><a href="/menu/about.php">About Us</a></li>
                            <li><a href="/menu/courses.php">Courses</a></li>
                            <li><a href="/menu/assessment.php">Test Yourself</a></li>
                            <li><a href="/menu/submission.php">Submission</a></li>
                            <li class="active"><a href="/menu/contact.php">Contact Us</a></li>
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

    <hr>
    <section>
        <div class="container"> <!--div with address and map information-->
            <form>
                <div class="row">
                    <div id="map-outer" class="col-md-12">
                        <div id="address" class="col-md-4">
                            <h2>Our Location</h2>
                            <address>
                                <strong>WebOil | Research Ethics Solution</strong><br>
                                Robert Gordon University<br>
                                Garthdee House<br>
                                Garthdee Road<br>
                                Aberdeen<br>
                                AB10 7QB<br>
                                Scotland<br>
                                United Kingdom<br>
                                <abbr>P:</abbr> +44 1224 262000
                            </address>
                        </div>
                        <div id="map-container" class="col-md-8"></div>
                        <script> //function to get map location

                            function init_map() {
                                var var_location = new google.maps.LatLng(57.1184, -2.1410);

                                var var_mapoptions = {
                                    center: var_location,
                                    zoom: 14
                                };

                                var var_marker = new google.maps.Marker({
                                    position: var_location,
                                    map: var_map,
                                    title: "Venice"
                                });

                                var var_map = new google.maps.Map(document.getElementById("map-container"),
                                    var_mapoptions);

                                var_marker.setMap(var_map);

                            }

                            google.maps.event.addDomListener(window, 'load', init_map);

                        </script>
                    </div>
                </div>
            </form>
        </div><!-- end of div container -->
        <form>
            <hr>
        </form>
        <div class="container"><!-- div for accepting messages-->
            <form class="form-horizontal" role="form" method="post" action="index.php">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name"
                               value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        <?php echo "<p class='text-danger'>$errName</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com"
                               value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="4"
                              name="message"><?php echo htmlspecialchars($_POST['message']); ?></textarea>
                        <?php echo "<p class='text-danger'>$errMessage</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                        <?php echo "<p class='text-danger'>$errHuman</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <?php echo $result; ?>
                    </div>
                </div>
            </form>
        </div><!-- end of content div-->
    </section>
    <hr>
    <footer>
        <div>
            <?php include '../include/footer.php'; ?>

        </div>
    </footer>

    </body>
    </html>
<?php ob_end_flush(); ?>