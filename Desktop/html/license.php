<?php
    include ("build/verify.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include ("build/head.php"); ?>
    </head>

   <body class="flat-blue" style="background-image: url('../../images/back/bg1.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="app-container">
            <div class="row content-container">

                <?php include ("build/tape.php"); ?>

                <?php include ("build/menu_left.php"); ?>

                <div class="container-fluid">
                    <div class="side-body">
                        <div class="page-title" style="text-shadow: 1px 2px 3px #000; color: #fff;">
                            <span class="title">Licencia</span>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card">
                                    <div class="card-body">
                                      La licencia MIT (MIT)<br><br>

                                      Derechos de autor (c) [<?php echo date("Y"); ?>] [Diseño y Desarrollo de aplicaciones Web - Jerson M.] (Side Master).<br><br>

                                      Se concede permiso, de forma gratuita, a cualquier persona que obtenga una copia de este software y archivos de documentación asociados (el "Software"), para utilizar el Software sin restricciones, incluyendo, sin limitación, los derechos para usar, copiar, modificar, fusionar, publicar, distribuir, sublicenciar y/o vender copias del Software, y para permitir que las personas a quienes se proporcione el Software para hacerlo, sujeto a las siguientes condiciones:<br><br>

                                      El aviso de copyright anterior y este aviso de permiso se incluirán en todas las copias o partes sustanciales del Software.<br><br>

                                      EL SOFTWARE SE PROPORCIONA "TAL CUAL", sin garantía de ningún tipo, expresa o implícita, incluyendo pero no limitado a las garantías de comerciabilidad, aptitud para un propósito PARTICULAR Y NO. EN NINGÚN CASO LOS AUTORES O COPYRIGHT TITULARES RESPONSABLE POR CUALQUIER RECLAMO, DAÑO U OTRA RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO, AGRAVIO O CUALQUIER OTRO MOTIVO, DE O EN RELACIÓN CON EL SOFTWARE O EL USO U OTROS TRATOS EN EL SOFTWARE.

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card">
                                    <div class="card-body">
                                      <b>TECNOLOGÍA IMPLEMENTADA EN EL PROYECTO</b><br><br>

                                      De lado del cliente: <b>HTML(5)</b> | <b>CSS(3)</b> | <b>JavaScript (JS)</b>, entre los Framework's o Librerías se hace notar <b>Bootstrap</b> | <b>JQuery</b>. <br/>De lado del servidor: <b>PHP (5.6 y superior)</b>, librerías derivadas de este mismo lenguaje.<br><br>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include ("build/modals.php"); ?>
                    </div>
                </div>
            </div>
            <?php include ("build/footer.php"); ?>

            <div>
            <?php include ("build/scripts.php"); ?>
            <script type="text/javascript">
                setTimeout(function(){
                    $("navbar-nav .active").removeClass("active");
                    $(".last__item").addClass("active");
                }, 100);
            </script>
    </body>
</html>
