<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 29/07/2017
 * Time: 15:47
 */

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
    <title>WebOil - Drilling</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navweboil">
                <!--<span class="sr-only">Toggle navigation</span>-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">WebOil | Well Drilling</a>
        </div>
        <div class="collapse navbar-collapse" id="navweboil">
            <ul class="nav navbar-nav navbar-right">
                <!-- check if same user is still same as the active session user and load appropriate menu options -->
                <?php if (isset($_SESSION['usr_id'])) { ?>
                    <li><a href="signinindex.php">Home</a></>
                    <li><a href="/menu/about.php">About Us</a></li>
                    <li class="active"><a href="/menu/courses.php">Courses</a></li>
                    <li><a href="/menu/assessment.php">Assessment</a></li>
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
                    <li class="active"><a href="/index.php">Home</a></>
                    <li><a href="/menu/about.php">About Us</a></li>
                    <li class="active"><a href="/menu/courses.php">Courses</a></li>
                    <li><a href="/menu/assessment.php">Assessment</a></li>
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


<header>
    <?php if (isset($_SESSION['usr_id'])) { ?>
        <?php include '../include/signinheader.php'; ?>
    <?php } else { ?>
        <?php include '../include/header.php'; ?><?php } ?>
</header>
<form>
    <hr> <!-- draw a line-->
</form>
<section>
    <div class="content">
        <ul class="breadcrumb">
            <li><a href="/index.php">Home</a></li>
            <li><a href="/contact.php">Courses</a></li>
            <li class="active">drilling</li>
        </ul>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group nav" role="tablist">
                        <li class="list-group-item">
                            <a href="#seite1" data-toggle="tab" aria-controls="seite1" role="tab">
                                Link1
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite2" data-toggle="tab" aria-controls="seite2" role="tab">
                                Link1
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite3" data-toggle="tab" aria-controls="seite3" role="tab">
                                Link1
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite4" data-toggle="tab" aria-controls="seite4" role="tab">
                                Link1
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="seite1">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Headline no.1</h1>
                            </header>
                            <div class="panel-body">

                                <figure class="pull-left "><img class="img-responsive img-rounded" alt="image"
                                                                src="http://www.placehold.it/200.png/ddd"/>
                                    <figcaption class="text-center"><strong>One fine caption</strong></figcaption>
                                </figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                                <hr/>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software.</p>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">Written by me at
                                    <time>10:00 am</time>
                                </address>
                            </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite2">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Headline no.2</h1>
                            </header>
                            <div class="panel-body">

                                <figure class="pull-left "><img class="img-responsive img-rounded" alt="image"
                                                                src="http://www.placehold.it/200.png/ddd"/>
                                    <figcaption class="text-center"><strong>One fine caption</strong></figcaption>
                                </figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                                <hr/>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software.</p>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">Written by me at
                                    <time>10:00 am</time>
                                </address>
                                </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite3">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Headline no.3</h1>
                            </header>
                            <div class="panel-body">

                                <figure class="pull-left "><img class="img-responsive img-rounded" alt="image"
                                                                src="http://www.placehold.it/200.png/ddd"/>
                                    <figcaption class="text-center"><strong>One fine caption</strong></figcaption>
                                </figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                                <hr/>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software.</p>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">Written by me at
                                    <time>10:00 am</time>
                                </address>
                            </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite4">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Headline no.4</h1>
                            </header>
                            <div class="panel-body">

                                <figure class="pull-left "><img class="img-responsive img-rounded" alt="image"
                                                                src="http://www.placehold.it/200.png/ddd"/>
                                    <figcaption class="text-center"><strong>One fine caption</strong></figcaption>
                                </figure>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                                <hr/>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software.</p>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">Written by me at
                                    <time>10:00 am</time>
                                </address>
                            </footer>
                        </article>
                    </div>

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
        <?php include '../include/footer.php'; ?>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
</body>
</html>