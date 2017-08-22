<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 22/08/2017
 * Time: 19:38
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
            $correctanswer1 = "";
            $correctanswer2 = "";
            $correctanswer3 = "";
            $correctanswer4 = "";
            $correctanswer5 = "";
            $correctanswer6 = "";
            $correctanswer7 = "";
            $correctanswer8 = "";

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];

            $answer3 = "";
            if (!empty($_POST['answer-question-3'])) {
                foreach ($_POST['answer-question-3'] as $selected) {
                    $answer3 = $answer3 . $selected;
                }
            }

            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = "";

            if (!empty($_POST['answer-question-6'])) {
                foreach ($_POST['answer-question-6'] as $selected) {
                    $answer6 = $answer6 . $selected;
                }
            }

            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];


            $totalCorrect = 0;

            if ($answer1 === "B") {
                $totalCorrect++;
            } else {
                $correctanswer1 = '<h4 style="color: darkgreen">B) Inflow of formation fluid into the
                                                wellbore.</h4>' . "<br/>";
                $correctanswer1 = "<h3 style='color: blue'>What is a Kick?</h3>" . "<br/>" . $correctanswer1;
                $correctanswer1 = $correctanswer1 . '<hr style="border: 1px solid black">';
            }

            if ($answer2 === "B") {
                $totalCorrect++;
            } else {
                $correctanswer2 = '<h4 style="color: darkgreen">B) False.</h4>' . "<p>Ans: Maximum Allowable Annular Surface Pressure</p>" . "<br/>";
                $correctanswer2 = "<h3 style='color: blue'>The full meaning of MAASP is Maximum Annulus Allowable Surface Pressure?</h3>" . "<br/>" . $correctanswer2;
                $correctanswer2 = $correctanswer2 . '<hr style="border: 1px solid black">';
            }


            if ($answer3 === "ABC") {
                $totalCorrect++;
            } else {
                $correctanswer3 = '<h4 style="color: darkgreen">A) Salt water</h4>' . "<br/>";
                $correctanswer3 = $correctanswer3 . '<h4 style="color: darkgreen">B) Gas</h4>' . "<br/>";
                $correctanswer3 = $correctanswer3 . '<h4 style="color: darkgreen">C) Oil</h4>' . "<br/>";
                $correctanswer3 = "<h3 style='color: blue'>A Kick can be composed of?</h3>" . "<br/>" . $correctanswer3 . "<br/>" . "<br/>";
                $correctanswer3 = $correctanswer3 . '<hr style="border: 1px solid black">';
            }


            if ($answer4 === "D") {
                $totalCorrect++;
            } else {
                $correctanswer4 = '<h4 style="color: darkgreen">D) Surface to bit and bit to surface.</h4>' . "<br/>" . "<br/>";
                $correctanswer4 = "<h3 style='color: blue'>What is lag time?</h3>" . "<br/>" . $correctanswer4;
                $correctanswer4 = $correctanswer4 . '<hr style="border: 1px solid black">';
            }
            if ($answer5 === "B") {
                $totalCorrect++;
            } else {
                $correctanswer5 = '<h4 style="color: darkgreen">B) Evidence of transition to an abnormal zone.</h4>' . "<br/>" . "<br/>";
                $correctanswer5 = "<h3 style='color: blue'>What is Drilling breaks?</h3>" . "<br/>" . $correctanswer5;
                $correctanswer5 = $correctanswer5 . '<hr style="border: 1px solid black">';
            }

            if ($answer6 === "CE") {
                $totalCorrect++;
            } else {
                $correctanswer6 = '<h4 style="color: darkgreen">C) Loss of circulation.</h4>' . "<br/>";
                $correctanswer6 = $correctanswer6 . '<h4 style="color: darkgreen">E) Swabbing.</h4>' . "<br/>";
                $correctanswer6 = "<h3 style='color: blue'>What can cause a Kick?</h3>" . "<br/>" . $correctanswer6;
                $correctanswer6 = $correctanswer6 . '<hr style="border: 1px solid black">';
            }

            if ($answer7 === "A") {
                $totalCorrect++;
            } else {
                $correctanswer7 = '<h4 style="color: darkgreen">A) It creates negative
                                            differential pressure</h4>';
                $correctanswer7 = "<h3 style='color: blue'>What is the effect of Swabbing on connection/trip gas?</h3>" . "<br/>" . $correctanswer7;
                $correctanswer7 = $correctanswer7 . '<hr style="border: 1px solid black">';
            }

            if ($answer8 === "B") {
                $correctanswer8 = '<h4 style="color: darkgreen">B) Driller’s method.</h4>';
                $correctanswer8 = "<h3 style='color: blue'>Which of these methods are used to manage a Kick?</h3>" . "<br/>" . $correctanswer8;
                $correctanswer8 = $correctanswer8 . '<hr style="border: 1px solid black">';
            }

            echo '<hr style="border: 2px solid green">';
            echo "<div id='results'>$totalCorrect / 8 correct</div>";

            if ($totalCorrect === 8) {
                echo '<hr style="border: 2px solid green">';
                echo "<h3 style='color: yellow'>Perfect Score! Proceed to Test yourself in <strong><a href='/menu/assessment.php'>Well Control</a> </strong></h3>";
                echo "What is a Kick?" . "<br/>" . $correctanswer1 . "<br/>" . "The full meaning of MAASP is Maximum Annulus Allowable Surface Pressure?" . "<br/>" . $correctanswer2 . "<br/>" . "A Kick can be composed of?" . "<br/>" . $correctanswer4 . "<br/>" . "What is lag time?" . "<br/>" . "What is Drilling breaks?" . "<br/>" . $correctanswer5 . "<br/>" . "What can cause a Kick?" . "<br/>" . $correctanswer6 . "<br/>" . "What is the effect of Swabbing on connection/trip gas?" . "<br/>" . $correctanswer7 . "<br/>" . $correctanswer8;

            } else {
                echo '<hr style="border: 2px solid green">';
                echo '<h2>Correction</h2>';
                echo '<hr style="border: 2px solid green">';
                $correction = '';
                if ($correctanswer1 !== '') {
                    $correction = $correctanswer1 . "<br/>";
                }
                if ($correctanswer2 !== '') {
                    $correction = $correction . $correctanswer2 . "<br/>";
                }
                if ($correctanswer3 !== '') {
                    $correction = $correction . $correctanswer3 . "<br/>";
                }
                if ($correctanswer4 !== '') {
                    $correction = $correction . $correctanswer4 . "<br/>";
                }
                if ($correctanswer5 !== '') {
                    $correction = $correction . $correctanswer5 . "<br/>";
                }
                if ($correctanswer6 !== '') {
                    $correction = $correction . $correctanswer6 . "<br/>";
                }
                if ($correctanswer7 !== '') {
                    $correction = $correction . $correctanswer7 . "<br/>";
                }
                if ($correctanswer8 !== '') {
                    $correction = $correction . $correctanswer8 . "<br/>";
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