<div class="hot-properties hidden-xs">
  <h4>Propiedades calientes</h4>
  
  <?php
    $HotProperties = $Conexion->query("SELECT * FROM article ORDER BY price DESC LIMIT 9;");
    //$GetImgArticleHP = $Conexion->query("SELECT * FROM publish_img WHERE id_art='".$GIA['id_art']."';")->fetch_array(MYSQLI_ASSOC);

    while ($HP = $HotProperties->fetch_array(MYSQLI_ASSOC)){
      $GIHP = $Conexion->query("SELECT * FROM publish_img WHERE id_art='".$HP['id_art']."' ORDER BY id_img ASC LIMIT 1;")->fetch_array(MYSQLI_ASSOC);

      ?>
        <div class="row">
          <div class="col-lg-4 col-sm-5">
            <img src="<?php echo 'Desktop/'.$GIHP['folder'].$GIHP['src']; ?>" class="img-responsive img-circle" alt="properties"/>
          </div>
          <div class="col-lg-8 col-sm-7">
            <h5><a href="property-detail.php?id_art=<?php echo $HP['id_art']; ?>"><?php echo $HP['title']; ?></a></h5>
            <p class="price">$<?php echo number_format($HP['price'], 2, '.', ','); ?></p>
          </div>
        </div>
      <?php
    }
  ?>
</div>