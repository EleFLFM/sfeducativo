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
                            <h2 class="title">Gestionar Resultados</h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li> Resultados</li>
                                <li class="active">Gestionar Resultados</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                <div class="container-fluid">



<div class="row">
    <div class="col-md-12">

        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">
                    <h5>Examen final</h5>
                </div>
            </div>
           
            <div class="panel-body p-20">

                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Test</th>
                            <th>Nombre Estudiante</th>
                            <th>Numero de intentos</th>
                            <th>Puntuacion</th>
                          

                        </tr>
                        
                    </thead>
                    <tbody>
                        
                                <tr>
                                    <td colspan="4">Ningun estudiante ha realizado esta prueba</td>
                                </tr>
                                
        


                    </tbody>
                </table>


                <!-- /.col-md-12 -->
            </div>
        </div>
    </div>
    <!-- /.col-md-6 -->


</div>
<!-- /.col-md-12 -->
</div>
                <section class="section">
                <div class="container-fluid">



<div class="row">
    <div class="col-md-12">

        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">
                    <h5>Supletorio</h5>
                </div>
            </div>
           
            <div class="panel-body p-20">

                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Prueba</th>
                            <th>Nombre Estudiante</th>
                            <th>Numero de intentos</th>
                            <th>Puntuacion</th>
                          

                        </tr>
                        
                    </thead>
                    <tbody>
                        
                                <tr>
                                    <td>Supletorio</td>
                                    <td>Juan Perez</td>
                                    <td>1</td>
                                    <td>2,5</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>Supletorio</td>
                                    <td>Juan Perez</td>
                                    <td>1</td>
                                    <td>2,5</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>Supletorio</td>
                                    <td>Juan Perez</td>
                                    <td>1</td>
                                    <td>2,5</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>Supletorio</td>
                                    <td>Juan Perez</td>
                                    <td>1</td>
                                    <td>2,5</td>
                                    
                                    
                                </tr>
                                
        


                    </tbody>
                </table>


                <!-- /.col-md-12 -->
            </div>
        </div>
    </div>
    <!-- /.col-md-6 -->


</div>
<!-- /.col-md-12 -->
</div>
                    <div class="container-fluid">



                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Test 1</h5>
                                                </div>
                                            </div>
                                           
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Test</th>
                                                            <th>Nombre Estudiante</th>
                                                            <th>Numero de intentos</th>
                                                            <th>Puntuacion</th>
                                                          

                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody>
                                                        
                                                                <tr>
                                                                    <td>Test 1</td>
                                                                    <td>Juan Perez</td>
                                                                    <td>1</td>
                                                                    <td>2,5</td>
                                                                    
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Test 1</td>
                                                                    <td>Juan Perez</td>
                                                                    <td>1</td>
                                                                    <td>2,5</td>
                                                                    
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Test 1</td>
                                                                    <td>Juan Perez</td>
                                                                    <td>1</td>
                                                                    <td>2,5</td>
                                                                    
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Test 1</td>
                                                                    <td>Juan Perez</td>
                                                                    <td>1</td>
                                                                    <td>2,5</td>
                                                                    
                                                                    
                                                                </tr>
                                                                
                                        


                                                    </tbody>
                                                </table>


                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->


                                </div>
                                <!-- /.col-md-12 -->
                            </div>
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