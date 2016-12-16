<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-shadow: 0 1px 1px #000;"><b>SELECCIONA 5 ELEMENTOS, QUE SON LOS ARTÍCULOS QUE APARECERÁN CON SU RESPECTIVA IMAGEN EN EL SLIDER.</b></h4>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $QuaArt = $Conexion->query("SELECT * FROM article;")->num_rows / 2;
            $QuaArtTwo = floor($QuaArt) + 1;
        ?>

        <div class="row">
            <div class="col-xs-6">
                <div class="row  no-margin-bottom">
                    
                    <?php
                        $GetArtTitle = $Conexion->query("SELECT * FROM article ORDER BY id_art DESC LIMIT ".floor($QuaArt).";");

                        while ($RowArtTitle = $GetArtTitle->fetch_array(MYSQLI_ASSOC)){
                            ?>
                                 <div class="col-sm-12 col-xs-12">
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <div class="card-title checked_slider" style="width: 100%;">
                                                <div class="title"><i class="fa fa-certificate"></i> <?php echo $RowArtTitle['title']; ?><i class="fa fa-check-circle-o fa-2x" style="float: right; cursor: pointer;"></i></div>
                                            </div>
                                            <div class="clear-both">
                                                
                                            </div>
                                        </div>
                                        <div class="card-body no-padding">
                                           <?php
                                                $GetImgArt = $Conexion->query("SELECT folder, src FROM publish_img WHERE id_art='".$RowArtTitle['id_art']."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                                            ?>
                                            <ul class="message-list" style="background: url('<?php echo '../'.$GetImgArt['folder'].$GetImgArt['src']; ?>') #2d2; height: 200px; background-size: cover;">
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <form id="FormAddSlider<?php echo $RowArtTitle['id_art']; ?>">
                                    <input type="hidden" name="slider_id_art" id="slider_id_art" value="<?php echo $RowArtTitle['id_art']; ?>" />
                                    <input type="hidden" name="slider_id_img" id="slider_id_img" value="<?php echo $RowArtTitle['id_art']; ?>" />
                                </form>
                            <?php
                        }
                    ?>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="row  no-margin-bottom">
                    
                    <?php
                        $GetArtTitleTwo = $Conexion->query("SELECT * FROM article ORDER BY id_art DESC;");
                        $Quality = 1;

                        while ($RowArtTitleTwo = $GetArtTitleTwo->fetch_array(MYSQLI_ASSOC)){
                            if ($Quality >= $QuaArtTwo){
                                ?>
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <div class="card-title checked_slider" style="width: 100%;">
                                                    <div class="title"><i class="fa fa-certificate"></i> <?php echo $RowArtTitleTwo['title']; ?><i class="fa fa-check-circle fa-2x" style="float: right; cursor: pointer;"></i></div>
                                                </div>
                                                <div class="clear-both"></div>
                                            </div>
                                            <div class="card-body no-padding">
                                                <?php
                                                    $GetImgArtTwo = $Conexion->query("SELECT folder, src FROM publish_img WHERE id_art='".$RowArtTitleTwo['id_art']."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                                                ?>
                                                <ul class="message-list" style="background: url('<?php echo '../'.$GetImgArtTwo['folder'].$GetImgArtTwo['src']; ?>') #2d2; height: 200px; background-size: cover;">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }

                            $Quality++;
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>