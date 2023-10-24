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

                <section class="section">
                <div class="container-fluid">



<div class="row">
    <div class="col-md-12">

        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">
                    <h5>EXAMEN</h5>
                </div>
            </div>
           
            <div class="panel-body p-20">

                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pregunta</th>
                            <th>respuesta correcta</th>
                            <th>respuesta del estudiante</th>
                            <th>valor de la Pregunta</th>
                            <th>puntuacion</th>

                        </tr>
                        
                    </thead>
                    <tbody>
                        
                                <tr>
                                    <td>1</td>
                                    <td>Logaritmo Natural de 60</td>
                                    <td>6</td>
                                    <td>60</td>
                                    <td>2,5</td>
                                    <td>0,0</td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2+2</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>2,5</td>
                                    <td>2,5</td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>3*3</td>
                                    <td>9</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>1</td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>5 elevado a la 2</td>
                                    <td>25</td>
                                    <td>20</td>
                                    <td>2,5</td>
                                    <td>0,0</td>
                                    
                                </tr>
                                
        


                    </tbody>
                </table>
                <h5>Puntuacion: 3,5</h5>


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
                                                            <th>#</th>
                                                            <th>Pregunta</th>
                                                            <th>respuesta correcta</th>
                                                            <th>respuesta del estudiante</th>
                                                            <th>valor de la Pregunta</th>
                                                            <th>puntuacion</th>

                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody>
                                                        
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Logaritmo Natural de 60</td>
                                                                    <td>6</td>
                                                                    <td>60</td>
                                                                    <td>2,5</td>
                                                                    <td>0,0</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>2+2</td>
                                                                    <td>4</td>
                                                                    <td>4</td>
                                                                    <td>2,5</td>
                                                                    <td>2,5</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>3*3</td>
                                                                    <td>9</td>
                                                                    <td>8</td>
                                                                    <td>2,5</td>
                                                                    <td>0,0</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>5 elevado a la 2</td>
                                                                    <td>25</td>
                                                                    <td>20</td>
                                                                    <td>2,5</td>
                                                                    <td>0,0</td>
                                                                    
                                                                </tr>
                                                                
                                        


                                                    </tbody>
                                                </table>
                                                <h5>Puntuacion: 2,5</h5>


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