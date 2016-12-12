<?php
    include ("../../connect_server/connect_server.php");

    $id = $_POST['IdMessage'];

    $ThisMessage = $Conexion->query("SELECT * FROM sus_message WHERE id='".$id."' LIMIT 1;");

    if ($ThisMessage->num_rows > 0){
        $ThisMessage = $ThisMessage->fetch_array(MYSQLI_ASSOC);

        $ImgArtMsg   = $Conexion->query("SELECT folder, src FROM publish_img WHERE id_art='".$ThisMessage['id_art']."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
        ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="OpenedMessage">Mensaje</h4>
            </div>
            
            <div class="alert alert-success" role="alert">
            <!-- <div class="alert alert-warning alert-dismissible" role="alert"> -->
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>¡Éxito!.</strong> El mensaje se ha enviado correctamente.
            </div>

            <div class="alert alert-danger" role="alert">
            <!-- <div class="alert alert-warning alert-dismissible" role="alert"> -->
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>¡Up's!.</strong> El mensaje no se ha podido enviar, recargue la página e inténtelo nuevamente.
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-8">
                        <span class="label label-default" style="font-size: 13px;" title="<?php echo $ThisMessage['title_art']; ?>" ><?php echo substr($ThisMessage['title_art'], 0, 50); ?></span>
                    </div>
                    <div class="col-xs-1">
                        <i class="fa fa-user fa-lg" title="<?php echo $ThisMessage['fullname']; ?>" aria-hidden="true" style="cursor: pointer;"></i>
                    </div>
                    <div class="col-xs-1">
                        <i class="fa fa-phone-square fa-lg" title="<?php echo $ThisMessage['phone']; ?>" aria-hidden="true" style="cursor: pointer;"></i>
                    </div>
                    <div class="col-xs-1">
                        <i class="fa fa-comments fa-lg" title="<?php echo $ThisMessage['email'] ?>" aria-hidden="true" style="cursor: pointer;"></i>
                    </div>
                    <div class="col-xs-1">
                        <i class="fa fa-globe fa-lg" title="<?php echo date("Y-m-d H:i", $ThisMessage['date_log_unix']); ?>" aria-hidden="true" style="cursor: pointer;"></i>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <img src="<?php echo "../".$ImgArtMsg['folder'].$ImgArtMsg['src']; ?>" class="img_property" alt="Imagen de la propiedad" />
                    </div>
                    <div class="col-xs-9">
                        <blockquote class="blockquote-primary blockquote-rounded">
                            <p><?php echo $ThisMessage['message']; ?></p>
                            <footer>Enviado por <cite title="Source Title"><?php echo $ThisMessage['fullname']; ?></cite></footer>
                        </blockquote>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <form id="SendAnswerMessage">
                    <input type="hidden" name="id_sms" value="<?php echo $ThisMessage['id']; ?>" />
                    <textarea name="answer_message" id="answer_message" placeholder="Agregar respuesta..."></textarea><br/>
                    <button type="button" class="btn btn-primary" onclick="SendMessageAnswer();" >Enviar mensaje</button>
                </form>
            </div>      
        <?php   
    } else {
        echo "Fail";
    }
?>