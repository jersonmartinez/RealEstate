<div class="spacer">
  <div class="row">
    <div class="col-lg-6 col-sm-9 recent-view">
      <h3>Sobre nosotros</h3>
      <p>
        <?php 
          $InfoAbout_Us = $Conexion->query("SELECT content FROM about_us ORDER BY id DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC)['content'];
          if (strlen($InfoAbout_Us) > 310){
            echo substr($InfoAbout_Us, 0, 310);
          } else if (strlen($InfoAbout_Us) < 310){
            echo substr($InfoAbout_Us, 0, strlen($InfoAbout_Us));
          } else {
            echo "Aún no se ha agregado";
          }
          echo "...";
        ?><br><a href="about">Aprende más</a>
      </p>
    
    </div>
    <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
      <h3>Propiedades recomendadas</h3>
      <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <?php
            $DataArticle = $Conexion->query("SELECT * FROM article ORDER BY id_art DESC;");
            $regres_count = $DataArticle->num_rows;
            if ($DataArticle->num_rows > 10){
              for ($x = 0; $x < 10; $x++){
                if ($x == 0){
                  ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $x; ?>" class="active"></li>
                  <?php
                } else {
                  ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $x; ?>" class=""></li>
                  <?php
                }
              }
              $regres_count = 10;
            } else {
              $y = 0;
              while ($y != $DataArticle->num_rows){
                if ($y == 0){
                  ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $y; ?>" class="active"></li>
                  <?php
                } else {
                  ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $y; ?>" class=""></li>
                  <?php
                }
                $y++;
              }
            }
          ?>
        </ol>
        <!-- Carousel items -->

        <div class="carousel-inner">

          <?php
            $new_reference = $Conexion->query("SELECT * FROM article ORDER BY id_art DESC LIMIT ".$regres_count.";");
            $C = 0;
            while ($OfYa = $new_reference->fetch_array(MYSQLI_ASSOC)){
              if ($C == 0){
                ?>
                  <div class="item active">
                    <div class="row">
                      <?php
                        $view_img_art = $Conexion->query("SELECT folder, src FROM publish_img WHERE id_art='".$OfYa['id_art']."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                      ?>
                      <div class="col-lg-4"><img src="<?php echo 'Desktop/'.$view_img_art['folder'].$view_img_art['src']; ?>" class="img-responsive" alt="Propiedad"/></div>
                      <div class="col-lg-8">
                        <h5><a href="property-detail.php?id_art=<?php echo $OfYa['id_art']; ?>"><?php echo $OfYa['title']; ?></a></h5>
                        <p class="price"><?php echo $OfYa['price']; ?></p>
                        <a href="property-detail.php?id_art=<?php echo $OfYa['id_art']; ?>" class="more">Más detalles</a> </div>
                    </div>
                  </div>
                <?php
              } else {
                ?>
                  <div class="item">
                    <div class="row">
                      <?php
                        $view_img_art = $Conexion->query("SELECT folder, src FROM publish_img WHERE id_art='".$OfYa['id_art']."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                      ?>
                      <div class="col-lg-4"><img src="<?php echo 'Desktop/'.$view_img_art['folder'].$view_img_art['src']; ?>" class="img-responsive" alt="Propiedad"/></div>
                      <div class="col-lg-8">
                        <h5><a href="property-detail.php?id_art=<?php echo $OfYa['id_art']; ?>"><?php echo $OfYa['title']; ?></a></h5>
                        <p class="price"><?php echo $OfYa['price']; ?></p>
                        <a href="property-detail.php?id_art=<?php echo $OfYa['id_art']; ?>" class="more">Más detalles</a> </div>
                    </div>
                  </div>
                <?php
              }
              $C++;
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>