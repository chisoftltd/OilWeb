<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 21/04/2017
 * Time: 16:19
 */

// Start a session
session_start();

// include the database script
/*include_once 'db/dbconnect.php';*/

//end any active user session
//unset($_session['user_id']);

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
                        <li><a href="menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
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
    <div class="content">
        <div id="page-wrap">

            <h1 style="text-align: center">Your Quiz score for WebOil</h1>

            <?php
            $correctAns_1 = "";
            $correctAns_2 = "";
            $correctAns_3 = "";
            $correctAns_4 = "";
            $correctAns_5 = "";
            $correctAns_6 = "";
            $correctAns_7 = "";
            
            $ans_1 = $_POST['ans_to_DrillQue_1'];
            $ans_2 = $_POST['ans_to_DrillQue_2'];

            $ans_3 = "";
            if (!empty($_POST['ans_to_DrillQue_3'])) {
                foreach ($_POST['ans_to_DrillQue_3'] as $selected) {
                    $ans_3 = $ans_3 . $selected;
                }
            }

            $ans_4 = $_POST['ans_to_DrillQue_4'];
            $ans_5 = $_POST['ans_to_DrillQue_5'];
            $ans_6 = $_POST['ans_to_DrillQue_6'];
            $ans_7 = "";


            if (!empty($_POST['ans_to_DrillQue_7'])) {
                foreach ($_POST['ans_to_DrillQue_7'] as $selected) {
                    $ans_7 = $ans_7 . $selected;
                }
            }


            $totalCorrect = 0;

            if ($ans_1 === "A") {
                $totalCorrect++;
            } else {
                $correctAns_1 = '<h4 style="color: darkgreen">A) Control subsurface pressures</h4>' . "<br/>" . "<br/>";
                $correctAns_1 = "<h3 style='color: blue'>What is drilling Mud used for?</h3>" . "<br/>" . $correctAns_1;
                $correctAns_1 = $correctAns_1 . '<hr style="border: 1px solid black">';
            }

            if ($ans_2 === "B") {
                $totalCorrect++;
            } else {
                $correctAns_2 = '<h4 style="color: darkgreen">B) Mud Balance</h4>' . "<br/>" . "<br/>";
                $correctAns_2 = "<h3 style='color: blue'>What instrument is used to measure Mud Weight?</h3>" . "<br/>" . $correctAns_2;
                $correctAns_2 = $correctAns_2 . '<hr style="border: 1px solid black">';
            }


            if ($ans_3 === "AC") {
                $totalCorrect++;
            } else {
                $correctAns_3 = '<h4 style="color: darkgreen">A) Chemical Discharge Records (DTI or agent)</h4>' . "<br/>";
                $correctAns_3 = $correctAns_3 . '<h4 style="color: darkgreen">C) Incident reporting (DTI/HSE)</h4>' . "<br/>";
                $correctAns_3 = "<h3 style='color: blue'>Which of the following are permits needed before drilling commences?</h3>" . "<br/>" . $correctAns_3 . "<br/>" . "<br/>";
                $correctAns_3 = $correctAns_3 . '<hr style="border: 1px solid black">';
            }


            if ($ans_4 === "A") {
                $totalCorrect++;
            } else {
                $correctAns_4 = '<h4 style="color: darkgreen">A) Drilling Superintendent</h4>' . "<br/>" . "<br/>";
                $correctAns_4 = "<h3 style='color: blue'>Which of the following personnel should not be on site during drilling?</h3>" . "<br/>" . $correctAns_4;
                $correctAns_4 = $correctAns_4 . '<hr style="border: 1px solid black">';
            }
            if ($ans_5 === "B") {
                $totalCorrect++;
            } else {
                $correctAns_5 = '<h4 style="color: darkgreen">B) Semisubmersible rigs</h4>' . "<br/>" . "<br/>";
                $correctAns_5 = "<h3 style='color: blue'>Which of the following RIG is used offshore?</h3>" . "<br/>" . $correctAns_5;
                $correctAns_5 = $correctAns_5 . '<hr style="border: 1px solid black">';
            }
            if ($ans_6 === "D" or $ans_6 === "ABC") {
                $totalCorrect++;
            } else {
                $correctAns_6 = '<h4 style="color: darkgreen">A) Oil Based Mud (OBM)</h4>' . "<br/>";
                $correctAns_6 = $correctAns_6 . '<h4 style="color: darkgreen">B) Water Based Mud (WBM)</h4>' . "<br/>";
                $correctAns_6 = $correctAns_6 . '<h4 style="color: darkgreen">C) Gas, aerated muds</h4>' . "<br/>";
                $correctAns_6 = $correctAns_6 . '<h4 style="color: black">OR</h4>' . "<br/>";
                $correctAns_6 = $correctAns_6 . '<h4 style="color: darkgreen">D) All of the above</h4>' . "<br/>";
                $correctAns_6 = "<h3 style='color: blue'>Which of the following is constituent of Mud?</h3>" . "<br/>" . $correctAns_6;
                $correctAns_6 = $correctAns_6 . '<hr style="border: 1px solid black">';
            }

            if ($ans_7 === "ABC" or $ans_7 === "D") {
                $totalCorrect++;
            } else {
                $correctAns_7 = '<h4 style="color: darkgreen">A) sub-surface complexity</h4>' . "<br/>";
                $correctAns_7 = $correctAns_7 . '<h4 style="color: darkgreen">B) location</h4>' . "<br/>";
                $correctAns_7 = $correctAns_7 . '<h4 style="color: darkgreen">C) type of well</h4>';
                $correctAns_7 = "<h3 style='color: blue'>The time required to plan and execute a well construction programme is dependent on (select all that apply)?</h3>" . "<br/>" . $correctAns_7;
                $correctAns_7 = $correctAns_7 . '<hr style="border: 1px solid black">';
            }


            echo '<hr style="border: 2px solid green">';
            echo "<div id='results'>$totalCorrect / 7 correct</div>";

            if ($totalCorrect === 7) {
                echo '<hr style="border: 2px solid green">';
                echo "<h3 style='color: yellow'>Perfect Score! Proceed to Test yourself in <strong><a href='/menu/assessment.php'>Well Control</a> </strong></h3>";
                echo "What is drilling Mud used for?" . "<br/>" . $correctAns_1 . "<br/>" . "What instrument is used to measure Mud Weight?" . "<br/>" . $correctAns_2 . "<br/>" . "Which of the following personnel should not be on site during drilling?" . "<br/>" . $correctAns_4 . "<br/>" . "Which of the following RIG is used offshore?" . "<br/>" . "Which of the following RIG is used offshore?" . "<br/>" . $correctAns_5 . "<br/>" . "Which of the following is constituent of Mud?" . "<br/>" . $correctAns_6 . "<br/>" . "The time required to plan and execute a well construction programme is dependent on (select all that apply)?" . "<br/>" . $correctAns_7;

            } else {
                echo '<hr style="border: 2px solid green">';
                echo '<h2>Correction</h2>';
                echo '<hr style="border: 2px solid green">';
                $correction = '';
                if ($correctAns_1 !== '') {
                    $correction = $correctAns_1 . "<br/>";
                }
                if ($correctAns_2 !== '') {
                    $correction = $correction . $correctAns_2 . "<br/>";
                }
                if ($correctAns_3 !== '') {
                    $correction = $correction . $correctAns_3 . "<br/>";
                }
                if ($correctAns_4 !== '') {
                    $correction = $correction . $correctAns_4 . "<br/>";
                }
                if ($correctAns_5 !== '') {
                    $correction = $correction . $correctAns_5 . "<br/>";
                }
                if ($correctAns_6 !== '') {
                    $correction = $correction . $correctAns_6 . "<br/>";
                }
                if ($correctAns_7 !== '') {
                    $correction = $correction . $correctAns_7 . "<br/>";
                }
                echo $correction;
                echo '<hr style="border: 2px solid green">';
                echo "<h3><strong><a href='/menu/assessment.php'><button>Go back and try again</button></a> </strong></h3>";
            }


            ?>

        </div>
    </div>

    <script type="text/javascript">
        var gaJsHost = (("https:" === document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        var pageTracker = _gat._getTracker("UA-68528-29");
        pageTracker._initData();
        pageTracker._trackPageview();
    </script>

</section><!-- end of section-->
<form>
    <hr> <!-- draw a line-->
</form>
<footer>
    <!-- footer area-->
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
</body>
</html>