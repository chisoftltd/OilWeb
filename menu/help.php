<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 30/07/2017
 * Time: 17:26
 */
// include the database script
include_once '../db/dbconnect.php';

//end any active user session
unset($_session['user_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>OilWeb | OilWeb Help Resources</title>
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
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
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
                <a class="navbar-brand" href="/index.php">OilWeb | OilWeb Help Resources</a>
            </div>
            <div class="collapse navbar-collapse" id="navoilweb">
                <ul class="nav navbar-nav navbar-right">
                    <!-- check if same user is still same as the active session user and load appropriate menu options -->
                    <?php if (isset($_SESSION['usr_id'])) { ?>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li><a href="/menu/courses.php">Courses</a></li>
                        <li><a href="/menu/assessment.php">Test Yourself</a></li>
                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li class="active"><a href="/menu/help.php">Help</a></li>
                        <li><p class="navbar-text"><span
                                        class="glyphicon glyphicon-user">Signed in as <?php echo $_SESSION['usr_name']; ?>
                            </p></li>
                        <li><a href="/index.php"><span class="glyphicon glyphicon-log-out">Log Out</a></li>

                    <?php } else { ?>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li><a href="/menu/courses.php">Courses</a></li>
                        <li><a href="/menu/assessment.php">Test Yourself</a></li>
                        <li class="active"><a href="/menu/help.php">Help</a></li>
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

    <div class="container" style="background-color: #b0e0e6">
        <h1>Help Recourse</h1>
        <p>Here is the repertory of help recourse of OilWeb. Please this content is not helpful, do contact me using
            contact details on the contact us page.</p>
        <h2>System Requirements</h2>
        <ul>
            <li> Internet connection: Required</li>
            <li>
                Screen Resolution: 1024x768 or larger
            </li>
            <li>
                Memory: 2 GB or higher
            </li>
            <li>
                Processor: Intel Pentium 3 or higher
            </li>
            <li>
                Operating System:
            </li>
            <li>
                <table>
                    <tr>
                        <th>Windows</th>
                        <th>Mac</th>
                        <th>Linux</th>
                    </tr>
                    <tr>
                        <th>Windows Vista or higher</th>
                        <th>Mac OS X 10.8.x or later</th>
                        <th>Ubuntu 11.10+</th>
                    </tr>
                </table>
            </li>
        </ul>
        <h2>Generating course hard copy (PDF)</h2>
        <ol>
            <li>
                Go to Home Page or Course Page;
            </li>
            <li>
                Select any course button;
            </li>
            <li>
                Scroll to page bottom;
            </li>
            <li>
                Click on <strong>Generate PDF.</strong>
            </li>
        </ol>
        <h2>Display Course page</h2>
        <ol>
            <li>
                Go to Home Page or Course Page;
            </li>
            <li>
                Select any course button.
            </li>
        </ol>
        <h2>Display Video course material</h2>
        <ol>
            <li>
                Go to Home Page or Course Page;
            </li>
            <li>
                Select any course button;
            </li>
            <li>
                Click on the video <i style="color: blue"><a href="/menu/courses.php">button (blue)</a></i> on the
                course page top right.
            </li>
        </ol>
        <h2>Taking a quiz</h2>
        <ol>
            <li>
                From the navigation page select Quiz link to access the quiz page;
            </li>
            <li>
                On quiz page select quiz of your choice;
            </li>
            <li>
                Click the <strong style="color: blue"><a href="/menu/courses.php">Submit</a></strong> bolton, after
                selecting your choice answers.
            </li>
        </ol>
        <h2>Quiz Result</h2>
        <ol>
            <li>
                Follow the steps on taking a quiz;
            </li>
            <li>
                On the result page, at the fot select <strong>Generate PDF</strong> to get a hard copy.
            </li>
        </ol>
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