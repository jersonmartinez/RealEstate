<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.html" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">

      <?php
        $Qus = $Conexion->query("SELECT * FROM article ORDER BY price DESC LIMIT 15;");
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
                <h4><a href="property-detail.php?id_art=<?php echo $Qu['id_art']; ?>"><?php echo $Qu['title']; ?></a></h4>
                <p class="price">Precio: $<?php echo $Qu['price']; ?></p>
                
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Habitaciones"><?php echo $Qu['bed_room']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Salas"><?php echo $Qu['living_room']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Estacionamientos"><?php echo $Qu['parking']; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocinas"><?php echo $Qu['kitchen']; ?></span> </div>
                <a class="btn btn-primary" href="property-detail.php?id_art=<?php echo $Qu['id_art']; ?>">View Details</a>
              </div>
            <?php
          }
        }
      ?>

    </div>
  </div>
</div>