<?php
session_start();
include "/../../entities\PointFidelite.php";
require "/../../core\PointFideliteC.php";


$uC=new PointFideliteC();
$uC->addCarte($_GET['idClient']);
echo "<script type='text/javascript'>document.location.replace('tableUsers.php');</script>";

//echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
?>