<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 29/07/2017
 * Time: 10:40
 */

ob_start();
session_start();
try{
    require_once 'db/dbConnect.php';
}
catch (Exception $e){
    echo $e->getMessage();
}

mysqli_select_db($link, "localdb");
$sql = "SELECT * FROM menu ORDER BY id";
$stmt = mysqli_query($link, $sql);
$row = mysqli_fetch_array($stmt);
$rowcount = 0;

?>
<header>
    <div id="logo">
        <a href="index.php"><img src="images/RGUEthics.png" alt="Company logo" /></a>
    </div>
    <form style="float: right; position:absolute; right: 5%; top: 10%">
        Search:
        <input type="search" name="googlesearch">
        <input type="Submit">
    </form>
    <nav>
        <ul class="header-links">
            <?php
            echo (mysqli_num_rows($row));
            while ($rowcount < mysqli_num_rows($row)){
                foreach ($row as $key => $value){
                    echo '<li> <a href="">', $value, '</a></li>';
                }
            }
            ?>
        </ul>
    </nav>
</header>