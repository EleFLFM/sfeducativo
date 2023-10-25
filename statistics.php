<?php

include('includes/config.php');

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
                            <h2 class="title">Estadisticas</h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li> Resultados</li>
                                <li class="active">Estadisticas</li>
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
                    <h5>Estadisticas del curso por tests</h5>
                </div>
            </div>
           
            <div class="panel-body p-20">

                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Test</th>
                            <th>Estudiantes que ganaron</th>
                            <th>Estudiantes que perdieron</th>
                            <!-- <th>valor de la Pregunta</th>
                            <th>puntuacion</th> -->

                        </tr>
                        
                    </thead>
                    <tbody>
                        
                                <tr>
                                    <td>1</td>
                                    <td>Test 1</td>
                                    <td>12</td>
                                    <td>8</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Examen</td>
                                    <td>10</td>
                                    <td>10</td>
                                    
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Parcial</td>
                                    <td>15</td>
                                    <td>5</td>
                                    
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Examen final</td>
                                    <td>6</td>
                                    <td>14</td>
                                    
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



