<?php
/**
 * Created by PhpStorm.
 * User: Chisoft
 * Date: 2017-08-05
 * Time: 22:35
 */

session_start();
/*
if (!isset($_SESSION['usr_id'])) {
    header("Location: index.php");
    echo "''<h1>.Timed Out!.</h1>";
}*/

include_once '../db/dbconnect.php';

//set validation error flag as false
$error = false;
/*
//check if form is submitted
if (isset($_POST['applyform'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $supervisor = mysqli_real_escape_string($link, $_POST['supervisor']);
    $department = mysqli_real_escape_string($link, $_POST['department']);
    $projecttopic = mysqli_real_escape_string($link, $_POST['projecttopic']);
    $projectdescription = mysqli_real_escape_string($link, $_POST['projectdescription']);
    $startdate = mysqli_real_escape_string($link, $_POST['startdate']);
    $enddate = mysqli_real_escape_string($link, $_POST['enddate']);
    $datadetails = mysqli_real_escape_string($link, $_POST['datadetails']);

    if (mysqli_query($link, "INSERT INTO research(name,supervisor,department, projecttopic, projectdescription, startdate, enddate, datadetails )
VALUES('" . $name . "', '" . $supervisor . "', '" . $department . "','" . $projecttopic . "','" . $projectdescription . "','" . $startdate . "','" . $enddate . "','" . $datadetails . "')")) {
        $successmsg = "Research Ethics Successfuly Registered!";
        header("refresh:5; url=researchtable.php");
    } else {
        $errormsg = "Error in registering...Please try again later!";
    }
}

$result2 = mysqli_query($link, "SELECT id, name, supervisor, projecttopic, startdate, enddate FROM research") or die('cannot show columns from research');
$count = mysqli_num_rows($result2);

// Check if delete button active, start this
if (isset($_POST['deleteform'])) {
    for ($i = 0; $i < $count; $i++) {
        $del_id = $checkbox[$i];
        $sql = "DELETE FROM research WHERE id='$del_id'";
        $result3 = mysqli_query($link, $sql);
    }
// if successful redirect to delete_multiple.php
    if ($result3) {
        echo "Record deleted successfully";
        header("refresh:5; url=officerprojecttable.php");
    }
}*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>WebOil | Assessment Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css" type="text/css"/>
    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" href="/css/main-style2.css">
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
                        <li><a href="/menu/submission.php">Test Yourself</a></li>
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
                        <li class="active"><a href="/menu/assessment.php">Test Yourself</a></li>
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

    <?php if (isset($_SESSION['usr_id'])) { ?>
        <?php include '../include/signinheader.php'; ?>
    <?php } else { ?>
        <?php include '../include/header.php'; ?><?php } ?>
</header>
<form>
    <hr> <!-- draw a line-->
</form>
<section>
    <div class="container">

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

            <!-- <form class="modal-content animate" action="/action_page.php">
                 <div class="imgcontainer">
                             <span onclick="document.getElementById('apply').style.display='none'" class="close"
                                   title="Close Modal">&times;</span>
                     <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar">
                 </div> -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2 well">
                    <form role="form" class="modal-content animate" action="/grade.php"
                          method="post"
                          name="ethicsform">
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('drilling').style.display='none'" class="close"
                              title="Close Modal">&times;</span>
                            <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
                        </div>
                        <fieldset>
                            <legend style="text-align: center">Well Drilling Quiz</legend>
                            <ol>
                                <li>
                                    <h5>What is drilling Mud used for?</h5>
                                    <div class="form-group">
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-A"
                                                   value="A"/>
                                            <label for="question-1-answers-A">A) Control subsurface pressures. </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-B"
                                                   value="B"/>
                                            <label for="question-1-answers-B">B) Move cuttings to the bottom of the
                                                hole</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-C"
                                                   value="C"/>
                                            <label for="question-1-answers-C">C) Prevent recovery of information from
                                                the hole.</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-D"
                                                   value="D"/>
                                            <label for="question-1-answers-D">D) Warm and de-lubricate the bit.</label>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <h5>What instrument is used to measure Mud Weight?</h5>
                                    <div class="form-group">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-A"
                                               value="A"/>
                                        <label for="question-2-answers-A">A) LTLP filter press</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-B"
                                               value="B"/>
                                        <label for="question-2-answers-B">B) Mud Balance</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-C"
                                               value="C"/>
                                        <label for="question-2-answers-C">C) HTHP filter press</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-D"
                                               value="D"/>
                                        <label for="question-2-answers-D">D) API Extreme Pressure Tester.</label>
                                    </div>
                                </li>
                                <li>
                                    <h5>Which of the following personnel should not be on site during drilling?</h5>
                                    <div class="form-group">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-A"
                                               value="A"/>
                                        <label for="question-3-answers-A">A) Drilling
                                            Superintendent</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-B"
                                               value="B"/>
                                        <label for="question-3-answers-B">B) Derrickman</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-C"
                                               value="C"/>
                                        <label for="question-3-answers-C">C) Driller</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-D"
                                               value="D"/>
                                        <label for="question-3-answers-D">D) Rig Mechanic</label>
                                    </div>
                                </li>
                                <li>
                                    <h5>Which of the following RIG is used offshore?</h5>

                                    <div class="form-group">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-A"
                                               value="A"/>
                                        <label for="question-4-answers-A">A) cruseships</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-B"
                                               value="B"/>
                                        <label for="question-4-answers-B">B) Semisubmersible
                                            rigs</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-C"
                                               value="C"/>
                                        <label for="question-4-answers-C">C) Jack-down rigs,</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-D"
                                               value="D"/>
                                        <label for="question-4-answers-D">D) None of the above</label>
                                    </div>
                                </li>

                                <li>
                                    <h5>Which of the following is constituent of Mud?</h5>

                                    <div class="form-group">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-A"
                                               value="A"/>
                                        <label for="question-5-answers-A">A) Oil Based Mud (OBM)</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-B"
                                               value="B"/>
                                        <label for="question-5-answers-B">B) Water Based Mud (WBM)</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-C"
                                               value="C"/>
                                        <label for="question-5-answers-C">C) Gas, aerated muds</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-D"
                                               value="D"/>
                                        <label for="question-5-answers-D">D) All of the above</label>
                                    </div>

                                </li>
                                <li>
                                    <h5>The time required to plan and execute a well construction programme is dependent
                                        on (select all that apply)?</h5>
                                    <form class="form-group">
                                        <input type="checkbox" name="answer-question-6[]" value="A" id="answer-6A"/>
                                        <label for="answers-6A">A) sub-surface complexity</label>

                                        <input type="checkbox" name="answer-question-6[]" value="B" id="answer-6B"/>
                                        <label for="answers-6B">B) location</label>

                                        <input type="checkbox" name="answer-question-6[]" value="C" id="answer-6C"/>
                                        <label for="answers-6C">C) type of well</label>

                                        <input type="checkbox" name="answer-question-6[]" value="D" id="answer-6D"/>
                                        <label for="answers-6D">D) All of the above.</label>

                                        <input type="checkbox" name="answer-question-6[]" value="E" id="answer-6E"/>
                                        <label for="answers-6E">E) None of the above.</label>
                                    </form>
                                </li>
                                <li>
                                    <h5>The time required to plan and execute a well construction programme is dependent
                                        on (select all that apply)?</h5>
                                    <form class="form-group">
                                        <input type="checkbox" name="answer-question-6[]" value="A" id="answer-6A"/>
                                        <label for="answers-6A">A) sub-surface complexity</label>

                                        <input type="checkbox" name="answer-question-6[]" value="B" id="answer-6B"/>
                                        <label for="answers-6B">B) location</label>

                                        <input type="checkbox" name="answer-question-6[]" value="C" id="answer-6C"/>
                                        <label for="answers-6C">C) type of well</label>

                                        <input type="checkbox" name="answer-question-6[]" value="D" id="answer-6D"/>
                                        <label for="answers-6D">D) All of the above.</label>

                                        <input type="checkbox" name="answer-question-6[]" value="E" id="answer-6E"/>
                                        <label for="answers-6E">E) None of the above.</label>
                                    </form>
                                </li>

                            </ol>
                            <input type="submit" value="Submit Quiz"/>
                        </fieldset>
                    </form>

                </div>
            </div>
            <!--</form>-->
        </div>


        <div id="control" class="modal">

            <!-- <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                            <span onclick="document.getElementById('update').style.display='none'" class="close"
                                  title="Close Modal">&times;</span>
                    <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div> -->

            <div class="row">
                <div class="col-md-10 col-md-offset-1 well">
                    <form role="form" class="modal-content animate" action="/grade.php"
                          method="post"
                          name="controlform">
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('control').style.display='none'" class="close"
                              title="Close Modal">&times;</span>
                            <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
                        </div>
                        <fieldset>
                            <legend style="text-align: center">Well Control Quiz</legend>

                            <ol>
                                <li>
                                    <h5>CSS Stands for...</h5>
                                    <div class="form-group">
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-A"
                                                   value="A"/>
                                            <label for="question-1-answers-A">A) Computer Styled Sections </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-B"
                                                   value="B"/>
                                            <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-C"
                                                   value="C"/>
                                            <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-D"
                                                   value="D"/>
                                            <label for="question-1-answers-D">D) None of the above</label>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <h5>Internet Explorer 6 was released in...</h5>
                                    <div class="form-group">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-A"
                                               value="A"/>
                                        <label for="question-2-answers-A">A) 2001</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-B"
                                               value="B"/>
                                        <label for="question-2-answers-B">B) 1998</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-C"
                                               value="C"/>
                                        <label for="question-2-answers-C">C) 2006</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-D"
                                               value="D"/>
                                        <label for="question-2-answers-D">D) 2003</label>
                                    </div>
                                </li>
                                <li>
                                    <h5>SEO Stand for...</h5>
                                    <div class="form-group">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-A"
                                               value="A"/>
                                        <label for="question-3-answers-A">A) Secret Enterprise
                                            Organizations</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-B"
                                               value="B"/>
                                        <label for="question-3-answers-B">B) Special Endowment
                                            Opportunity</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-C"
                                               value="C"/>
                                        <label for="question-3-answers-C">C) Search Engine Optimization</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-D"
                                               value="D"/>
                                        <label for="question-3-answers-D">D) Seals End Olives</label>
                                    </div>
                                </li>
                                <li>
                                    <h5>A 404 Error...</h5>

                                    <div class="form-group">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-A"
                                               value="A"/>
                                        <label for="question-4-answers-A">A) is an HTTP Status Code meaning Page
                                            Not Found</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-B"
                                               value="B"/>
                                        <label for="question-4-answers-B">B) is a good excuse for a clever
                                            design</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-C"
                                               value="C"/>
                                        <label for="question-4-answers-C">C) should be monitored for in web
                                            analytics</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-D"
                                               value="D"/>
                                        <label for="question-4-answers-D">D) All of the above</label>
                                    </div>
                                </li>

                                <li>
                                    <h5>Your favorite website is</h5>

                                    <div class="form-group">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-A"
                                               value="A"/>
                                        <label for="question-5-answers-A">A) CSS-Tricks</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-B"
                                               value="B"/>
                                        <label for="question-5-answers-B">B) CSS-Tricks</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-C"
                                               value="C"/>
                                        <label for="question-5-answers-C">C) CSS-Tricks</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-D"
                                               value="D"/>
                                        <label for="question-5-answers-D">D) CSS-Tricks</label>
                                    </div>

                                </li>


                            </ol>
                            <input type="submit" value="Submit Quiz"/>

                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
        <div id="completion" class="modal">

            <!--<form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                        <span onclick="document.getElementById('delete').style.display='none'" class="close"
                              title="Close Modal">&times;</span>
                    <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div>-->

            <div class="row">
                <div class="col-md-10 col-md-offset-1 well">
                    <form role="form" class="modal-content animate" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                          method="post"
                          name="completionform">
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('completion').style.display='none'" class="close"
                              title="Close Modal">&times;</span>
                            <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
                        </div>
                        <fieldset>
                            <legend style="text-align: center">Completion Quiz</legend>
                            <h2>Completion coming soon</h2>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById('drilling');
            var modal = document.getElementById('control');
            var modal = document.getElementById('completion');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </div>
</section>
<footer>
    <?php include '../include/footer.php'; ?>
</footer>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>