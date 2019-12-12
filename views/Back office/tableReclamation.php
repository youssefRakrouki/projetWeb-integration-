<?php include "header.php" ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Utlisateurs</a>
        </li>
        <li class="breadcrumb-item active">listes des utilisateurs</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des Utilisateurs</div>
        <div class="card-body">
            <div class="row">
                    <label><i class="fa fa-address-card"></i>Période</label>

                    <select id="period" onchange="refreshTable()">
                        <option  value="1">dernier jour</option>
                        <option value="3">dernière semaine</option>
                        <option selected value="3">Tous</option>
                    </select>
            </div>
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Motif</th>
                  <th>Description</th>
                  <th>date de la réclamation</th>
                  <th>ID client</th>
                    <th>Suprimer</th>

                </tr>
              </thead>
              
              <tbody>
              <?php
              include "../../entities\Reclamation.php";
              require "../../core\ReclamationC.php";
              $rC=new ReclamationC();
              $x=$rC->afficherTousReclamations();
              foreach ($x as $rs) {

              ?>
              <tr>
                  <th><?php echo $rs['id']; ?></th>

                  <th><?php echo $rs['motif']; ?></th>
                  <th><?php echo $rs['description']; ?></th>
                  <th><?php echo $rs['dateReclamation']; ?></th>
                  <th><?php echo $rs['idClient']; ?></th>
                  <th><a href="ReclamationSuppression.php?id=<?php echo $rs['id']; ?>">supprimer</a></th>

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
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="../frontOffice/deconnexion.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
