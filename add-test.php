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
                                            <h5>Asignar pregunta a un test</h5>
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

                                        
                                        <div class="form-group col-md-6">
                                                <label for="default" class="control-label">Seleccione Examen</label>
                                                <select name="class" class="form-control" id="default" required="required">
                                                    <option value="">Supletorio</option>
                                                    <option value="">Examen 1</option>
                                                    <option value="">Examen Final</option>
                                                    <option value="">Parcial 2</option>
                                                    <?php /* $sql = "SELECT * from tblclasses";
                                                    $query = $dbh->prepare($sql);
                                                    $query->execute();
                                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                    if ($query->rowCount() > 0) {
                                                        foreach ($results as $result) {   ?>
                                                            <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; Section-<?php echo htmlentities($result->Section); ?></option>
                                                    <? php }
                                                    } */ ?> 
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="default" class="control-label">Pregunta</label>
                                                <input type="text" name="fullanme" class="form-control" id="fullanme" required="required" autocomplete="off" style="height: 100px;">
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
                                <!-- multiple opcion una respuestas-->
                                <div id="multiplechoice" class="questiontype">
                                                    <label for="default" class="control-label">Seleccione Unica Respuesta</label>
                                    
                                                    <div class="checkbox">
                                                        <input type="radio" value="1" name="respuesta">
                                                        <label><input type="text" name="obj1" value=""></label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="radio" value="2" name="respuesta">
                                                        <label><input type="text" name="obj2" value=""></label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="radio" value="3" name="respuesta">
                                                        <label><input type="text" name="obj3" value=""></label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="radio" value="4" name="respuesta">
                                                        <label><input type="text" name="obj4" value=""></label>
                                                    </div>
                                                </div>


                                            <div class=" col-md-6">
                                                <label for="default" class="control-label">Seleccione Respuesta Correcta</label>
                                                <select name="class" class="form-control" id="default" required="required">
                                                    <option value="">A</option>
                                                    <option value="">B</option>
                                                    <option value="">C</option>
                                                    <option value="">D</option>
                                                    <?php /* $sql = "SELECT * from tblclasses";
                                                    $query = $dbh->prepare($sql);
                                                    $query->execute();
                                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                    if ($query->rowCount() > 0) {
                                                        foreach ($results as $result) {   ?>
                                                            <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; Section-<?php echo htmlentities($result->Section); ?></option>
                                                    <? php }
                                                    } */ ?> 
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="" class="control-label">Puntaje Pregunta</label>
                                                <input type="number" name="fullanme" class="form-control" id="" required="required" autocomplete="off" >
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="" class="control-label">Retroalimentacion</label>
                                                <input type="text" name="fullanme" class="form-control" id="" required="required" autocomplete="off" style="height: 100px;">
                                            </div>



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