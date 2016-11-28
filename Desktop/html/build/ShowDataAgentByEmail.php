<?php
    include ("../../connect_server/connect_server.php");
    include ("CalcDate.php");

    $Email = $_POST['ValueAgentByEmail'];
    $Email = $Conexion->real_escape_string($Email);

    $Data = $Conexion->query("SELECT * FROM agents WHERE email='".$Email."';");
    
    if ($Data->num_rows == 1){
      $Data = $Data->fetch_array(MYSQLI_ASSOC);

      ?>
        <div class="row">
          <div class="col-xs-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Propiedades</h3>
                  </div>
                  <div class="panel-body">
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                          <div class="panel-heading" role="tab" id="headingOne">
                            <span class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ID
                              </a>
                            </span>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                              <?php echo $Data['id_agent']; ?>
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" role="tab" id="headingTwo">
                            <span class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Fecha de registro
                              </a>
                            </span>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                              <?php echo $Data['date_log']; ?>
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" role="tab" id="headingThree">
                            <span class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Registrado hace
                              </a>
                            </span>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                              <?php echo nicetime(date("Y-m-d H:i", $Data['date_log_unix'])); ?>
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" role="tab" id="headingFour">
                            <span class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  Registrado por
                              </a>
                            </span>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                              <?php echo $Data['username']; ?>
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" role="tab" id="headingFive">
                            <span class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                  Nombre de la imagen
                              </a>
                            </span>
                          </div>
                          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                              <?php echo $Data['src']; ?>
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" role="tab" id="headingSix">
                            <span class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                  URL del directorio
                              </a>
                            </span>
                          </div>
                          <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                            <div class="panel-body">
                              <?php echo $Data['folder']; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End of the  -->
                  </div>
              </div>
           </div>

          <div class="col-xs-4">

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Nombres y apellidos</h3>
                  </div>
                  <div class="panel-body">
                      <input type="text" class="form-control" id="show_names" value="<?php echo $Data['names']; ?>" placeholder="* Nombres" /><br/>
                      <input type="text" class="form-control" id="show_lastnames" value="<?php echo $Data['lastnames']; ?>" placeholder="* Apellidos" />
                  </div>
              </div>

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Email, Localidad & Descripción</h3>
                  </div>
                  <div class="panel-body">
                      <input type="email" class="form-control" id="show_email_address" value="<?php echo $Data['email']; ?>" placeholder="* Dirección de correo" /><br/>
                      <input type="text" class="form-control" id="show_location" value="<?php echo $Data['location']; ?>" placeholder="* Localidad" />
                      <br/><textarea class="form-control" rows="3" id="show_description" style="max-width: 237px;" placeholder="Escribir descripción..."><?php echo $Data['description']; ?></textarea>
                  </div>
              </div>
           </div>

           <div class="col-xs-4">

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Líneas de contacto</h3>
                  </div>
                  <div class="panel-body">
                      <input type="text" class="form-control" id="show_phone_claro" value="<?php echo $Data['phone_claro']; ?>" placeholder="Nº de teléfono Claro" /><br/>
                      <input type="text" class="form-control" id="show_phone_movistar" value="<?php echo $Data['phone_movistar']; ?>" placeholder="Nº de teléfono Movistar" />
                  </div>
              </div>

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Imagen de perfil (Opcional)</h3>
                  </div>
                  <div class="panel-body">
                      <form id="Change_SendAgentImgPerfil" enctype="multipart/form-data">
                          <input type="file" id="show_path_img" name="new_imagen" style="width: 200px;" onchange="javascript: upload_agent_img_perfil_change();" />
                      </form>
                      <div class="show_agent_img_perfil_change">
                        <img class="profile-img" src="<?php echo "../".$Data['folder'].$Data['src']; ?>" />
                      </div>

                  </div>
              </div>

           </div>

          <form id="AllDataAgentsUpdate">
              <input type="hidden" id="true_id" value="<?php echo $Data['id_agent']; ?>" name="true_id" />

              <input type="hidden" id="true_names" value="" name="true_names" />
              <input type="hidden" id="true_lastnames" value="" name="true_lastnames" />

              <input type="hidden" id="true_email_address" value="" name="true_email_address" />
              <input type="hidden" id="true_location" value="" name="true_location" />
              <input type="hidden" id="true_description" value="" name="true_description" />

              <input type="hidden" id="true_phone_claro" value="" name="true_phone_claro" />
              <input type="hidden" id="true_phone_movistar" value="" name="true_phone_movistar" />

              <input type="hidden" id="true_path_img" name="true_path_img" />
          </form>

          <form id="IDAgentsDelete">
              <input type="hidden" id="delete_id" value="<?php echo $Data['id_agent']; ?>" name="delete_id" />
          </form>
        </div>
      <?php

    }

?>