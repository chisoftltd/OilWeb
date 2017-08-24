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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/jspdf.min.js"></script>
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
                        <li><a href="signinindex.php">Home</a></>
                        <li><a href="menu/about.php">About Us</a></li>
                        <li><a href="menu/courses.php">Courses</a></li>
                        <li class="active"><a href="menu/assessment.php">Test Yourself</a></li>
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
            $correctAns_8 = "";
            $correctAns_9 = "";

            $ans_1 = $_POST['Ans_to_ContolQue_1'];
            $ans_2 = $_POST['Ans_to_ContolQue_2'];

            $ans_3 = "";
            if (!empty($_POST['ans_to_ContolQue_3'])) {
                foreach ($_POST['ans_to_ContolQue_3'] as $selected) {
                    $ans_3 = $ans_3 . $selected;
                }
            }

            $ans_4 = $_POST['ans_to_ContolQue_4'];
            $ans_5 = $_POST['ans_to_ContolQue_5'];
            $ans_6 = "";

            if (!empty($_POST['ans_to_ContolQue_6'])) {
                foreach ($_POST['ans_to_ContolQue_6'] as $selected) {
                    $ans_6 = $ans_6 . $selected;
                }
            }

            $ans_7 = $_POST['ans_to_ContolQue_7'];
            $ans_8 = $_POST['ans_to_ContolQue_8'];
            $ans_9 = "";

            if (!empty($_POST['ans_to_ContolQue_9'])) {
                foreach ($_POST['ans_to_ContolQue_9'] as $selected) {
                    $ans_9 = $ans_9 . $selected;
                }
            }

            /* echo $ans_1;
             echo $ans_2;
             echo $ans_3;
             echo $ans_4;
             echo $ans_5;
             echo $ans_6;
             echo $ans_7;
             echo $ans_8;
             echo $ans_9;*/


            $totalCorrect = 0;

            if ($ans_1 === "B") {
                $totalCorrect++;
            } else {
                $correctAns_1 = '<h4 style="color: darkgreen">B) Inflow of formation fluid into the
                                                wellbore.</h4>' . "<br/>";
                $correctAns_1 = "<h3 style='color: blue'>1. What is a Kick during drilling?</h3>" . "<br/>" . $correctAns_1;
                $correctAns_1 = $correctAns_1 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_1 = $correctAns_1 . '<p><i><strong>Explanation:</strong><br/> During drilling, formation 
                fluid pressure higher than annular fluid pressure (Insufficient mud weight), swabbing of drill string or lost criculation can cause formation 
                fluid inflow into the annular.</i></p>';
                $correctAns_1 = $correctAns_1 . '<hr style="border: 1px solid black">';
            }

            if ($ans_2 === "B") {
                $totalCorrect++;
            } else {
                $correctAns_2 = '<h4 style="color: darkgreen">B) False.</h4>' . "<p>Ans: Maximum Annular Allowable Surface Pressure</p>" . "<br/>";
                $correctAns_2 = "<h3 style='color: blue'>2. The full meaning of MAASP is Maximum Annular Allowable Surface Pressure?</h3>" . "<br/>" . $correctans_2;
                $correctAns_2 = $correctAns_2 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_2 = $correctAns_2 . '<p><strong>Explanation:</strong><br/> This is the annulus pressure at the surface that corresponds to the pressure at
                                        the weakest point of the hole.<br/></p>';
                $correctAns_2 = $correctAns_2 . '<hr style="border: 1px solid black">';
            }


            if ($ans_3 === "ABC") {
                $totalCorrect++;
            } else {
                $correctAns_3 = '<h4 style="color: darkgreen">A) Salt water</h4>' . "<br/>";
                $correctAns_3 = $correctAns_3 . '<h4 style="color: darkgreen">B) Gas</h4>' . "<br/>";
                $correctAns_3 = $correctAns_3 . '<h4 style="color: darkgreen">C) Oil</h4>' . "<br/>";
                $correctAns_3 = "<h3 style='color: blue'>3. A Kick can be composed of what fluids (check all)?</h3>" . "<br/>" . $correctAns_3 . "<br/>" . "<br/>";
                $correctAns_3 = $correctAns_3 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_3 = $correctAns_3 . '<p><strong>Explanation:</strong><br/> A kick is the inflow of formation fluid into the annular. The fluid can be 
                gas, oil, salt water or combination of all.</p>';
                $correctAns_3 = $correctAns_3 . '<hr style="border: 1px solid black">';
            }


            if ($ans_4 === "D") {
                $totalCorrect++;
            } else {
                $correctAns_4 = '<h4 style="color: darkgreen">D) Surface to bit and bit to surface.</h4>' . "<br/>" . "<br/>";
                $correctAns_4 = "<h3 style='color: blue'>4. What is lag time of cuttings during drilling?</h3>" . "<br/>" . $correctAns_4;
                $correctAns_4 = $correctAns_4 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_4 = $correctAns_4 . '<p><strong>Explanation:</strong><br/> The time taken for cuttings to 
                reach the surface. The term is also used in place of cycle time.</p>';
                $correctAns_4 = $correctAns_4 . '<hr style="border: 1px solid black">';
            }
            if ($ans_5 === "B") {
                $totalCorrect++;
            } else {
                $correctAns_5 = '<h4 style="color: darkgreen">B) Evidence of transition to an abnormal zone.</h4>' . "<br/>" . "<br/>";
                $correctAns_5 = "<h3 style='color: blue'>5. What is Drilling breaks?</h3>" . "<br/>" . $correctAns_5;
                $correctAns_5 = $correctAns_5 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_5 = $correctAns_5 . '<p><strong>Explanation:</strong><br/> An abrupt increase in the rate of penetration of the drill bit during a well-drilling operation.</p>';
                $correctAns_5 = $correctAns_5 . '<hr style="border: 1px solid black">';
            }

            if ($ans_6 === "CE") {
                $totalCorrect++;
            } else {
                $correctAns_6 = '<h4 style="color: darkgreen">C) Loss of circulation.</h4>' . "<br/>";
                $correctAns_6 = $correctAns_6 . '<h4 style="color: darkgreen">E) Swabbing.</h4>' . "<br/>";
                $correctAns_6 = "<h3 style='color: blue'>6. What can cause a Kick during drilling (list all)?</h3>" . "<br/>" . $correctAns_6;
                $correctAns_6 = $correctAns_6 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_6 = $correctAns_6 . '<p><strong>Explanation:</strong><br/> A kick is formation 
                fluid inflow into the annular and cn be cuased by loss of circulation, Swabbing, improper hole fill-up during trips, insufficient mud weight.</p>';
                $correctAns_6 = $correctAns_6 . '<hr style="border: 1px solid black">';
            }

            if ($ans_7 === "A") {
                $totalCorrect++;
            } else {
                $correctAns_7 = '<h4 style="color: darkgreen">A) It creates negative
                                            differential pressure</h4>';
                $correctAns_7 = "<h3 style='color: blue'>7. What is the effect of Swabbing on connection/trip gas?</h3>" . "<br/>" . $correctAns_7;
                $correctAns_7 = $correctAns_7 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_7 = $correctAns_7 . '<p><strong>Explanation:</strong><br/> Connection gas: It is relatively 
                small amount of gas that enters well when mud pump is stopped because ECD (equivalent circulating density) decreases 
                when stop pumping. Connection gas indicates that mud weight in hole is less than formation pressure.</p>';
                $correctAns_7 = $correctAns_7 . '<hr style="border: 1px solid black">';
            }

            if ($ans_8 === "B") {
                $totalCorrect++;
            } else {
                $correctAns_8 = '<h4 style="color: darkgreen">B) Driller’s method.</h4>';
                $correctAns_8 = "<h3 style='color: blue'>8. Which of these method is used to manage a Kick?</h3>" . "<br/>" . $correctAns_8;
                $correctAns_8 = $correctAns_8 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_8 = $correctAns_8 . '<p><strong>Explanation:</strong><br/> Kick can be manage with different methods like: 
                - Concurrent method<br>
                - Driller’s method<br>
                - Wait and Weight<br>
                - Top Kill method.</p>';
                $correctAns_8 = $correctAns_8 . '<hr style="border: 1px solid black">';
            }

            if ($ans_9 === "BCE") {
                $totalCorrect++;
            } else {
                $correctAns_9 = '<h4 style="color: darkgreen">B) Blow out preventers</h4>' . "<br/>";
                $correctAns_9 = $correctAns_9 . '<h4 style="color: darkgreen">C) Casing head.</h4>' . "<br/>";
                $correctAns_9 = $correctAns_9 . '<h4 style="color: darkgreen">E) Drilling Spool.</h4>' . "<br/>";
                $correctAns_9 = "<h3 style='color: blue'>9. Surface Well Control Equipment is made of?</h3>" . "<br/>" . $correctAns_9 . "<br/>" . "<br/>";
                $correctAns_9 = $correctAns_9 . '<hr style="border: 1px solid black">' . "<br/>";
                $correctAns_9 = $correctAns_9 . '<p><strong>Explanation:</strong><br/> The control equipment is made of different tools working toegther, amoung them are 
                - Drilling Spool<br>
                - Blow out preventers
                - Casing head
                - Choke Manifold and Control Panel</p>';
            }

            echo '<hr style="border: 2px solid green">';
            echo "<div id='results'>$totalCorrect / 9 correct</div>";

            if ($totalCorrect === 8) {
                echo '<hr style="border: 2px solid green">';
                echo "<h3 style='color: yellow'>Perfect Score! Proceed to Test yourself in <strong><a href='/menu/assessment.php'>Well Control</a> </strong></h3>";
                echo "What is a Kick?" . "<br/>" . $correctAns_1 . "<br/>" .
                    "The full meaning of MAASP is Maximum Annulus Allowable Surface Pressure?" . "<br/>" . $correctAns_2 . "<br/>" . "A Kick can be composed of?" .
                    "<br/>" . $correctAns_4 . "<br/>" . "What is lag time?" . "<br/>" . "What is Drilling breaks?" . "<br/>" . $correctAns_5 . "<br/>" .
                    "What can cause a Kick?" . "<br/>" . $correctAns_6 . "<br/>" . "What is the effect of Swabbing on connection/trip gas?" . "<br/>" .
                    $correctAns_7 . "<br/>" . "Which of these methods are used to manage a Kick?" . $correctAns_8 . "<br/>" .
                    "Surface Well Control Equipment is made of?" . $correctAns_9;

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
                if ($correctAns_8 !== '') {
                    $correction = $correction . $correctAns_8 . "<br/>";
                }
                if ($correctAns_9 !== '') {
                    $correction = $correction . $correctAns_9 . "<br/>";
                }

                echo $correction;
                echo '<hr style="border: 2px solid green">';
//                echo "<h3><strong><a href='/menu/assessment.php'><button>Go back and try again</button></a> </strong></h3>";
            }
            ?>
        </div>
        <div class="foot-wrap">
            <footer class="panel-footer clearfix ">
                <address class="pull-right">&copy; RGU
                </address>
                <button id="printanswer" onclick="myFunction('page-wrap')">Generate PDF</button>

            </footer>
            <h3><strong><a href='/menu/assessment.php'>
                        <button>Go back and try again</button>
                    </a> </strong></h3>
            <script>window.history.go(-1);</script>
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


<script>
    /* var doc = new jsPDF();
     var specialElementHandlers = {
     '#editor': function (element, renderer) {
     return true;
     }
     };

     $('#printanswer').click(function () {
     doc.fromHTML($('#page-wrap').html(), 15, 15, {
     'width': 150,
     'elementHandlers': specialElementHandlers
     });
     doc.save('TestYourselfResult.pdf');
     });

     */
    function myFunction(dName) {

        var printContents = document.getElementById(dName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        if (!window.print()) {
            return;
        }
        window.print();
        history.go(-1);
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
</body>
</html>