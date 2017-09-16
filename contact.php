<?php
// Start a session
ob_start();
session_start();

// include the database script
require_once 'db/dbconnect.php';

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
        <meta charset="utf-8">
        <title>Application Description - WebOil!</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Add css file-->
        <!-- <link href="css/styles.css" rel="stylesheet" type="text/css"/>-->
        <link rel="stylesheet" href="css/main-style.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a class="navbar-brand" href="index.php">Home | WebOil E-Solution</a>
                </div>
                <div class="collapse navbar-collapse" id="navweboil">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- check if same user is still same as the active session user and load appropriate menu options -->
                        <?php if (isset($_SESSION['usr_id'])) { ?>
                            <li class="active"><a href="signinindex.php">Home</a></>
                            <li><a href="menu/about.php">About Us</a></li>
                            <li><a href="menu/courses.php">Courses</a></li>
                            <li><a href="menu/assessment.php">Test Yourself</a></li>
                            <li><a href="menu/contact.php">Contact Us</a></li>
                            <li><a href="menu/help.php">Help</a></li>
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
                            <li><a href="index.php">Home</a></>
                            <li><a href="menu/about.php">About Us</a></li>
                            <li><a href="menu/courses.php">Courses</a></li>
                            <li class="active"><a href="menu/assessment.php">Test Yourself</a></li>
                            <li><a href="menu/contact.php">Contact Us</a></li>
                            <li><a href="menu/help.php">Help</a></li>
                            <li><a href="menu/login.php"><span class="glyphicon glyphicon-log-in">Login</a></li>
                            <li><a href="menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a>
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

        <?php if (isset($_SESSION['usr_id'])) { ?>
            <?php include 'include/signinheader.php'; ?>
        <?php } else { ?>
            <?php include 'include/header.php'; ?><?php } ?>
    </header>
    <form>
        <hr> <!-- draw a line-->
    </form>
    <section>
        <div class="container"><!-- div for accepting messages-->
            <form class="form-horizontal" role="form" method="post" action="/thanks.php">
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
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="example@domain.com"
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
    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    </html>
<?php ob_end_flush(); ?>