<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <form id="FormAddAboutContact">
                            <h4 style="text-shadow: 0 1px 1px #000;"><b>SECCIÓN "CONTÁCTENOS"</b></h4>
                        
                            <?php
                                $DataObject = $Conexion->query("SELECT * FROM contact_us ORDER BY id DESC LIMIT 1");

                                if ($DataObject->num_rows > 0){

                                    $DObject = $DataObject->fetch_array(MYSQLI_ASSOC);

                                    $tb_AboutTitle      = $DObject['whoami'];
                                    $tb_AboutLocation   = $DObject['location'];
                                    $tb_AboutEmail      = $DObject['email'];
                                    $tb_AboutPhone      = $DObject['phone'];
                                    $fb                 = $DObject['fb'];
                                    $tt                 = $DObject['tt'];
                                    $gp                 = $DObject['gp'];
                                    $li                 = $DObject['li'];
                                } else {
                                    $tb_AboutTitle      = "";
                                    $tb_AboutLocation   = "";
                                    $tb_AboutEmail      = "";
                                    $tb_AboutPhone      = "";
                                    $fb                 = "";
                                    $tt                 = "";
                                    $gp                 = "";
                                    $li                 = "";
                                }
                            ?>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-text-width" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="tb_AboutTitle" name="tb_AboutTitle" value="<?php echo $tb_AboutTitle; ?>" placeholder="¿Quién eres?, Ejm: Nicaragua Bienes Raíces" />
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="tb_AboutLocation" name="tb_AboutLocation" value="<?php echo $tb_AboutLocation; ?>" placeholder="¿En qué lugar te puedo encontrar?" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="tb_AboutEmail" name="tb_AboutEmail" value="<?php echo $tb_AboutEmail; ?>" placeholder="¿Cuál es tu dirección de correo?" />
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="tb_AboutPhone" name="tb_AboutPhone" value="<?php echo $tb_AboutPhone; ?>" placeholder="¿A qué número de teléfono puedo llamar?" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 style="text-shadow: 0 1px 1px #000;"><b>REDES SOCIALES</b></h4>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="tb_AboutFBAddress" name="tb_AboutFBAddress" value="<?php echo $fb; ?>" placeholder="Perfil de Facebook" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="tb_AboutTTAddress" name="tb_AboutTTAddress" value="<?php echo $tt; ?>" placeholder="Perfil de Twitter" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="tb_AboutGPAddress" name="tb_AboutGPAddress" value="<?php echo $gp; ?>" placeholder="Perfil de Google +" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="tb_AboutLIAddress" name="tb_AboutLIAddress" value="<?php echo $li; ?>" placeholder="Perfil de LinkedIn" />
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary" style="float: right;" onclick="javascript: LoadFormAboutContact();">Guardar contacto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("build/modals.php"); ?>