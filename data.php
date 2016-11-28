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
                              <?php echo $Data['id_art']; ?>
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
                                  Nombre de las imágenes
                              </a>
                            </span>
                          </div>
                          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                              <?php 
                                $DirSave = "";
                                $QImg = $Conexion->query("SELECT * FROM publish_img WHERE id_art='".$Data['id_art']."';");
                                while ($RQimg = $QImg->fetch_array(MYSQLI_ASSOC)){
                                  echo $RQimg['src']."<br/>";
                                  $DirSave = $RQimg['folder'];
                                }
                              ?>
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
                              <?php echo $DirSave; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End of the  -->
                  </div>
              </div>
           </div>