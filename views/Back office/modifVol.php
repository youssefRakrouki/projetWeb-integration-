<?PHP
include "../../entities/Vol.php";
include "../../core/VolC.php";

if (isset($_POST['idVol'])){
echo"1";
    $volC=new VolC();
echo"2";
    $vol1=new Vol($_POST['airline'],$_POST['lieu_a'],$_POST['lieu_d'],$_POST['date_d'],$_POST['date_r'],$_POST['heure_d'],$_POST['heure_r'],$_POST['prixVol'],$_POST['nbPlace']);

$volC->modifierVol($vol1,$_POST['idVol']);

    header('Location: afficherVol.php');

}
?>
