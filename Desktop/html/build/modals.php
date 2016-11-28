<input type="hidden" class="change-img_perfil" data-toggle="modal" data-target="#ChangeImgPerfil"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="ChangeImgPerfil" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar nueva imagen de perfil</h4>
            </div>
            <div class="modal-body">
                <form id="Form_SendImgPerfil" enctype="multipart/form-data">
                    <input type="file" name="imagen" onchange="javascript: upload_img_perfil();" />
                </form>
                <div class="show_img_perfil"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="javascript: ListenerClickOkImgPerfil();">OK</button>
            </div>
        </div>
    </div>
</div>


<!-- This is the modal window of the agents. -->
<input type="hidden" class="add-agent-now" data-toggle="modal" data-target="#AddAgent"  />
<!-- Modal -->
<div class="modal fade modal-primary" onclick="javascript: ReloadAgentSelect();" id="AddAgent" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar agente</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Nombres y apellidos</h3>
                            </div>
                            <div class="panel-body">
                                <input type="text" class="form-control" id="id_names" placeholder="* Nombres" /><br/>
                                <input type="text" class="form-control" id="id_lastnames" placeholder="* Apellidos" />
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Email, Localidad & Descripción</h3>
                            </div>
                            <div class="panel-body">
                                <input type="email" class="form-control" id="id_email_address" placeholder="* Dirección de correo" /><br/>
                                <input type="text" class="form-control" id="id_location" placeholder="* Localidad" />
                                <br/><textarea class="form-control" rows="3" id="id_description" style="max-width: 237px;" placeholder="Escribir descripción..."></textarea>
                            </div>
                        </div>
                     </div>

                     <div class="col-xs-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Líneas de contacto</h3>
                            </div>
                            <div class="panel-body">
                                <input type="text" class="form-control" id="id_phone_claro" placeholder="Nº de teléfono Claro" /><br/>
                                <input type="text" class="form-control" id="id_phone_movistar" placeholder="Nº de teléfono Movistar" />
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Imagen de perfil (Opcional)</h3>
                            </div>
                            <div class="panel-body">
                                <form id="NewForm_SendAgentImgPerfil" enctype="multipart/form-data">
                                    <input type="file" id="id_path_img" name="new_imagen" style="width: 200px;" onchange="javascript: upload_agent_img_perfil();" />
                                </form>
                                <div class="show_agent_img_perfil"></div>

                            </div>
                        </div>

                     </div>

                     <form id="AllDataAgents">
                         <input type="hidden" id="names" value="" name="names" />
                         <input type="hidden" id="lastnames" value="" name="lastnames" />

                         <input type="hidden" id="email_address" value="" name="email_address" />
                         <input type="hidden" id="location" value="" name="location" />
                         <input type="hidden" id="description" value="" name="description" />

                         <input type="hidden" id="phone_claro" value="" name="phone_claro" />
                         <input type="hidden" id="phone_movistar" value="" name="phone_movistar" />

                         <input type="hidden" id="path_img" name="path_img" />
                     </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="javascript: RegisterAgent();" class="btn btn-primary">Registrar agente</button>
            </div>
        </div>
    </div>
</div>


<!-- Este es para las opciones del agente!. -->
<input type="hidden" class="show-optionsAgent" data-toggle="modal" data-target="#ShowOptionsAgent"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="ShowOptionsAgent" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyAgentNames"></h4>
            </div>

            <form id="ShowDataAgentByEmail">
                <input type="hidden" id="ValueAgentByEmail" name="ValueAgentByEmail" />
            </form>

            <div class="modal-body ContentDataAgent">
                <!-- Aquí es donde se escribe la información con la petición -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="javascript: CallWindowModalDeleteAgent();">Eliminar</button>
                <button type="button" class="btn btn-info" onclick="javascript: UpdateAgentNow();">Actualizar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- ¿Está seguro que desea eliminar el elemento? -->
<input type="hidden" class="deleteAgentmodal" data-toggle="modal" data-target="#DeleteAgentModal"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="DeleteAgentModal" tabindex="1" role="dialog" aria-labelledby="myModalLabelDeleteAgent" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabelDeleteAgent">Eliminar agente</h4>
            </div>
            <div class="modal-body">
                <p>¿Seguro que desea eliminar el Agente?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" onclick="javascript: DeleteAgent();">Sí</button>
            </div>
        </div>
    </div>
</div>


<!-- Opciones de la imagen seleccionada!. -->
<input type="hidden" class="ImgSelectedOptions" data-toggle="modal" data-target="#ImgSelectedOptions"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="ImgSelectedOptions" tabindex="1" role="dialog" aria-labelledby="MyImgSelectedOptions" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyImgSelectedOptions"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Vista previa</h3>
                            </div>
                            <div class="panel-body">
                                <img id="ImgAmplia" src="" />
                            </div>
                        </div>
                     </div>
                </div>
            </div>

            <form id="NameImgToDelete">
                <input type="hidden" id="MyNameImgDelete" name="MyNameImgDelete" />
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="javascript: DeleteImgWriteArticle();">Eliminar</button>
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Artículo agregado con éxito!. -->
<input type="hidden" class="InfoArtAddYes" data-toggle="modal" data-target="#InfoArtAddYes"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="InfoArtAddYes" tabindex="1" role="dialog" aria-labelledby="MyInfoArtAddYes" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyInfoArtAddYes"></h4>
            </div>
            <div class="modal-body">
                <h4>El artículo fue agregado con éxito</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="javascript: window.location.href='./articles.php';" data-dismiss="modal">¡OK!...</button>
            </div>
        </div>
    </div>
</div>

<!-- Rellene todos los campos!. -->
<input type="hidden" class="RelleneTodosLosDatos" data-toggle="modal" data-target="#RelleneTodosLosDatos"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="RelleneTodosLosDatos" tabindex="1" role="dialog" aria-labelledby="MyRelleneTodosLosDatos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyRelleneTodosLosDatos">Datos incompletos</h4>
            </div>
            <div class="modal-body">
                <p>Para publicar el artículo, debe de rellenar todos los campos que se encuentran vacíos, así no habrán problemas para mostrar los datos de forma correcta.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">¡Verificaré!...</button>
            </div>
        </div>
    </div>
</div>


<!-- Agregar nuevo tipo de propiedad. -->
<input type="hidden" class="AddNewTypePropertyNow" data-toggle="modal" data-target="#AddNewTypePropertyNow"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="AddNewTypePropertyNow" tabindex="1" role="dialog" aria-labelledby="MyAddNewTypePropertyNow" onclick="javascript: getPropiertyTypeBox();" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyAddNewTypePropertyNow">Agregar tipo de propiedad</h4>
            </div>
            <div class="modal-body">
                
                <div class="panel tagcloud-widget">
                  <div class="panel-heading">
                    <span class="panel-icon">
                      <i class="fa fa-pencil"></i>
                    </span>
                    <span class="panel-title">Después de escribir la categoría, presione Enter para guardar.</span>
                  </div>
                  <div class="panel-body">
                    <form id="SendDataTagPropertyType">
                        <input type="text" class="form-control" name="writeTagProperty_type" id="writeTagProperty_type" placeholder="Escriba aquí..." />
                    </form>
                    <div class="setDataTagPropertyType">
                       <?php
                            $getObjAddPT = $Conexion->query("SELECT * FROM property_type;");

                            if ($getObjAddPT->num_rows > 0){
                                while ($getDataPTAdd = $getObjAddPT->fetch_array(MYSQLI_ASSOC)){
                                    ?>
                                        <span class="label label-primary" style="font-size: 16px; margin: 10px 10px 0 0; display: inline-table;" ><?php echo $getDataPTAdd['name_type']; ?>

                                            <i class="fa fa-times" style="margin: 0 5px; cursor: pointer;" title="Eliminar" aria-hidden="true" onclick="javascript: DeleteTagPropertyType('<?php echo $getDataPTAdd['id'] ?>');" ></i>
                                        </span>
                                    <?php
                                }
                            }
                        ?>
                    </div>

                    <form id="SendDataDeletePropertyType">
                        <input type="hidden" class="form-control" name="DelTagPT" id="DelTagPT" />
                    </form>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="javascript: getPropiertyTypeBox();" data-dismiss="modal">¡Okay!...</button>
            </div>
        </div>
    </div>
</div>



<!-- Este es para las opciones del artículo!. -->
<input type="hidden" class="show-optionsArticle" data-toggle="modal" data-target="#ShowOptionsArticle"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="ShowOptionsArticle" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyArticleTitle">Información del artículo</h4>
            </div>

            <div class="row">

                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-body no-padding">
                            <div class="step card-no-padding">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li role="step" class="active step-success">
                                        <a href="#step1-2" id="step1-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                            <div class="icon fa fa-pencil"></div>
                                            <div class="step-title">
                                                <div class="title">Redacción</div>
                                                <div class="description">La descripción, título y contenido.</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li role="step">
                                        <a href="#step2-2" role="tab" id="step2-tab" data-toggle="tab" aria-controls="profile">
                                            <div class="icon fa fa-picture-o"></div>
                                            <div class="step-title">
                                                <div class="title">Mis imágenes</div>
                                                <div class="description">Los cambios se aplicarán automaticamente.</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li role="step">
                                        <a href="#step3-2" role="tab" id="step3-tab" data-toggle="tab" aria-controls="profile">
                                            <div class="icon fa fa-bar-chart"></div>
                                            <div class="step-title">
                                                <div class="title">Información de negocios</div>
                                                <div class="description">Precio, agente, localización...</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="step1-2" aria-labelledby="home-tab">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Redacción</h3>
                                            </div>
                                            <div class="panel-body">
                                                <input type="text" class="form-control" id="InsertTitleArticle" placeholder="Título del artículo..." />
                                                <?php include ("edit/index.html"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="step2-2" aria-labelledby="profile-tab">
                                        <div class="mensage"></div>
                                        <table align="center">
                                            <tr>
                                                 <td><input type="file" multiple="multiple" id="archivos" onchange="javascript: UploadPhotos();"></td><!-- Este es nuestro campo input File -->
                                            </tr> 
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="step3-2" aria-labelledby="dropdown1-tab">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <form id="ShowDataArticleByID">
                <input type="hidden" id="ValueArticleByID" name="ValueArticleByID" />
            </form>

            <form id="SendAllDataUpdateArt">
                <input type="hidden" id="Send_ValueArticleByID" name="Send_ValueArticleByID" />

                <input type="hidden" id="Send_InsertTitleArticle" name="Send_InsertTitleArticle" />
                <input type="hidden" id="Send_trumbowyg-demo" name="Send_trumbowyg-demo" />

                <input type="hidden" id="Send_precio_dolar" name="Send_precio_dolar" />
                <input type="hidden" id="Send_departamento_local" name="Send_departamento_local" />
                <input type="hidden" id="Send_ciudad_local" name="Send_ciudad_local" />
                <input type="hidden" id="Send_direccion_local" name="Send_direccion_local" />

                <input type="hidden" id="Send_select_agent" name="Send_select_agent" />

                <input type="hidden" id="Send_select_business_type" name="Send_select_business_type" />
                <input type="hidden" id="Send_select_property_type" name="Send_select_property_type" />
                <input type="hidden" id="Send_select_property_state" name="Send_select_property_state" />

                <input type="hidden" id="Send_select_bed_room" name="Send_select_bed_room" />
                <input type="hidden" id="Send_select_living_room" name="Send_select_living_room" />
                <input type="hidden" id="Send_select_parking" name="Send_select_parking" />
                <input type="hidden" id="Send_select_kitchen_now" name="Send_select_kitchen_now" />

                <input type="hidden" id="Send_coord_latitude" name="Send_coord_latitude" />
                <input type="hidden" id="Send_coord_longitude" name="Send_coord_longitude" />
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="javascript: DelArtModal();">Eliminar</button>
                <button type="button" class="btn btn-info" onclick="javascript: UpdateListItemArt();">Actualizar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Opciones de la imagen seleccionada!. -->
<input type="hidden" class="SelectImgArticle" data-toggle="modal" data-target="#SelectImgArticle"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="SelectImgArticle" tabindex="1" role="dialog" aria-labelledby="MySelectImgArticle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MySelectImgArticle"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Vista previa</h3>
                            </div>
                            <div class="panel-body">
                                <img id="ImgArtBig" src="" />
                            </div>
                        </div>
                     </div>
                </div>
            </div>

            <form id="SendImgtoDeleteNow">
                <input type="hidden" id="newidimgdel" name="newidimgdel" />
                <input type="hidden" id="MynImgDel" name="MynImgDel" />
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="javascript: DelArtModalImage();">Eliminar</button>
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Artículo actualizado con éxito!. -->
<input type="hidden" class="InfoArtUpdateYes" data-toggle="modal" data-target="#InfoArtUpdateYes"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="InfoArtUpdateYes" tabindex="1" role="dialog" aria-labelledby="MyInfoArtUpdateYes" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyInfoArtUpdateYes">Actualización del artículo</h4>
            </div>
            <div class="modal-body">
                <h4>El artículo fue actualizado con éxito</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="javascript: window.location.href='./articles.php';" data-dismiss="modal">¡OK!...</button>
            </div>
        </div>
    </div>
</div>


<!-- ¿Está seguro que desea eliminar el elemento? -->
<input type="hidden" class="DelArtModal" data-toggle="modal" data-target="#DelArtModal"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="DelArtModal" tabindex="1" role="dialog" aria-labelledby="MyDelArtModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyDelArtModal">Eliminar artículo</h4>
            </div>
            <div class="modal-body">
                <p>¿Seguro que desea eliminar el Artículo?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" onclick="javascript: DelArtNow();">Sí</button>
            </div>
        </div>
    </div>
</div>

<!-- ¿Está seguro que desea eliminar la imagen seleccionada? -->
<input type="hidden" class="DelArtModalImage" data-toggle="modal" data-target="#DelArtModalImage"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="DelArtModalImage" tabindex="1" role="dialog" aria-labelledby="MyDelArtModalImage" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyDelArtModalImage">Eliminar imagen seleccionada</h4>
            </div>
            <div class="modal-body">
                <p>¿Seguro que desea eliminar la imagen seleccionada?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default exit_default" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" onclick="javascript: DelImgArtNow();">Sí</button>
            </div>
        </div>
    </div>
</div>


<!-- ¿Cambiar correo electrónico? -->
<input type="hidden" class="ChgEmail" data-toggle="modal" data-target="#ChgEmail"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="ChgEmail" tabindex="1" role="dialog" aria-labelledby="MyChgEmail" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyChgEmail">Modificar E-mail</h4>
            </div>
            <div class="modal-body">
                <div class="panel-heading">

                    <div class="row">
                        <div class="col-xs-6">
                            <span class="panel-icon">
                                 <i class="fa fa-pencil"></i>
                            </span>
                            <span class="panel-title">Correo electrónico actual.</span>
                            
                            <h5 id="h5_email" style="margin-left: 50px; background-color: #F0F0F0; padding: 4px; border-radius: 12px; width: -moz-max-content;">
                                <?php
                                    echo $Conexion->query("SELECT email FROM admin_info WHERE username='".$_SESSION['username']."';")->fetch_array(MYSQLI_ASSOC)['email'];
                                ?>
                            </h5>
                        </div>

                        <div class="col-xs-6">
                            <?php
                                $src_img_ext = $Conexion->query("SELECT * FROM img_perfil WHERE username='".$_SESSION['username']."' ORDER BY id DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                            ?>
                            <div style="background: url('<?php echo "../".$src_img_ext['folder'].$src_img_ext['src']; ?>'); width: 80px; height:80px; border-radius: 50% 50%; background-size: cover; border: 3px solid lightgrey; float: right;">
                                
                            </div>
                        </div>
                        
                    </div>
                </div>

                <form id="ChgEAdressFrom">
                    <input type="text" class="form-control" id="new_email_address" name="new_email_address" placeholder="* Nueva dirección de correo electrónico" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="javascript: ApplyChgEmail();">Aplicar</button>
            </div>
        </div>
    </div>
</div>


<!-- ¿Cambiar nombre de usuario? -->
<input type="hidden" class="ChgUserPerfil" data-toggle="modal" data-target="#ChgUserPerfil"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="ChgUserPerfil" tabindex="1" role="dialog" aria-labelledby="MyChgUserPerfil" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyChgUserPerfil">Modificar nombre de usuario</h4>
            </div>
            <div class="modal-body">
                <div class="panel-heading">

                    <div class="row">
                        <div class="col-xs-8">
                            <span class="panel-icon">
                                 <i class="fa fa-pencil"></i>
                            </span>
                            <span class="panel-title">El nombre de usuario tiene que ser único.</span>
                            
                            <h5 id="h5_username" style="margin-left: 50px; background-color: #F0F0F0; padding: 4px; border-radius: 12px; width: -moz-max-content;">
                                <?php
                                    echo $_SESSION['username'];
                                ?>
                            </h5>
                        </div>

                        <div class="col-xs-4">
                            <?php
                                $src_img_ext = $Conexion->query("SELECT * FROM img_perfil WHERE username='".$_SESSION['username']."' ORDER BY id DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                            ?>
                            <div style="background: url('<?php echo "../".$src_img_ext['folder'].$src_img_ext['src']; ?>'); width: 80px; height:80px; border-radius: 50% 50%; background-size: cover; border: 3px solid lightgrey; float: right;">
                                
                            </div>
                        </div>

                        
                    </div>
                </div>

                <form id="ChgUserPerfilForm">
                    <input type="text" class="form-control" id="new_user_perfil" name="new_user_perfil" placeholder="* Nuevo nombre de usuario" />
                </form>
                <div class="Incrustar">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="javascript: ApplyChgUserName();">Aplicar</button>
            </div>
        </div>
    </div>
</div>


<!-- Menu de configuración -->
<input type="hidden" class="MenuConfig" data-toggle="modal" data-target="#MenuConfig"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="MenuConfig" tabindex="1" role="dialog" aria-labelledby="MyMenuConfig" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyMenuConfig">Configuración de usuario</h4>
            </div>
            <div class="modal-body">
                <div class="panel-heading">

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <a href="#" onclick="javascript: ChgUserPerfil('close');">
                                <div class="card blue summary-inline">
                                    <div class="card-body">
                                        <i class="icon fa fa-user fa-4x"></i>
                                        <div class="content">
                                            <div class="title">UN</div>
                                            <div class="sub-title">Modificar nombre de usuario</div>
                                        </div>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <a href="#" onclick="javascript: ChgEmailModal('close');">
                                <div class="card yellow summary-inline">
                                    <div class="card-body">
                                        <i class="icon fa fa-comments fa-4x"></i>
                                        <div class="content">
                                            <div class="title">E-M</div>
                                            <div class="sub-title">Modificar correo electrónico</div>
                                        </div>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <a href="#" onclick="javascript: ChgPasswordModal('close');">
                                <div class="card green summary-inline">
                                    <div class="card-body">
                                        <i class="icon fa fa-comments fa-4x"></i>
                                        <div class="content">
                                            <div class="title">PW</div>
                                            <div class="sub-title">Modificar contraseña</div>
                                        </div>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- ¿Cambiar contraseña? -->
<input type="hidden" class="ChgPasswordModal" data-toggle="modal" data-target="#ChgPasswordModal"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="ChgPasswordModal" tabindex="1" role="dialog" aria-labelledby="MyChgPasswordModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyChgPasswordModal">Modificar contraseña</h4>
            </div>
            <div class="modal-body">
                <div class="panel-heading">

                    <div class="row">
                        <div class="col-xs-8">
                            <span class="panel-icon">
                                 <i class="fa fa-pencil"></i>
                            </span>
                            <span class="panel-title">Escriba la nueva contraseña para el usuario: </span>
                            
                            <h5 id="h5_username" style="margin-left: 50px; background-color: #F0F0F0; padding: 4px; border-radius: 12px; width: -moz-max-content;">
                                <?php
                                    echo $_SESSION['username'];
                                ?>
                            </h5>
                        </div>

                        <div class="col-xs-4">
                            <?php
                                $src_img_ext = $Conexion->query("SELECT * FROM img_perfil WHERE username='".$_SESSION['username']."' ORDER BY id DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                            ?>
                            <div style="background: url('<?php echo "../".$src_img_ext['folder'].$src_img_ext['src']; ?>'); width: 80px; height:80px; border-radius: 50% 50%; background-size: cover; border: 3px solid lightgrey; float: right;">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <form id="ChgPassPerfilForm">
                    <input type="password" class="form-control" id="old_password" name="old_password" placeholder="* Escriba la contraseña actual" /><br/>
                    <input type="password" class="form-control" id="new_passwordUser" name="new_passwordUser" placeholder="* Nueva clave de acceso" /><br/>
                    <input type="password" class="form-control" id="repeat_new_passwordUser" name="repeat_new_passwordUser" placeholder="* Repita la clave de acceso" />
                </form>
                <div class="Incrustar_password">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="javascript: ApplyChgPW();">Aplicar</button>
            </div>
        </div>
    </div>
</div>


<!-- Crear un nuevo usuario -->
<input type="hidden" class="CreateUserNow" data-toggle="modal" data-target="#CreateUserNow"  />

<div class="modal fade modal-primary" id="CreateUserNow" tabindex="1" role="dialog" aria-labelledby="MyCreateUserNow" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyCreateUserNow">Crear usuario</h4>
            </div>
            <div class="modal-body">
                
                <form id="SendEnterNewUser">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Nombre de usuario, E-mail</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" class="form-control" name="Enter_UserName" id="Enter_UserName" placeholder="* Nombre de usuario" /><br/>
                                    <input type="text" class="form-control" name="Enter_Email" id="Enter_Email" placeholder="* Correo electrónico" />
                                    
                                </div>
                            </div>
                         </div>
                         <div class="col-xs-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Escriba la clave</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="password" class="form-control" name="Enter_PassWord" id="Enter_PassWord" placeholder="* Contraseña" /><br/>
                                    <input type="password" class="form-control" name="Enter_RepeatPassWord" id="Enter_RepeatPassWord" placeholder="* Repita la contraseña" />
                                </div>
                            </div>
                         </div>
                    </div>
                </form>

                <div class="Incrustar_User">
                    
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="javascript: CreateTheUser();">Crear</button>
            </div>
        </div>
    </div>
</div>


<!-- Detalles del usuario -->
<input type="hidden" class="Details_username" data-toggle="modal" data-target="#Details_username"  />

<div class="modal fade modal-primary" id="Details_username" tabindex="1" role="dialog" aria-labelledby="MyDetails_username" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyDetails_username"></h4>
            </div>
            <div class="modal-body">
                
                <form id="DataEnterDelUser">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Usuario, E-mail, Fecha</h3>
                                </div>
                                <div class="panel-body">
                                    <input type="text" class="form-control" name="DataDel_UserName" id="DataDel_UserName" placeholder="* Nombre de usuario" /><br/>
                                    <input type="text" class="form-control" name="DataDel_Email" id="DataDel_Email" placeholder="* Correo electrónico" /><br/>
                                    <input type="text" class="form-control" name="DataDel_Publish" id="DataDel_Publish" placeholder="Fecha de publicación" /><br/>
                                </div>
                            </div>
                         </div>
                         <div class="col-xs-6">
                            <div class="insert_img_user">
                            </div>
                         </div>
                    </div>
                </form>

               <input type="hidden" id="objt_username" value="<?php echo $_SESSION['username']; ?>" />

            </div>
            <div class="modal-footer modal_footer_ya">
                
            </div>
        </div>
    </div>
</div>


<!-- ¿Está seguro que desea eliminar el usuario? -->
<input type="hidden" class="OpenModalDeleteLie" data-toggle="modal" data-target="#OpenModalDeleteLie"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="OpenModalDeleteLie" tabindex="1" role="dialog" aria-labelledby="MyOpenModalDeleteLie" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyOpenModalDeleteLie">Eliminar usuario</h4>
            </div>
            <div class="modal-body">
                <p><b>¿Seguro que desea eliminar el usuario?</b></p>
                <p>Si elimina el usuario, los artículos que este haya creado se eliminarán porque se encontrarán sin propietarios.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" onclick="javascript: DelUserShure();">Sí</button>
            </div>
        </div>
    </div>
</div>



<!-- Mostra la lista de suscripciones -->
<input type="hidden" class="OpenListSuscriptions" data-toggle="modal" data-target="#OpenListSuscriptions"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="OpenListSuscriptions" tabindex="1" role="dialog" aria-labelledby="MyOpenListSuscriptions" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyOpenListSuscriptions">Suscriptores</h4>
            </div>
            <div class="modal-body modal_suscriptions_char">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Se muestra la confirmación del acerca de nosotros. -->
<input type="hidden" class="OpenModalAboutUs" data-toggle="modal" data-target="#OpenModalAboutUs"  />

<!-- Modal -->
<div class="modal fade modal-primary" id="OpenModalAboutUs" tabindex="1" role="dialog" aria-labelledby="MyOpenModalAboutUs" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="MyOpenModalAboutUs">Acerca de nosotros</h4>
            </div>
            <div class="modal-body modal_suscriptions_char">
                <p>El texto fue agregado con éxito.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>