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
                            <li><a href="/menu/about.php">About Us</a></li>
                            <li><a href="/menu/courses.php">Courses</a></li>
                            <li><a href="/menu/assessment.php">Assessment</a></li>
                            <li><a href="/menu/submission.php">Submission</a></li>
                            <li><a href="/menu/demo.php">Demo</a></li>
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
        <div class="container" style="margin-top: auto; background-color:#b0e0e6; border:3px solid #006400;">
            <div class="panel-heading">Tell us where we are doing badly - WebOil</div>
            <div class="panel-body">
                <form action="sendemail.php" method="post" style="margin: 0 auto; width:250px;">
                    <label for="subject">Subject of email:</label><br>
                    <input type="text" name="subject" id="subject"/><br>
                    <label for="body">Body of email:</label><br>
                    <textarea name="body" id="body" rows="10" cols="35"></textarea><br>
                    <input type="submit" name=submit value="Submit"/>
                </form>
            </div>
        </div>
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