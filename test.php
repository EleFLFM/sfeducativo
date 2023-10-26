<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {

    $stid = intval($_GET['stid']);

    if (isset($_POST['submit'])) {
        $studentname = $_POST['fullanme'];
        $roolid = $_POST['rollid'];
        $studentemail = $_POST['emailid'];
        $gender = $_POST['gender'];
        $classid = $_POST['class'];
        $dob = $_POST['dob'];
        $status = $_POST['status'];
        $sql = "update tblstudents set StudentName=:studentname,RollId=:roolid,StudentEmail=:studentemail,Gender=:gender,DOB=:dob,Status=:status where StudentId=:stid ";
        $query = $dbh->prepare($sql);
        $query->bindParam(':studentname', $studentname, PDO::PARAM_STR);
        $query->bindParam(':roolid', $roolid, PDO::PARAM_STR);
        $query->bindParam(':studentemail', $studentemail, PDO::PARAM_STR);
        $query->bindParam(':gender', $gender, PDO::PARAM_STR);
        $query->bindParam(':dob', $dob, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':stid', $stid, PDO::PARAM_STR);
        $query->execute();

        $msg = "Información De La pregunta Agragada Correctamente";
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
                            <h2 class="title">Examen Estudiante</h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>

                                <li class="active">Examen Estudiante</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            
                                
                                <div class="form-group col-md-12">
    <h5>Cuestionario Examen 1</h5>
</div>

<div id="multiplechoice" class="questiontype">
    <label for="default" class="control-label" style="size.text:4px">1. ¿Que es un algoritmo?</label>

    <div class="checkbox">
        <label>
            <input type="radio" value="1" name="respuesta"> Un programa de computadora
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="2" name="respuesta"> Un conjunto de instrucciones para resolver un problema
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="3" name="respuesta"> Una pieza de hardware en una computadora.
        </label>
    </div>
    <!-- <div class="checkbox">
        <label>
            <input type="radio" value="4" name="respuesta"> Respuesta 4
        </label>
    </div> -->
</div>
<div id="multiplechoice" class="questiontype">
    <label for="default" class="control-label" style="size.text:4px">2. ¿Que estudia la ingenieria de sistemas?</label>

    <div class="checkbox">
        <label>
            <input type="radio" value="1" name="respuesta2"> El diseño y desarrollo de sistemas eléctricos
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="2" name="respuesta2"> La administración y optimización de procesos industriales
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="3" name="respuesta2">  La planificación y gestión de sistemas complejos 
        </label>
    </div>
    <!-- <div class="checkbox">
        <label>
            <input type="radio" value="4" name="respuesta"> Respuesta 4
        </label>
    </div> -->
</div>

<div id="multiplechoice" class="questiontype">
    <label for="default" class="control-label" style="size.text:4px">3. ¿Que es un pseudocódigo?</label>

    <div class="checkbox">
        <label>
            <input type="radio" value="1" name="respuesta3"> Un lenguaje de programación de alto nivel
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="2" name="respuesta3"> Un lenguaje de programación de bajo nivel
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="3" name="respuesta3"> Un lenguaje intermedio entre el lenguaje humano y maquina
        </label>
    </div>
    <!-- <div class="checkbox">
        <label>
            <input type="radio" value="4" name="respuesta"> Respuesta 4
        </label>
    </div> -->
</div>

<div id="multiplechoice" class="questiontype">
    <label for="default" class="control-label" style="size.text:4px">4. ¿Que es un lenguaje de programacion?</label>

    <div class="checkbox">
        <label>
            <input type="radio" value="1" name="respuesta4"> Un sistema operativo
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="2" name="respuesta4"> Un conjunto de reglas gramaticales que permiten a los programadores escribir instruccion
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="3" name="respuesta4"> Un conjunto de instrucciones que una computadora debe ejecutar
        </label>
    </div>
    <!-- <div class="checkbox">
        <label>
            <input type="radio" value="4" name="respuesta"> Respuesta 4
        </label>
    </div> -->
</div>

<div id="multiplechoice" class="questiontype">
    <label for="default" class="control-label" style="size.text:4px">5. ¿Cual es el algoritmo natural de 60
?</label>

    <div class="checkbox">
        <label>
            <input type="radio" value="1" name="respuesta5"> 6
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="2" name="respuesta5"> 6 / 2
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="3" name="respuesta5"> 6 * 10
        </label>
    </div>
    <!-- <div class="checkbox">
        <label>
            <input type="radio" value="4" name="respuesta"> Respuesta 4
        </label>
    </div> -->
</div>

<div id="multiplechoice" class="questiontype">
    <label for="default" class="control-label" style="size.text:4px">6. ¿Que es un sistema compuesto?</label>

    <div class="checkbox">
        <label>
            <input type="radio" value="1" name="respuesta6"> Un sistema que consta de un solo componente
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="2" name="respuesta6"> Un sistema formado por la interacción de múltiples componentes
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="3" name="respuesta6"> Un sistema que consta de un solo componente.
        </label>
    </div>
    <!-- <div class="checkbox">
        <label>
            <input type="radio" value="4" name="respuesta"> Respuesta 4
        </label>
    </div> -->
</div>

<div id="multiplechoice" class="questiontype">
    <label for="default" class="control-label" style="size.text:4px">7. ¿Que es una fuente bibliografica?</label>

    <div class="checkbox">
        <label>
            <input type="radio" value="1" name="respuesta7"> Un dispositivo de almacenamiento de datos
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="2" name="respuesta7"> Un libro de ficción
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="radio" value="3" name="respuesta7"> Un recurso utilizado para obtener información
        </label>
    </div>
    <!-- <div class="checkbox">
        <label>
            <input type="radio" value="4" name="respuesta"> Respuesta 4
        </label>
    </div> -->
</div>



                                <div class="panel-body">
                                    
                                        
                                   
                                    <form class="form-horizontal" method="post">
                                        <?php

                                        $sql = "SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblstudents.StudentEmail,tblstudents.Gender,tblstudents.DOB,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.StudentId=:stid";
                                        $query = $dbh->prepare($sql);
                                        $query->bindParam(':stid', $stid, PDO::PARAM_STR);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) {  ?>


                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Nombre Completo</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="fullanme" class="form-control" id="fullanme" value="<?php echo htmlentities($result->StudentName) ?>" required="required" autocomplete="off">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">ID Rol</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="rollid" class="form-control" id="rollid" value="<?php echo htmlentities($result->RollId) ?>" maxlength="5" required="required" autocomplete="off">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Correo</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" name="emailid" class="form-control" id="email" value="<?php echo htmlentities($result->StudentEmail) ?>" required="required" autocomplete="off">
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Género</label>
                                                    <div class="col-sm-10">
                                                        <?php $gndr = $result->Gender;
                                                        if ($gndr == "Male") {
                                                        ?>
                                                            <input type="radio" name="gender" value="Male" required="required" checked>Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required">Other
                                                        <?php } ?>
                                                        <?php
                                                        if ($gndr == "Female") {
                                                        ?>
                                                            <input type="radio" name="gender" value="Male" required="required">Male <input type="radio" name="gender" value="Female" required="required" checked>Female <input type="radio" name="gender" value="Other" required="required">Other
                                                        <?php } ?>
                                                        <?php
                                                        if ($gndr == "Other") {
                                                        ?>
                                                            <input type="radio" name="gender" value="Male" required="required">Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required" checked>Other
                                                        <?php } ?>


                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Año</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="classname" class="form-control" id="classname" value="<?php echo htmlentities($result->ClassName) ?>(<?php echo htmlentities($result->Section) ?>)" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="dob" class="form-control" value="<?php echo htmlentities($result->DOB) ?>" id="date">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Fecha de Registro: </label>
                                                    <div class="col-sm-10">
                                                        <?php echo htmlentities($result->RegDate) ?>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Estado</label>
                                                    <div class="col-sm-10">
                                                        <?php $stats = $result->Status;
                                                        if ($stats == "1") {
                                                        ?>
                                                            <input type="radio" name="status" value="1" required="required" checked>Active <input type="radio" name="status" value="0" required="required">Block
                                                        <?php } ?>
                                                        <?php
                                                        if ($stats == "0") {
                                                        ?>
                                                            <input type="radio" name="status" value="1" required="required">Active <input type="radio" name="status" value="0" required="required" checked>Block
                                                        <?php } ?>



                                                    </div>
                                                </div>

                                        <?php }
                                        } ?>


<div class="container">
        <div class="row">
            <div class="col-sm-offset-0 col-sm-10">
                <button type="button" id="submitBtn" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        <br><br>

        <div id="successMessage" style="display: none;">
            <h5>¡Envío exitoso! Redireccionando a otra página...</h5>
        </div>
    </div>

    <script>
        // Agregar un evento de clic al botón "Enviar"
        document.getElementById("submitBtn").addEventListener("click",function()  {
            // Mostrar el mensaje de éxito
            document.getElementById("successMessage").style.display = "block";
            document.getElementById("submitBtn").addEventListener("click", function() {
            alert("Correcto"); // Muestra una alerta con el mensaje "Correcto"
});
            // Redirigir a otra página después de un cierto tiempo (por ejemplo, 2 segundos)
            setTimeout(function() {
                window.location.href = "answer.php";
            }, 1000); // 2000 milisegundos = 2 segundos
        });
    </script>
 <br><br><br><br><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                </div>
            </div>
            <!-- /.content-container -->
        </div>
        <!-- /.content-wrapper -->
        <?php include('includes/footer.php'); ?>



    <?PHP } ?>