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
include_once 'db/dbconnect.php';

//end any active user session
//unset($_session['user_id']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WebOil | Elearning Application</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Add css file-->
    <!-- <link href="css/styles.css" rel="stylesheet" type="text/css"/>-->
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {
            display: none;
        }
    </style>
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
                        <li><a href="menu/submission.php">Submission</a></li>
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
                        <li class="active"><a href="index.php">Home</a></>
                        <li><a href="menu/about.php">About Us</a></li>
                        <li><a href="menu/courses.php">Courses</a></li>
                        <li><a href="menu/assessment.php">Test Yourself</a></li>
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
<hr> <!-- draw a line-->
<section>
    <div class="container" style="background-color: #b0e0e6">
        <div class="row">
            <h1 style="text-align: center">Welcome to WebOil</h1>
            <h2 style="text-align: center">An online platform to help you on your way to exciting and sustainable career
                in <strong>Oil and
                    Gas</strong> Industry.</h2>
            <hr>
            <div class="w3-content w3-section" style="max-width:1000px; margin-left:7%">
                <div class="mySlides"><a href="courses/welldrilling.php"><img src="images/drilling.jpg"
                                                                              style="width:100%; height: 300px"></a>
                    <p class="w3-display-middle w3-large w3-container w3-padding-16 w3-black" style="opacity: 0.4;
    filter: alpha(opacity=40)">
                        Well Drilling Course
                    </p>
                </div>
                <p class="mySlides"><a href="courses/wellcontrol.php"><img src="images/control.jpg"
                                                                           style="width:100%; height: 300px"></a>
                <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black" style="opacity: 0.6;
    filter: alpha(opacity=60)">
                    Well Control Course
                </div>
                </p>
                <div class="mySlides"><a href="courses/fluids/wellcasingcementing.php"><img
                                src="images/casingcementing.jpg"
                                style="width:100%; height: 300px"></a>
                    <p class="w3-display-middle w3-large w3-container w3-padding-16 w3-black" style="opacity: 0.5;
    filter: alpha(opacity=50)">
                        Well Casing and Cementing Course
                    </p>
                </div>

            </div>

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 2000); // Change image every 2 seconds
                }
            </script>

            <form>
                <hr>
            </form>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/welldrilling.php"><img src="images/drilling.jpg"
                                                                               alt="drilling image"
                                                                               class="img-thumbnail"
                                                                               width="200" height="200"></a>
                    <h3>Drilling</h3>
                    <p>In this course you will learn more about the student is introduced to the milestone activities
                        associated with
                        planning for and executing a well construction programme. They will also
                        discover in more detail the roles and responsibilities of core personnel required to
                        plan and execute a well. Click to <a href="/courses/welldrilling.php" style="color:blue">continue>></a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/wellcontrol.php"><img src="images/control.jpg"
                                                                              alt="control image"
                                                                              class="img-thumbnail"
                                                                              width="200"
                                                                              height="200"></a>
                    <h3>Control</h3>
                    <p>This course discusses the causes of a kick, methods of kick detection, well control procedures,
                        and
                        the components and function of surface and subsea well control equipment. Also covered
                        are Operational Pressures and will give students a good understanding of the pressure
                        relationships
                        in
                        the wellbore and rock formation. <a href="/courses/wellcontrol.php" style="color:blue">Continue>></a>.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/fluids/wellcasingcementing.php"><img
                                src="images/casingcementing.jpg" alt="Drilling"
                                class="img-thumbnail" width="200" height="180"></a>
                    <h4>Casing & Cementing</h4>
                    <p>This course is designed for use by students to gain an understanding of the principles behind the
                        use of casing within the wellbore and the factors involved in casing string design. Also
                        covered are the functions of oilwell cement, the API classification and properties of dry cement
                        and neat slurry and the effect of additives on these
                        properties. <a href="/courses/fluids/wellcasingcementing.php" style="color:blue">Continue>></a>.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/wellcompletion.php"><img src="images/wellcompletion.jpg"
                                                                                 alt="Drilling"
                                                                                 class="img-thumbnail" width="200"
                                                                                 height="200"></a>
                    <h3>Well Completion</h3>
                    <p>In this course you will learn more about the process of converting a drilled wellbore into a
                        production or injection system.
                        The interface between the reservoir and surface production. The resulting system should
                        establish a safe and efficient connection between the reservoir, the
                        wellbore up to surface so that hydrocarbons can be produced.
                        <a href="/courses/wellcompletion.php" style="color:blue">Continue>></a>.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/treatment.php"><img src="images/treatment.jpg" alt="Drilling"
                                                                            class="img-thumbnail" width="200"
                                                                            height="200"></a>
                    <h3>Water, Oil & Gas Treatment</h3>
                    <p> Before we use formation fluid in cars, busses, plane, heating, ship and other machinery, it have
                        to undergo extensive treatment. In this course you will be enligthen on the processes and stages
                        invloved. Processes like
                        <i>3-Phase Horizontal Separator, Vertical Heater -Treater and Skim Pile for Water
                            Discharge.</i>
                        <a href="/courses/treatment.php">Continue>></a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/rigcomponents.php"><img src="images/rigcomponents.png"
                                                                                alt="Drilling"
                                                                                class="img-thumbnail" width="200"
                                                                                height="200"></a>
                    <h3>Rig Components</h3>
                    <p>This topic is designed for use by students to gain an overall appreciation of the
                        general components of a drilling rig and the equipment utilised during drilling.
                        A drilling rig essentially comprises a derrick, the draw-works with its drilling line,
                        crown block and travelling block, and a drilling fluid circulation system including
                        the standpipe, rotary hose, drilling fluid pits and pumps.
                        <a href="/courses/rigcomponents.php">Continue>></a>.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/storageandexport.php"><img src="images/storageandexport.jpg"
                                                                                   alt="Drilling"
                                                                                   class="img-thumbnail" width="200"
                                                                                   height="180"></a>
                    <h3>Storage and Export</h3>
                    <p>Crude oil when transported will normally have a Reid Vapour Pressure of between 1 and
                        12 psia, depending on its origin, the processing it has undergone and the degree of
                        ‘weathering’, which has occurred. It is possible to pump most United Kingdom (UK)
                        North Sea crude at ambient temperature, but some of the recent Eocene developments
                        will yield a crude that will need treatment for economic pumping.
                        <a href="/courses/storageandexport.php">Continue>></a>.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/offshore/flowlines.php"><img src="images/flowlines.jpg"
                                                                                     alt="Drilling"
                                                                                     class="img-thumbnail" width="200"
                                                                                     height="200">
                    </a>
                    <h3>Flowlines</h3>
                    <p>Like any other engineering task, the design of a pipeline needs to be tackled
                        systematically. Figure 1 is a route map through this systematic process. This systematic
                        process is rarely a straightforward sequence of operations; usually the design process
                        requires that a series of loops be performed due to the complex interactions between
                        the different factors inherent in the design process.
                        <a href="/courses/offshore/flowlines.php">Continue>></a>.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/decommissioning.php"><img src="images/decommissioning.jpg"
                                                                                  alt="Drilling"
                                                                                  class="img-thumbnail" width="200"
                                                                                  height="200"></a>
                    <h3>Decommissioning</h3>
                    <p>In this topic the student is introduced to the milestone activities associated with
                        planning for and executing a well construction programme. They will also
                        discover in more detail the roles and responsibilities of core personnel required to
                        plan and execute a well. Different organisational structures to deliver a well are
                        also discussed. In addition, the student learns about generic objectives for a well
                        and what specific information is required to allow comprehensive well planning.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/fluids/muds.php"><img src="images/drillingfluid.jpg"
                                                                              alt="Drilling"
                                                                              class="img-thumbnail" width="200"
                                                                              height="200"></a>
                    <h3>Drilling Fluids or Muds</h3>
                    <p>In this topic the student is introduced to the milestone activities associated with
                        planning for and executing a well construction programme. They will also
                        discover in more detail the roles and responsibilities of core personnel required to
                        plan and execute a well. Different organisational structures to deliver a well are
                        also discussed. In addition, the student learns about generic objectives for a well
                        and what specific information is required to allow comprehensive well planning.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/separationandcontrol.php"><img
                                src="images/formationfluidseparation.png"
                                alt="Drilling"
                                class="img-thumbnail" width="200"
                                height="200"></a>
                    <h3>Formation Fluid Separation</h3>
                    <p>In this topic the student is introduced to the milestone activities associated with
                        planning for and executing a well construction programme. They will also
                        discover in more detail the roles and responsibilities of core personnel required to
                        plan and execute a well. Different organisational structures to deliver a well are
                        also discussed. In addition, the student learns about generic objectives for a well
                        and what specific information is required to allow comprehensive well planning.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="text-area"><a href="courses/measurement.php"><img src="images/oilgasmeasurement.jpg"
                                                                              alt="Drilling"
                                                                              class="img-thumbnail" width="200"
                                                                              height="200"></a>
                    <h3>Oil & Gas Measurement</h3>
                    <p>In this topic the student is introduced to the milestone activities associated with
                        planning for and executing a well construction programme. They will also
                        discover in more detail the roles and responsibilities of core personnel required to
                        plan and execute a well. Different organisational structures to deliver a well are
                        also discussed. In addition, the student learns about generic objectives for a well
                        and what specific information is required to allow comprehensive well planning.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of section-->
<hr> <!-- draw a line-->
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