<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 30/07/2017
 * Time: 17:24
 */

// Start a session
session_start();
/*
if (!isset($_SESSION['usr_id'])) {
    header("Location: index.php");
    echo "''<h1>.Timed Out!.</h1>";
}
*/
// include the database script
include_once '../db/dbconnect.php';

//end any active user session
//unset($_session['user_id']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WebOil | Assessment Page!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Add css file-->
    <!-- <link href="css/styles.css" rel="stylesheet" type="text/css"/>-->
    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
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
                <a class="navbar-brand" href="/index.php">WebOil | Assessment</a>
            </div>
            <div class="collapse navbar-collapse" id="navweboil">
                <ul class="nav navbar-nav navbar-right">
                    <!-- check if same user is still same as the active session user and load appropriate menu options -->
                    <?php if (isset($_SESSION['usr_id'])) { ?>
                        <li><a href="signinindex.php">Home</a></>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li><a href="/menu/courses.php">Courses</a></li>
                        <li class="active"><a href="/menu/assessment.php">Assessment</a></li>
                        <li><a href="/menu/submission.php">Submission</a></li>
                        <li><a href="/menu/demo.php">Demo</a></li>
                        <li><a href="/menu/contact.php">Contact Us</a></li>
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
                        <li class="active"><a href="/menu/assessment.php">Assessment</a></li>
                        <li><a href="/menu/submission.php">Submission</a></li>
                        <li><a href="/menu/demo.php">Demo</a></li>
                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><a href="/menu/login.php"><span class="glyphicon glyphicon-log-in">Login</a></li>
                        <li><a href="/menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
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
<form>
    <hr> <!-- draw a line-->
</form>
<section>
    <div class="content">

        <h3 style="text-align: center">WebOil Assessments</h3>
        <p>Test youself</p>
        <div>
            <hr>
        </div>
        <div style="width: 100%" class="btn-group">
            <div class="row">
                <button onclick="document.getElementById('drilling').style.display='block'" style="width: 30%;">
                    Well Drilling
                </button>
                <button onclick="document.getElementById('control').style.display='block'" style="width: 30%">
                    Well Control
                </button>
                <button onclick="document.getElementById('completion').style.display='block'" style="width: 30%;">
                    Well Completion
                </button>
                <button onclick="document.getElementById('treatment').style.display='block'" style="width: 30%;">
                    Oil & Gas Treatment
                </button>
                <button onclick="document.getElementById('cement').style.display='block'" style="width: 30%">
                    Well Cementing
                </button>
                <button onclick="document.getElementById('storageandexport').style.display='block'" style="width: 30%;">
                    Storage and Export
                </button>
            </div>
        </div>
        <div>
            <hr>
        </div>
        <div id="drilling" class="modal">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 well">
                    <form role="form" class="modal-content animate" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                          method="post"
                          name="ethicsform">
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('drilling').style.display='none'" class="close"
                              title="Close Modal">&times;</span>
                            <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
                        </div>
                        <fieldset>
                            <legend style="text-align: center">Drilling Quiz</legend>
                            <div id="page-wrap">
                                <form action="/grade.php" method="post" id="quiz">

                                    <ol>

                                        <li>

                                            <h3>CSS Stands for...</h3>

                                            <div>
                                                <input type="radio" name="question-1-answers" id="question-1-answers-A"
                                                       value="A"/>
                                                <label for="question-1-answers-A">A) Computer Styled Sections </label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-1-answers" id="question-1-answers-B"
                                                       value="B"/>
                                                <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-1-answers" id="question-1-answers-C"
                                                       value="C"/>
                                                <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-1-answers" id="question-1-answers-D"
                                                       value="D"/>
                                                <label for="question-1-answers-D">D) None of the above</label>
                                            </div>

                                        </li>

                                        <li>

                                            <h3>Internet Explorer 6 was released in...</h3>

                                            <div>
                                                <input type="radio" name="question-2-answers" id="question-2-answers-A"
                                                       value="A"/>
                                                <label for="question-2-answers-A">A) 2001</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-2-answers" id="question-2-answers-B"
                                                       value="B"/>
                                                <label for="question-2-answers-B">B) 1998</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-2-answers" id="question-2-answers-C"
                                                       value="C"/>
                                                <label for="question-2-answers-C">C) 2006</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-2-answers" id="question-2-answers-D"
                                                       value="D"/>
                                                <label for="question-2-answers-D">D) 2003</label>
                                            </div>

                                        </li>

                                        <li>

                                            <h3>SEO Stand for...</h3>

                                            <div>
                                                <input type="radio" name="question-3-answers" id="question-3-answers-A"
                                                       value="A"/>
                                                <label for="question-3-answers-A">A) Secret Enterprise
                                                    Organizations</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-3-answers" id="question-3-answers-B"
                                                       value="B"/>
                                                <label for="question-3-answers-B">B) Special Endowment
                                                    Opportunity</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-3-answers" id="question-3-answers-C"
                                                       value="C"/>
                                                <label for="question-3-answers-C">C) Search Engine Optimization</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-3-answers" id="question-3-answers-D"
                                                       value="D"/>
                                                <label for="question-3-answers-D">D) Seals End Olives</label>
                                            </div>

                                        </li>

                                        <li>

                                            <h3>A 404 Error...</h3>

                                            <div>
                                                <input type="radio" name="question-4-answers" id="question-4-answers-A"
                                                       value="A"/>
                                                <label for="question-4-answers-A">A) is an HTTP Status Code meaning Page
                                                    Not Found</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-4-answers" id="question-4-answers-B"
                                                       value="B"/>
                                                <label for="question-4-answers-B">B) is a good excuse for a clever
                                                    design</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-4-answers" id="question-4-answers-C"
                                                       value="C"/>
                                                <label for="question-4-answers-C">C) should be monitored for in web
                                                    analytics</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-4-answers" id="question-4-answers-D"
                                                       value="D"/>
                                                <label for="question-4-answers-D">D) All of the above</label>
                                            </div>

                                        </li>

                                        <li>

                                            <h3>Your favorite website is</h3>

                                            <div>
                                                <input type="radio" name="question-5-answers" id="question-5-answers-A"
                                                       value="A"/>
                                                <label for="question-5-answers-A">A) CSS-Tricks</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-5-answers" id="question-5-answers-B"
                                                       value="B"/>
                                                <label for="question-5-answers-B">B) CSS-Tricks</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-5-answers" id="question-5-answers-C"
                                                       value="C"/>
                                                <label for="question-5-answers-C">C) CSS-Tricks</label>
                                            </div>

                                            <div>
                                                <input type="radio" name="question-5-answers" id="question-5-answers-D"
                                                       value="D"/>
                                                <label for="question-5-answers-D">D) CSS-Tricks</label>
                                            </div>

                                        </li>

                                    </ol>

                                    <input type="submit" value="Submit Quiz"/>

                                </form>

                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

        var pageTracker = _gat._getTracker("UA-68528-29");
        pageTracker._initData();
        pageTracker._trackPageview();
        <
        script >
        // Get the modal
        var modal = document.getElementById('drilling');
        var modal = document.getElementById('control');
        var modal = document.getElementById('completion');

        var modal = document.getElementById('treatment');
        var modal = document.getElementById('cement');
        var modal = document.getElementById('storageandexport');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</section><!-- end of section-->
<form>
    <hr> <!-- draw a line-->
</form>
<footer>
    <!-- footer area-->
    <div>
        <?php include '../include/footer.php'; ?>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
</body>
</html>