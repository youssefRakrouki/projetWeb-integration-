
<?PHP
include "header.php";


?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Gestion des vols</a>
            </li>
            <li class="breadcrumb-item active">Ajouter Vol</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Ajouter Vol</div>
            <div class="card-body">
                <form method="POST" action="formVol.php" >
                    <div class="form-group">
                        <div class="form-row">

                            <label >Airline</label>
                            <input class="form-control" name="airline" type="text"  required>

                        </div>
                        <div class="form-row">

                            <label >lieu arrivée</label>
                            <input class="form-control" name="lieu_a"  type="text"    required>

                        </div>
                    </div>
                    <div class="form-group">

                        <label >lieu depart</label>
                        <input class="form-control" name="lieu_d" type="text"  required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">

                            <label >date depart</label>
                            <input class="form-control" name="date_d" type="date"  />

                        </div>
                        <div class="form-row">

                            <label >date retour</label>
                            <input class="form-control" name="date_r" type="date"  required >
                        </div>
                        <div class="form-row">

                            <label >heure depart</label>
                            <input class="form-control" name="heure_d" type="number"  required >
                        </div>

                        <div class="form-row">

                            <label >heure retour</label>
                            <input class="form-control" name="heure_r" type="number"  required >
                        </div>
                        <div class="form-row">

                            <label >prix</label>
                            <input class="form-control" name="prixVol" type="number"  required >
                        </div>
                        <div class="form-row">

                            <label >nombre place</label>
                            <input class="form-control" name="nbPlace" type="number"  required >
                        </div>

                    </div>
                    <input class="form-control" type="submit" name="ajouter" value="ajouter">
                </form>
            </div>


        </div>
    </div>

</div>

<?php include "footer.php";?>

