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

    <!-- Add css file-->
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/main-style.css">
</head>
<body><!-- Body area start-->

<!-- add top navigational bar using bootstrap-->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Home | WebOil Elearning Solution</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <!-- check if same user is still same as the active session user and load appropriate menu options -->
                <?php if (isset($_SESSION['usr_id'])) { ?>
                    <li class="active"><a href="signinindex.php">Home</a></>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Courses</a></li>
                    <li><a href="administrator.php">Administrator</a></li>
                    <li><a href="contact.php">Assessment</a></li>
                    <li><a href="contact.php">Submission</a></li>
                    <li><a href="contact.php">Demo</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="contact.php">Help</a></li>
                    <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                    <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                    <li class="active"><a href="signinindex.php">Home</a></>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Courses</a></li>
                    <li><a href="administrator.php">Administrator</a></li>
                    <li><a href="contact.php">Assessment</a></li>
                    <li><a href="contact.php">Submission</a></li>
                    <li><a href="contact.php">Demo</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="contact.php">Help</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registerresearcher.php">Register</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

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
    <div class="pageContent">

        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        <a href="http://www.google.com">
            <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div>
        </a>

    </div>

    <form>
        <hr> <!-- draw a line-->
    </form>
    <div>

        <article class="article">
            <h2>WebOil Elearning Soultion</h2>
            <p>A Full Research Ethics and Integrity Assessment is required before, during and maybe after a research
                project. Most research institution and centers are
                commitment to promote and facilitate the conduct of research ethics and integrity.</p>
            <h3>Purpose of Ethical Standards</h3>
            <p>In line with acceptable police and framework, RGU attaches great importance to addressing the ethical
                implications of all research activities
                carried out by its members, be they undergraduates, postgraduates or academic members of staff.
                Attention to the ethical and legal implications of research for researchers, research subjects, sponsors
                and
                collaborators is an intrinsic
                part of good research <a
                        href="http://www.ed.ac.uk/geosciences/intranet/working-in-school/other-important-information/ethicsinresearch">practice.</a>
            </p>
            <p>You need to assess whether your project needs an ethical submission. This can be done by completing the
                RESSA
                form and based on the outcome decide whether an application is needed.</p>
            <p><a class="more"
                  href="http://www.rgu.ac.uk/download.cfm?downloadfile=5E84DCA0-2BEB-11E1-8D06000D609CAA9F&typename=dmFile&fieldname=filename">Student
                    and Supervisor Appraisal (RESSA) Form</a></p>
            <h3>Assessment of Research Ethics is very important expecially when the following groups are involved:</h3>
            <ul>
                <li>vulnerable human subjects (e.g. children, people with cognitive disabilities and so on)
                </li>
                <br>
                <li>invasive procedures or addressing sensitive issues (e.g. video-taping without informed consent,
                    questions about sexuality or about criminal<br> behaviour)
                </li>
                <br>
                <li>biophysical research which requires extraordinary permission from landowners, involves significant
                    disturbance to vulnerable species or habitats,<br> sampling rare/endangered or harmful taxa/species,
                    and/or transporting samples/specimens between countries or significant ‘boundaries’.
                </li>
                <br>
            </ul>

        </article>
    </div>
    <div>
        <hr>
    </div>
</section>
<footer>
    <div>
        <?php include 'include/footer.php'; ?>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
</body>
</html>