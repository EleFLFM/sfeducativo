<?php
//session_start();
//error_reporting(0);

//if (strlen($_SESSION['alogin']) == "") {
//    header("Location: index.php");
//} else {
//?>


    <?php include('includes/topbar.php'); ?>
    <div class="content-wrapper">
        <div class="content-container">

            <?php include('includes/leftbar.php'); ?>

            <div class="main-page">
                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-sm-6">
                            <h2 class="title">Matricula</h2>

                        </div>
                        <!-- /.col-sm-6 -->
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

                <section class="section">
                        <section class="section">
                            <div class="container-fluid">



                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Estudiantes Matriculados</h5>
                                                </div>
                                            </div>
                                           
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre Estudiante</th>
                                                            <th>Documento</th>
                                                            <th>Email</th>
                                                            <th>Fecha Matrícula</th>

                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody>
                                                        
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Juan</td>
                                                                    <td>1002465214</td>
                                                                    <td>Juan@gmail.com</td>
                                                                    <td>12/01/2023</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Daniel</td>
                                                                    <td>1002465214</td>
                                                                    <td>Daniel@gmail.com</td>
                                                                    <td>12/01/2023</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Jose</td>
                                                                    <td>1002465214</td>
                                                                    <td>Jose@gmail.com</td>
                                                                    <td>12/01/2023</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Esteban</td>
                                                                    <td>1002465214</td>
                                                                    <td>Esteban@gmail.com</td>
                                                                    <td>12/01/2023</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>Maria</td>
                                                                    <td>1002465214</td>
                                                                    <td>Maria@gmail.com</td>
                                                                    <td>12/01/2023</td>
                                                                    
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



<?php  ?>