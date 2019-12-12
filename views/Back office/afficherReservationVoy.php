<?PHP
include "header.php";


?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Vol</a>
            </li>
            <li class="breadcrumb-item active">listes des Reservation</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Liste des reservation</div>
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>idR</th>
                            <th>cin</th>
                            <th>idVol</th>
                            <th>valid</th>
                            <th>date reservation</th>
                            <th>prix</th>
                            <th>Validation</th>
                            <th>Suppression</th>



                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        include "../../entities/ReservationVoy.php";
                        require '../../core/ReservationVoyC.php';



                        $res=new ReservationVoyC();

                        $liste1=$res->affichReservation();
                        foreach ($liste1 as $emp) {

                            ?>
                            <tr>
                                <td><?php echo $emp['idR']; ?></td>
                                <td><?php echo $emp['cin']; ?></td>
                                <td><?php echo $emp['idVo']; ?></td>

                                <td><h3 style="color: #34ce57"><?php $x=$emp['valid']; if($x==1) echo"valid ";  ?> </h3></td>
                                <td><?php echo $emp['dateReservation']; ?></td>
                                <td><?php echo $emp['prix']; ?></td>
                                <td><a href="modifierReservationVoy.php?idR=<?PHP echo $emp['idR']; ?>">Valider</a></td>
                                <td><a href="supprimerReservationVoy.php?idR=<?PHP echo $emp['idR']; ?>">supprimer</a></td>

                            </tr>

                            <?php
                        }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <?php include 'footer.php' ; ?>

