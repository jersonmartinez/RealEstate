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
                
            <div class="MessageSuccessError">
                <!-- Here code of Success or Error -->
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
                            <p style="text-align: justify; font-size: 13px;"><?php echo $ThisMessage['message']; ?></p>
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

            <div class="modal-footer">

                <div class="row">
                    <div class="col-xs-8">
                        <span class="label label-default" style="float: left; font-size: 13px;" title="<?php echo $ThisMessage['title_art']; ?>" ><?php echo substr($ThisMessage['title_art'], 0, 50); ?></span>
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
                    <div class="col-xs-10">
                        <blockquote class="blockquote-rounded blockquote-reverse">
                            <p style="text-align: justify; font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id placeat maiores tempora non provident, mollitia eveniet qui a iusto ducimus quidem vero officiis similique ipsum explicabo et suscipit, totam ipsam.</p>
                        </blockquote>
                    </div>
                    <div class="col-xs-2">
                        <img src="<?php echo "../".$ImgArtMsg['folder'].$ImgArtMsg['src']; ?>" class="img_property_answer" alt="Imagen de la propiedad" />
                    </div>
                </div>
            </div>
        <?php   
    } else {
        echo "Fail";
    }
?>