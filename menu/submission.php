<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 30/07/2017
 * Time: 17:25
 */

session_start();

// include the database script
include_once '../db/dbconnect.php';

//end any active user session
//unset($_session['user_id']);
if (isset($_POST['uploadfile']) && $_FILES['studentfile']['size'] > 0) {
    $fName = $_FILES['studentfile']['name'];
    $tmpName = $_FILES['studentfile']['tmp_name'];
    $fSize = $_FILES['studentfile']['size'];
    $fType = $_FILES['studentfile']['type'];
    $fError = $_FILES['studentfile']['error'];

    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }
    /*include 'library/config.php';
    include 'library/opendb.php';*/

    $query = "INSERT INTO uploadfile (fileName, fileSize, fileType, fileContent ) " .
        "VALUES ('$fName', '$fSize', '$fType', '$content')";

    mysqli_query($link, $query) or die('Error, query failed');
    /*include 'library/closedb.php';*/

    echo "<br>File $fName uploaded<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WebOil - Drilling</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add JavaScript file-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
    <script src="/js/weboil.js"></script>
    <!-- Add css file-->
    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><!-- Body area start-->

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
            <a class="navbar-brand" href="/index.php">WebOil | Well Drilling</a>
        </div>
        <div class="collapse navbar-collapse" id="navweboil">
            <ul class="nav navbar-nav navbar-right">
                <!-- check if same user is still same as the active session user and load appropriate menu options -->
                <?php if (isset($_SESSION['usr_id'])) { ?>
                    <li><a href="signinindex.php">Home</a></>
                    <li><a href="/menu/about.php">About Us</a></li>
                    <li><a href="/menu/courses.php">Courses</a></li>
                    <li><a href="/menu/assessment.php">Assessment</a></li>
                    <li class="active"><a href="/menu/submission.php">Submission</a></li>
                    <li><a href="/menu/demo.php">Demo</a></li>
                    <li><a href="/menu/contact.php">Contact Us</a></li>
                    <li><a href="/menu/help.php">Help</a></li>
                    <li><p class="navbar-text"><span
                                class="glyphicon glyphicon-user">Signed in as <?php echo $_SESSION['usr_name']; ?>
                        </p></li>
                    <li><a href="/index.php"><span class="glyphicon glyphicon-log-out">Log Out</a></li>
                    <!--<form class="navbar-form navbar-right">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search">
                              <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                      <i class="glyphicon glyphicon-search"></i>
                                  </button>
                              </div>
                          </div>
                      </form>-->
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
                    <!--<form class="navbar-form navbar-right">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>-->
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
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">PHP File Uploader</a>
            </div>
        </div>
    </div>


    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <form class="well" action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Select a file to upload</label>
                        <input type="file" name="file">
                        <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed.</p>
                    </div>
                    <input type="submit" class="btn btn-lg btn-primary" value="Upload">
                </form>
            </div>
        </div>
    </div> <!-- /container -->

    <?php
    //turn on php error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name     = $_FILES['file']['name'];
        $tmpName  = $_FILES['file']['tmp_name'];
        $error    = $_FILES['file']['error'];
        $size     = $_FILES['file']['size'];
        $ext      = strtolower(pathinfo($name, PATHINFO_EXTENSION));

        switch ($error) {
            case UPLOAD_ERR_OK:
                $valid = true;
                //validate file extensions
                if ( !in_array($ext, array('jpg','jpeg','png','gif')) ) {
                    $valid = false;
                    $response = 'Invalid file extension.';
                }
                //validate file size
                if ( $size/1024/1024 > 2 ) {
                    $valid = false;
                    $response = 'File size is exceeding maximum allowed size.';
                }
                //upload file
                if ($valid) {
                    $targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'uploads' . DIRECTORY_SEPARATOR. $name;
                    move_uploaded_file($tmpName,$targetPath);
                    header( 'Location: index.php' ) ;
                    exit;
                }
                break;
            case UPLOAD_ERR_INI_SIZE:
                $response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $response = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
                break;
            case UPLOAD_ERR_PARTIAL:
                $response = 'The uploaded file was only partially uploaded.';
                break;
            case UPLOAD_ERR_NO_FILE:
                $response = 'No file was uploaded.';
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
                break;
            case UPLOAD_ERR_EXTENSION:
                $response = 'File upload stopped by extension. Introduced in PHP 5.2.0.';
                break;
            default:
                $response = 'Unknown error';
                break;
        }

        echo $response;
    }
    ?>
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