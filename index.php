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
    <title>Application Description - WebOil!</title>
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
</head>
<body><!-- Body area start-->

<header>
    <?php if (isset($_SESSION['usr_id'])) { ?>
        <?php include 'include/signinheader.php'; ?>
    <?php } else { ?>
        <?php include 'include/header.php'; ?><?php } ?>
</header>
<form>
    <hr> <!-- draw a line-->
</form>
<section>
    <div class="container">
        <h2>Topics:</h2>
        <div class="panel panel-default">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <div class="topic effect">
                        <h3>Drilling</h3>
                        <a href=" courses/welldrilling.php"><img src="images/drilling2.jpg" alt="drilling image"
                                                                 width="200"
                                                                 height="200"/>
                            <h3>Preview</h3>
                            <p>In this topic the student is introduced to the milestone activities associated with
                                planning for and executing a well construction programme. They will also
                                discover in more detail the roles and responsibilities of core personnel required to
                                plan and execute a well. Different organisational structures to deliver a well are
                                also discussed. In addition, the student learns about generic objectives for a well
                                and what specific information is required to allow comprehensive well planning.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">

                    <div class="topic effect"><h3>Control</h3> <a href="courses/wellcontrol.php"><img
                                    src="images/control.jpg" alt="drilling image"
                                    width="200"
                                    height="200"/>
                            <p>This topic discusses the causes of a kick, methods of kick detection, well
                                control procedures, and the components and function of surface and subsea well control
                                equipment.</p>
                    </div>
                    </a>
                </div>
                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <div class="topic effect"><h3>Casing & Cementing</h3><a href="courses/fluids/cement.php"><img
                                    src="images/casingcementing.jpg" alt="drilling image"
                                    width="200"
                                    height="200"/>
                            <p>Here you will find information about cementing of a well to hold the formation and earth
                                structure from collapsing.</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/fluids/muds.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/rigcomponents.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/wellcompletion.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/offshore/structures.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/offshore/flowlines.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/offshore/manifolds.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/oiltreatment.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/separationandcontrol.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/fluismechanicsandmachinery.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/measurement.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/storageandexport.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/treatment.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>
                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/dehydation.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/pipelinesandfassurance.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-lg-3">
                    <a href="courses/decommissioning.php">
                        <div class="topic effect">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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