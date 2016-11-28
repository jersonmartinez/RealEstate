<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index">Principal</a> / Agentes</span>
    <h2>Agentes</h2>
  </div>
</div>

<div class="container">
  <div class="spacer agents">
    <div class="row">
      <div class="col-lg-8  col-lg-offset-2 col-sm-12">
          <!-- agents -->
          <?php
            $Exe = $Conexion->query("SELECT * FROM agents ORDER BY id_agent DESC;");
            while ($I = $Exe->fetch_array(MYSQLI_ASSOC)){
              ?>
                <div class="row">
                  <div class="col-lg-2 col-sm-2 "><a href="#"><img src="Desktop/<?php echo $I['folder'].$I['src']; ?>" class="img-responsive" alt="agent name"></a></div>

                  <div class="col-lg-7 col-sm-7 "><h4><?php echo $I['names']." ".$I['lastnames']; ?></h4><p><?php echo $I['description']; ?></p></div>

                  <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"><a href="mailto:<?php echo $I['email']; ?>"><?php echo $I['email']; ?></a></span> <br>
                    <span class="glyphicon glyphicon-earphone"> 
                    <?php 
                      if ($I['phone_claro'] != ""){
                        echo $I['phone_claro'];
                      } else {
                        echo "No hay claro";
                      }
                    ?>
                    </span>
                    <span class="glyphicon glyphicon-earphone">
                      <?php 
                        if ($I['phone_movistar'] != ""){
                          echo $I['phone_movistar'];
                        } else {
                          echo "No hay movistar";
                        }
                      ?>
                      </span> 
                  </div>
                </div>
              <?php
            }
          ?>
      </div>
    </div>
  </div>
</div>