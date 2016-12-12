<?php
    include ("../../connect_server/connect_server.php");

    $Id = $_POST['SDIdMessage'];

    $All = $Conexion->query("SELECT * FROM answer_message WHERE id_msg='".$Id."' ORDER BY id DESC;");

    if ($All->num_rows > 0){
        while ($Req = $All->fetch_array(MYSQLI_ASSOC)){
            ?>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-xs-10">
                            <span class="label label-default" style="float: left; font-size: 13px;" title="<?php echo $Req['username']; ?>" >Enviado por <b><?php echo substr($Req['username'], 0, 50); ?></b></span>
                        </div>

                        <?php
                            $LoadDataAdmin = $Conexion->query("SELECT email FROM admin_info WHERE username='".$Req['username']."';")->fetch_array(MYSQLI_ASSOC);
                            ?>
                                <div class="col-xs-1">
                                    <i class="fa fa-comments fa-lg" title="<?php echo $LoadDataAdmin['email'] ?>" aria-hidden="true" style="cursor: pointer;"></i>
                                </div>
                            <?php
                        ?>

                        <div class="col-xs-1">
                            <i class="fa fa-globe fa-lg" title="<?php echo date("Y-m-d H:i", $Req['date_time_unix']); ?>" aria-hidden="true" style="cursor: pointer;"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-10">
                            <blockquote class="blockquote-rounded blockquote-reverse">
                                <p style="text-align: justify; font-size: 13px;"><?php echo $Req['message']; ?></p>

                                <?php
                                    $DataContactUs = $Conexion->query("SELECT * FROM contact_us ORDER BY id DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                                ?>
                                <footer>
                                    <?php 
                                        echo $DataContactUs['whoami']." <";
                                        ?>
                                            <cite title="Source Title"><?php echo $DataContactUs['email']; ?></cite>
                                        <?php 
                                        echo ">";
                                    ?> 
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-xs-2">
                            <?php
                                $GetImgPerfilAdmin = $Conexion->query("SELECT folder, src FROM img_perfil WHERE username='".$Req['username']."' ORDER BY id DESC LIMIT 1;");

                                if ($GetImgPerfilAdmin->num_rows > 0){
                                    $GetImgPerfilAdmin = $GetImgPerfilAdmin->fetch_array(MYSQLI_ASSOC);
                                    ?>
                                        <img src="<?php echo "../".$GetImgPerfilAdmin['folder'].$GetImgPerfilAdmin['src']; ?>" class="img_property_answer" alt="Imagen de perfil Administrador" />
                                    <?php
                                } else {
                                    ?>
                                        <img src="../img/img-default/bg_default.jpg" class="img_property_answer" alt="Imagen de perfil Administrador" />
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
        }
    }
?>