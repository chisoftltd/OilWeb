<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 27/07/2017
 * Time: 20:04
 */
ob_start();
session_start();
try{
    require_once 'db/dbConnect.php';
}
catch (Exception $e){
    echo $e->getMessage();
    echo "here 3";
}

$sql = "SELECT * FROM menu ORDER BY id";
$stmt = mysqli_query($link, $sql);
$row = mysqli_fetch_array($stmt);

echo (mysqli_num_rows($row) == 0) ? 'NO' : 'YES';

// Report all errors
error_reporting(E_ALL);

?>
<head>

    <title>WEB OIL</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<header>
    <div id="weloilmenu">
        <ul>
            <li><a href="">Home</a> </li>
            <ul>
                <li><a href="">Well Drilling</a> </li>
                <li><a href="">Well Control</a> </li>
            </ul>
            <li><a href="">About Us</a> </li>
            <li><a href="">Courses</a> </li>
            <li><a href="">Assessment</a> </li>
            <li><a href="">Submision</a> </li>
            <li><a href="">Demo</a> </li>
            <li><a href="">Contact Us</a> </li>
            <li><a href="">Help</a> </li>
        </ul>
        <ul id="right_weloilmenu">
            <li><a href="">Login</a> </li>
            <li><a href="">Register</a> </li>
        </ul>
    </div>

</header>
<section>
    <div id="all-topic">

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
        <a href="http://www.google.com"> <div id="topic">ipsolum ushf;ahfosaif oiufdsfdgv skudhbv ofdbfds</div></a>

    </div>


</section>
<footer>


</footer>

</body>

</html>