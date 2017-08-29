<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 30/07/2017
 * Time: 17:23
 */

// Start a session
session_start();

// include the database script
include_once '../db/dbconnect.php';

//end any active user session
//unset($_session['user_id']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application Description - OilWeb!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Add css file-->
    <!-- <link href="css/styles.css" rel="stylesheet" type="text/css"/>-->
    <link rel="stylesheet" href="/css/main-style.css">
</head>
<body><!-- Body area start-->

<!-- add top navigational bar using bootstrap-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navOilWeb">
                <!--<span class="sr-only">Toggle navigation</span>-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">Home | OilWeb E-Solution</a>
        </div>
        <div class="collapse navbar-collapse" id="navOilWeb">
            <ul class="nav navbar-nav navbar-right">
                <!-- check if same user is still same as the active session user and load appropriate menu options -->
                <?php if (isset($_SESSION['usr_id'])) { ?>
                    <li><a href="signinindex.php">Home</a></>
                    <li><a href="/menu/about.php">About Us</a></li>
                    <li class="active"><a href="/menu/courses.php">Courses</a></li>
                    <li><a href="/menu/assessment.php">Test Yourself</a></li>
                    <li><a href="/menu/submission.php">Submission</a></li>
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
                    <li class="active"><a href="/menu/courses.php">Courses</a></li>
                    <li><a href="/menu/assessment.php">Test Yourself</a></li>
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

<header>
    <?php if (isset($_SESSION['usr_id'])) { ?>
        <?php include '../include/signinheader.php'; ?>
    <?php } else { ?>
        <?php include '../include/header.php'; ?><?php } ?>
</header>
<hr> <!-- draw a line-->
<section>
    <div>
        <span class="list-style-buttons" style="background-color: #b0e0e6; position: absolute;
    right: 20px;    width: 350px;    height: 23px;    border: 3px solid #8AC007;">
    <a href="#" id="gridview" class="switcher"><img src="/images/grid-view.png" alt="Grid" width="20"
                                                    height="22"></a>
    <a href="#" id="listview" class="switcher active"><img src="/images/list-view-active.png" alt="List" width="20"
                                                           height="22"></a>
</span>
    </div>
    <div class="container" style="background-color: #b0e0e6">
        <div class="row">
            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/welldrilling.php"><img
                            src="/images/drilling.jpg" alt="drilling image" class="img-thumbnail gap-right" width="100"
                            height="120" align="left" hspace="20"></a>
                <h3><a href="/courses/welldrilling.php">Drilling</a></h3>
                <p>In this course you will learn more about the student is introduced to the milestone activities
                    associated with
                    planning for and executing a well construction programme. They will also
                    discover in more detail the roles and responsibilities of core personnel required to
                    plan and execute a well. Click <a href="/courses/welldrilling.php">continue>></a> to access course
                    material.
                </p>
                <form>
                    <hr>
                </form> <!-- draw a line--></div>


            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/wellcontrol.php"><img src="/images/control.jpg"
                                                                                               alt="control image"
                                                                                               class="img-thumbnail gap-right"
                                                                                               width="100" height="120"
                                                                                               align="left" hspace="10"></a>
                <h3><a href="/courses/wellcontrol.php">Control</a></h3>
                <p>This course discusses the causes of a kick, methods of kick detection, well control procedures,
                    and
                    the components and function of surface and subsea well control equipment. Also covered
                    are Operational Pressures and will give students a good understanding of the pressure
                    relationships
                    in
                    the wellbore and rock formation. <a href="/courses/wellcontrol.php">Continue>></a>.</p>
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/fluids/wellcasingcementing.php"><img
                            src="/images/casingcementing.jpg" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="20"></a>
                <h3><a href="/courses/fluids/wellcasingcementing.php">Casing & Cementing</a></h3>
                <p>This course is designed for use by students to gain an understanding of the principles behind the
                    use of casing within the wellbore and the factors involved in casing string design. Also
                    covered are the functions of oilwell cement, the API classification and properties of dry cement
                    and neat slurry and the effect of additives on these
                    properties. <a href="/courses/fluids/wellcasingcementing.php">Continue>></a>.
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/wellcompletion.php"><img
                            src="/images/wellcompletion.jpg" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="20"></a>
                <h3><a href="/courses/wellcompletion.php">Well Completion</a></h3>
                <p>In this course you will learn more about the process of converting a drilled wellbore into a
                    production or injection system.
                    The interface between the reservoir and surface production. The resulting system should
                    establish a safe and efficient connection between the reservoir, the
                    wellbore up to surface so that hydrocarbons can be produced.
                    <a href="/courses/wellcompletion.php">Continue>></a>.
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/treatment.php"><img src="/images/treatment.jpg"
                                                                                             alt="Drilling"
                                                                                             class="img-thumbnail gap-right"
                                                                                             width="100" height="120"
                                                                                             align="left"
                                                                                             hspace="10"></a>
                <h3><a href="/courses/treatment.php">Water, Oil & Gas Treatment</a></h3>
                <p> Before we use formation fluid in cars, busses, plane, heating, ship and other machinery, it have
                    to undergo extensive treatment. In this course you will be enligthen on the processes and stages
                    invloved. Processes like
                    <i>3-Phase Horizontal Separator, Vertical Heater -Treater and Skim Pile for Water
                        Discharge.</i>
                    <a href="/courses/treatment.php">Continue>></a>
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/rigcomponents.php"><img
                            src="/images/rigcomponents.png" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="10"></a>
                <h3><a href="/courses/rigcomponents.php">Rig Components</a></h3>
                <p>This topic is designed for use by students to gain an overall appreciation of the
                    general components of a drilling rig and the equipment utilised during drilling.
                    A drilling rig essentially comprises a derrick, the draw-works with its drilling line,
                    crown block and travelling block, and a drilling fluid circulation system including
                    the standpipe, rotary hose, drilling fluid pits and pumps.
                    <a href="/courses/rigcomponents.php">Continue>></a>.
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/storageandexport.php"><img
                            src="/images/storageandexport.jpg" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="10"></a>
                <h3><a href="/courses/storageandexport.php">Storage and Export</a></h3>
                <p>Crude oil when transported will normally have a Reid Vapour Pressure of between 1 and
                    12 psia, depending on its origin, the processing it has undergone and the degree of
                    ‘weathering’, which has occurred. It is possible to pump most United Kingdom (UK)
                    North Sea crude at ambient temperature, but some of the recent Eocene developments
                    will yield a crude that will need treatment for economic pumping.
                    <a href="/courses/storageandexport.php">Continue>></a>.
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/offshore/flowlines.php"><img
                            src="/images/flowlines.jpg" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="10"></a>
                </a>
                <h3><a href="/courses/offshore/flowlines.php">Flowlines</a></h3>
                <p>Like any other engineering task, the design of a pipeline needs to be tackled
                    systematically. Figure 1 is a route map through this systematic process. This systematic
                    process is rarely a straightforward sequence of operations; usually the design process
                    requires that a series of loops be performed due to the complex interactions between
                    the different factors inherent in the design process.
                    <a href="/courses/offshore/flowlines.php">Continue>></a>.
                </p>
                <hr> <!-- draw a line--></div>
            <hr/>
            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/decommissioning.php"><img
                            src="/images/decommissioning.jpg" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="10"></a>
                <h3><a href="/courses/fluids/muds.php">Decommissioning</a></h3>
                <p>In this topic the student is introduced to the milestone activities associated with
                    planning for and executing a well construction programme. They will also
                    discover in more detail the roles and responsibilities of core personnel required to
                    plan and execute a well. Different organisational structures to deliver a well are
                    also discussed. In addition, the student learns about generic objectives for a well
                    and what specific information is required to allow comprehensive well planning.
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/fluids/muds.php"><img
                            src="/images/drillingfluid.jpg" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="10"></a>
                <h3><a href="/courses/separationandcontrol.php">Drilling Fluids or Muds</a></h3>
                <p>In this topic the student is introduced to the milestone activities associated with
                    planning for and executing a well construction programme. They will also
                    discover in more detail the roles and responsibilities of core personnel required to
                    plan and execute a well. Different organisational structures to deliver a well are
                    also discussed. In addition, the student learns about generic objectives for a well
                    and what specific information is required to allow comprehensive well planning.
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/separationandcontrol.php"><img
                            src="/images/formationfluidseparation.png" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="10"></a>
                <h3>Formation Fluid Separation</h3>
                <p>In this topic the student is introduced to the milestone activities associated with
                    planning for and executing a well construction programme. They will also
                    discover in more detail the roles and responsibilities of core personnel required to
                    plan and execute a well. Different organisational structures to deliver a well are
                    also discussed. In addition, the student learns about generic objectives for a well
                    and what specific information is required to allow comprehensive well planning.
                </p>
                <hr> <!-- draw a line--></div>

            <div class="col-xs-12 col-sm-11 col-md-11"><a href="/courses/measurement.php"><img
                            src="/images/oilgasmeasurement.jpg" alt="Drilling"
                            class="img-thumbnail gap-right" width="100" height="120"
                            align="left" hspace="10"></a>
                <h3>Oil & Gas Measurement</h3>
                <p>In this topic the student is introduced to the milestone activities associated with
                    planning for and executing a well construction programme. They will also
                    discover in more detail the roles and responsibilities of core personnel required to
                    plan and execute a well. Different organisational structures to deliver a well are
                    also discussed. In addition, the student learns about generic objectives for a well
                    and what specific information is required to allow comprehensive well planning.
                </p></div>
        </div>
    </div>
</section><!-- end of section-->

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