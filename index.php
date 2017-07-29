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

?>

<head>

    <title>WEB OIL</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<header>
    <?php include 'include/header.php'; ?>
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