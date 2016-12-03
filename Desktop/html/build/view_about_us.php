<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-shadow: 0 1px 1px #000;"><b>REDACTA EL ASUNTO "SOBRE NOSOTROS", QUE APARECERÁ EN LA PÁGINA PRINCIPAL</b></h4>
                        <?php include ("edit/index.html"); ?>
                        <button type="button" class="btn btn-primary" style="float: right;" onclick="javascript: AddNowAboutUs();">Agregar ahora</button>
                    </div>
                </div>
            </div>
            <form id="FormAddNowAboutUs">
                <textarea id="write_aboutUs" style="display: none;" name="write_aboutUs"></textarea><br/>
            </form>
            <?php include ("build/modals.php"); ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h4 style="text-shadow: 0 1px 1px #000;"><b>SECCIÓN "CONTÁCTENOS"</b></h4>
                        
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-text-width" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="tb_AboutTitle" name="tb_AboutTitle" placeholder="¿Qué es lo que son?, Ejm: Nicaragua Bienes Raíces" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="tb_AboutLocation" name="tb_AboutLocation" placeholder="¿En qué lugar te puedo encontrar?" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="tb_AboutEmail" name="tb_AboutEmail" placeholder="¿Cuál es tu dirección de correo?" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="tb_AboutPhone" name="tb_AboutPhone" placeholder="¿A qué número de teléfono puedo llamar?" />
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
                                    <input type="text" class="form-control" id="tb_AboutFBAddress" name="tb_AboutFBAddress" placeholder="Perfil de Facebook" />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="tb_AboutTTAddress" name="tb_AboutTTAddress" placeholder="Perfil de Twitter" />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="tb_AboutGPAddress" name="tb_AboutGPAddress" placeholder="Perfil de Google +" />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="tb_AboutLIAddress" name="tb_AboutLIAddress" placeholder="Perfil de LinkedIn" />
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" style="float: right;" onclick="javascript: AddNowAboutUs();">Guardar contacto</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("document").ready(function(){
        loadAboutUs();
    });
</script>