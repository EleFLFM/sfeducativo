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
                            <h2 class="title">Gestionar Tests </h2>

                        </div>

                        <!-- /.col-md-6 text-right -->
                    </div>
                    <!-- /.row -->
                    <div class="row breadcrumb-div">
                        <div class="col-md-6">
                            <ul class="breadcrumb">
                                <li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
                                <li> Tests</li>
                                <li class="active">Gestionar Tests </li>
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
                                            <h5>Ver Retroalimentacion</h5>
                                        </div>
                                    </div>
                                    <?php if ($msg) { ?>
                                        <div class="alert alert-success left-icon-alert" role="alert">
                                            <strong>Proceso Correcto! </strong><?php echo htmlentities($msg); ?>
                                        </div><?php } else if ($error) { ?>
                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Algo salió mal! </strong> <?php echo htmlentities($error); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="panel-body p-20">

                                        <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Pregunta</th>
                                                    <th>Respuesta Pregunta</th>
                                                    <th>Respuesta Estudiante</th>
                                                    <th>Puntaje Pregunta</th>
                                                    <th>Retroalimentacion</th>
                                                    
                                                    
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>¿Que es un algoritmo?</td>
                                                <td>Un conjunto de instrucciones para resolver un problema</td>
                                                <td>Un conjunto de instrucciones para resolver un problema</td>
                                                <td>1</td>
                                                <td>Se puede entender un algoritmo como una secuencia de pasos finitos bien definidos que resuelven un problema. Por ejemplo, la ejecución de tareas cotidianas tan simples como cepillarse los dientes, lavarse las manos o seguir el manual de instrucciones de armado de un mueble, se pueden ver como un algoritmo.</td>
                                                
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>¿Que estudia la ingenieria de sistemas?</td>
                                                <td>La planificación y gestión de sistemas complejos </td>
                                                <td>La administración y optimización de procesos industriales</td>
                                                <td>2</td>
                                                <td>La ingeniería de sistemas es un campo interdisciplinario de la ingeniería que permite estudiar y comprender la realidad, con el propósito de implementar u optimizar sistemas complejos.</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>¿Que es un pseudocódigo?</td>
                                                <td>Un lenguaje de programación de alto nivel</td>
                                                <td>Un lenguaje de programación de alto nivel</td>
                                                <td>2</td>
                                                <td>En ciencias de la computación, y análisis numérico, el pseudocódigo​ es una descripción de alto nivel compacta e informal​ del principio operativo de un programa informático u otro algoritmo.</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Que es un lenguaje de programacion?</td>
                                                <td>Un conjunto de reglas gramaticales que permiten a los programadores escribir instruccion</td>
                                                <td>Un conjunto de reglas gramaticales que permiten a los programadores escribir instruccion</td>
                                                <td>2</td>
                                                <td>Un lenguaje de programación es un conjunto de reglas y símbolos que permiten a los programadores escribir instrucciones para que una computadora realice tareas específicas.</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Cual es el algoritmo natural de 60?</td>
                                                <td>6 * 10</td>
                                                <td>6 / 2</td>
                                                <td>1</td>
                                                <td>6 * 10 = 60</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>¿Que es un sistema compuesto?</td>
                                                <td>Un sistema formado por la interacción de múltiples componentes</td>
                                                <td>Un sistema formado por la interacción de múltiples componentes</td>
                                                <td>1</td>
                                                <td>Un sistema compuesto es un sistema que se forma mediante la combinación de dos o más sistemas o componentes individuales. Estos componentes individuales pueden interactuar entre sí y funcionar como un conjunto unificado para cumplir un propósito o realizar una función específica</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>¿Que es una fuente bibliografica?</td>
                                                <td>Un recurso utilizado para obtener información</td>
                                                <td>Un recurso utilizado para obtener información</td>
                                                <td>1</td>
                                                <td>Una fuente bibliográfica es un recurso documental, generalmente un libro, artículo, informe, o cualquier otro material impreso o digital, que proporciona información o datos relacionados con un tema específico. Las fuentes bibliográficas suelen ser utilizadas en investigaciones, trabajos académicos y proyectos de investigación para respaldar afirmaciones, argumentos o para proporcionar evidencia.</td>
                                            </tr>   
                                            <tr>

                                                <td colspan="5">Nota</td>
                                                <td>5</td>
                                            </tr>


                                            



                                                <?php /*$sql = "SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId";
                                                $query = $dbh->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) {   ?>
                                                        <tr>
                                                            <td><?php echo htmlentities($cnt); ?></td>
                                                            <td><?php echo htmlentities($result->StudentName); ?></td>
                                                            <td><?php echo htmlentities($result->RollId); ?></td>
                                                            <td><?php echo htmlentities($result->ClassName); ?>(<?php echo htmlentities($result->Section); ?>)</td>
                                                            <td><?php echo htmlentities($result->RegDate); ?></td>
                                                            <td><?php if ($result->Status == 1) {
                                                                    echo htmlentities('Active');
                                                                } else {
                                                                    echo htmlentities('Blocked');
                                                                }
                                                                ?></td>
                                                            <td>
                                                                <a href="edit-student.php?stid=<?php echo htmlentities($result->StudentId); ?>" class="btn btn-info"><i class="fa fa-edit" title="Edit Record"></i> </a>

                                                            </td>
                                                        </tr>
                                                <?php $cnt = $cnt + 1;
                                                    }
                                                } */ ?> 


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