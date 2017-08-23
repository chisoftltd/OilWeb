<?php $student_id = $_GET['student_id']; ?>
<?php
include("mpdf/mpdf.php");
$html .= "
<html>
<head>
<style>
body {font-family: sans-serif;
    font-size: 10pt;
    background-image: url(\"images/ok.jpg\");

    background-repeat: no-repeat;
    padding-top:10pt;
    margin-top: 100px;
    padding-top: 50px;
}
td { vertical-align: top; 
    border-left: 0.6mm solid #000000;
    border-right: 0.6mm solid #000000;
    align: center;
}

p.student_id{
    padding-left : 140px;
    padding-top  : -27px;
} 

</style>
</head>
<body>
<!--mpdf                                                                          

<p class=\"student_id\">$student_id</p>


<sethtmlpageheader name='myheader' value='on' show-this-page='1' />
<sethtmlpagefooter name='myfooter' value='on' />
mpdf-->


</body>
</html>
";

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->SetDisplayMode('fullpage');

$mpdf->Output();
?>