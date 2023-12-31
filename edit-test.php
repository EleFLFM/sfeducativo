<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #3d85ed !important;
            color: white;
            text-align: center;
        }
    </style>
</head>

<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
    if (isset($_POST['submit'])) {
        $studentname = $_POST['fullanme'];
        $roolid = $_POST['rollid'];
        $studentemail = $_POST['emailid'];
        $gender = $_POST['gender'];
        $classid = $_POST['class'];
        $dob = $_POST['dob'];
        $status = 1;
        $sql = "INSERT INTO  tblstudents(StudentName,RollId,StudentEmail,Gender,ClassId,DOB,Status) VALUES(:studentname,:roolid,:studentemail,:gender,:classid,:dob,:status)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':studentname', $studentname, PDO::PARAM_STR);
        $query->bindParam(':roolid', $roolid, PDO::PARAM_STR);
        $query->bindParam(':studentemail', $studentemail, PDO::PARAM_STR);
        $query->bindParam(':gender', $gender, PDO::PARAM_STR);
        $query->bindParam(':classid', $classid, PDO::PARAM_STR);
        $query->bindParam(':dob', $dob, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "Información del estudiante agregada correctamente";
        } else {
            $error = "Algo salió mal. Inténtalo de nuevo";
        }
    }
?>


    <!-- ========== TOP NAVBAR ========== -->
    <?php include('includes/topbar.php'); ?>
    <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
    <div class="content-wrapper">
        <div class="content-container">

            <!-- ========== LEFT SIDEBAR ========== -->
            <?php include('includes/leftbar.php'); ?>
            <!-- /.left-sidebar -->

            <div class="main-page">

                <div class="container-fluid">
                    <div class="row page-title-div">
                        <div class="col-md-6">
                            <h2 class="title">Agregar Test</h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>

                                <li class="active">Agregar Test</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <section class="section">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Editar test </h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <?php if ($msg) { ?>
                                            <div class="alert alert-success left-icon-alert" role="alert">
                                                <strong>Bien hecho! </strong><?php echo htmlentities($msg); ?>
                                            </div><?php } else if ($error) { ?>
                                            <div class="alert alert-danger left-icon-alert" role="alert">
                                                <strong>Algo salió mal!</strong> <?php echo htmlentities($error); ?>
                                            </div>
                                        <?php } ?>
                                        <form class="row" method="post">

                                            <div class="form-group col-md-12">
                                                <label for="default" class="control-label">Nombre de la prueba</label>
                                                <input type="text" value="Supletorio" name="fullanme" class="form-control" id="fullanme" required="required" autocomplete="off" style="height: 70px;">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="default" class="control-label">Duracion de la prueba en minutos</label>
                                                <input type="text"  value="00:50" name="fullanme" class="form-control" id="fullanme" required="required" autocomplete="off" >
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="default" class="control-label">Numero de intentos</label>
                                                <input type="number" value="2" name="fullanme" class="form-control" id="fullanme" required="required" autocomplete="off" >
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="default" class="control-label">Fecha de inicio</label>
                                                <input type="date" value="2023-12-14" name="fullanme" class="form-control" id="fullanme" required="required" autocomplete="off" >
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="default" class="control-label">Fecha Fin</label>
                                                <input type="date" value="2023-12-15" name="fullanme" class="form-control" id="fullanme" required="required" autocomplete="off" >
                                            </div>


                                            


                                            <!-- <div class="form-group col-md-6">
                                                <label for="default" class="control-label">ID Rol</label>
                                                <input type="text" name="rollid" class="form-control" id="rollid" maxlength="5" required="required" autocomplete="off">

                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="default" class="control-label">Correo</label>

                                                <input type="email" name="emailid" class="form-control" id="email" required="required" autocomplete="off">
                                            </div> -->


<!-- 
                                            <div class="form-group col-md-6">
                                                <label for="default" class="control-label">Género</label>
                                                <input type="radio" name="gender" value="Male" required="required" checked=""> Male <input type="radio" name="gender" value="Female" required="required"> Female <input type="radio" name="gender" value="Other" required="required"> Other

                                            </div> -->
                                           

                                          
                                           


                                            <div class="form-group col-md-12">
                                                <button type="submit" name="submit" class="btn btn-success">Agregar</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- /.col-md-12 -->
                        </div>

                    </div>
                </section>


            </div>

            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->
        <?php include('includes/footer.php'); ?>




    <?PHP } ?>