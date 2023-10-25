<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {

?>
    <link rel="stylesheet" type="text/css" href="assets/js/DataTables/datatables.min.css" />
    <!-- ========== TOP NAVBAR ========== -->
    <?php include('includes/topbar.php'); ?>
    <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
    <div class="content-wrapper">
        <div class="content-container">
            <?php include('includes/leftbar.php'); ?>

            <div class="main-page">
                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-md-6">
                            <h2 class="title">Matricular curso</h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li> Resultados</li>
                                <li class="active">Matricular curso</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

                <section class="section">
  
                    <div class="container-fluid">

                            
                    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">codigo de la materia</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Clave</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <a href="" class="btn btn-primary">Registrar</a>
  <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
</form>
<button id="mostrarAlerta" class="btn btn-primary">Mostrar Alerta</button>
    <div id="miAlerta" class="alert alert-success alert-dismissible" style="display: none;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Éxito:</strong> Tu operación se ha completado con éxito.
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>


                                
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-md-6 -->

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.section -->

    </div>
    <!-- /.main-page -->



    </div>
    <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->

    <?php include('includes/footer.php'); ?>



<?php } ?>