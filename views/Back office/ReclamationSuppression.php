<?php

session_start();
include "/../../entities\Reclamation.php";
require "/../../core\ReclamationC.php";


    $uC=new ReclamationC();
    //var_dump($_GET['id']);
$uC->suuprimerReclamation($_GET['id']);
echo "<script type='text/javascript'>document.location.replace('tableReclamation.php');</script>";
?>