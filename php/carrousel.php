<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent" class="pull-right viewall">Ver todo el listado</a>
    <h2>Propiedades destacadas</h2>
    <div id="owl-example" class="owl-carousel">

      <?php
        $Qus = $Conexion->query("SELECT * FROM article ORDER BY price DESC LIMIT 20;");
        if ($Qus->num_rows > 0){
          while ($Qu = $Qus->fetch_array(MYSQLI_ASSOC)){
              ?>
              <div class="properties">
                <?php
                  $img_property_art = $Conexion->query("SELECT * FROM publish_img WHERE id_art='".$Qu['id_art']."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
                ?>
                <div class="image-holder"><img src="<?php echo "Desktop/".$img_property_art['folder'].$img_property_art['src']; ?>" class="img-responsive" alt="properties"/>
                  <?php 
                    if ($Qu['property_state'] == "En proceso"){
                      //
                    } else if ($Qu['property_state'] == "Vendido" || $Qu['property_state'] == "Alquilado"){
                      ?>
                        <div class="status sold">Ocupado</div>
                      <?php
                    }
                  ?>
                  
                </div>
                <h4>
                  <a href="property-detail.php?id_art=<?php echo $Qu['id_art']; ?>" title="<?php echo $Qu['title']; ?>">
                    <?php 
                      echo substr($Qu['title'],0,18); 
                      if (strlen($Qu['title']) > 18){
                        echo "...";
                      }
                    ?>
                  </a>
                </h4>
                <p class="price">Precio: $<?php echo number_format($Qu['price'], 2, '.', ','); ?></p>
                
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Habitaciones"><?php echo $Qu['bed_room']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Salas"><?php echo $Qu['living_room']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Estacionamientos"><?php echo $Qu['parking']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocinas"><?php echo $Qu['kitchen']; ?></span> </div>
                <a class="btn btn-primary" href="property-detail.php?id_art=<?php echo $Qu['id_art']; ?>">Ver Detalles</a>
              </div>
            <?php
          }
        }
      ?>

    </div>
  </div>
</div>