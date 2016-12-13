<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include ("php/head.php"); ?>
  </head>

  <body>
    <?php include ("php/header.php"); ?>

    <!-- banner -->
    <div class="inside-banner">
      <div class="container"> 
        <span class="pull-right"><a href="./">Principal</a> / Venta, Alquiler</span>
        <h2>Venta, Alquiler</h2>
      </div>
    </div>

<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Hacer una búsqueda</h4>
    <input type="text" class="form-control" placeholder="Búsqueda de propiedades">
    <div class="row">
      <div class="col-lg-5">
        <select class="form-control">
          <option>Renta</option>
          <option>Venta</option>
        </select>
      </div>
      <div class="col-lg-7">
        <select class="form-control">
          <option>Price</option>
          <option>$150,000 - $200,000</option>
          <option>$200,000 - $250,000</option>
          <option>$250,000 - $300,000</option>
          <option>$300,000 - above</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <select class="form-control">
          <?php
            $ExOptionsProperty = $Conexion->query("SELECT * FROM property_type;");
            while ($Nr = $ExOptionsProperty->fetch_array(MYSQLI_ASSOC)){
              ?>
                <option><?php echo $Nr['name_type']; ?></option>
              <?php
            }
          ?>
        </select>
        </div>
    </div>
    <button class="btn btn-primary">Buscar ahora</button>
  </div>

    <?php include ("php/hot_property.php"); ?>
</div>

<div class="col-lg-9 col-sm-8">
  <div class="sortby clearfix">
    <div class="pull-left result">Mostrando: 12 de 100 </div>
      <div class="pull-right">
      <select class="form-control">
      <option>Ordernar por</option>
      <option>Precio: De bajo a alto</option>
      <option>Precio: De alto a bajo</option>
    </select></div>
    </div>
<div class="row">
    
    <?php
      $GetArticle = $Conexion->query("SELECT * FROM article;");

      while ($GA = $GetArticle->fetch_array(MYSQLI_ASSOC)){
        $GetImgArt = $Conexion->query("SELECT folder, src FROM publish_img WHERE id_art='".$GA['id_art']."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
        ?>
         <!-- properties -->
          <div class="col-lg-4 col-sm-6">
            <div class="properties">
              <div class="image-holder">
                <img src="<?php echo "Desktop/".$GetImgArt['folder'].$GetImgArt['src']; ?>" class="img-responsive" alt="properties">
                <div class="status sold"><?php echo $GA['business_type']; ?></div>
              </div>

              <h4>
                <a href="property-detail.php?id_art=<?php echo $GA['id_art']; ?>" title="<?php echo $GA['title']; ?>">
                  <?php 
                    echo substr($GA['title'],0,22); 
                    if (strlen($GA['title']) > 22){
                      echo "...";
                    }
                  ?>
                </a>
              </h4>
              <p class="price">Precio: $<?php echo $GA['price']; ?></p>
              
              <div class="listing-detail">
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Habitaciones"><?php echo $GA['bed_room']; ?></span> 
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Salas"><?php echo $GA['living_room']; ?></span> 
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Estacionamientos"><?php echo $GA['parking']; ?></span> 
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocinas"><?php echo $GA['kitchen']; ?></span> 
              </div>

              <a class="btn btn-primary" href="property-detail.php?id_art=<?php echo $GA['id_art']; ?>">Ver detalles</a>
            </div>
          </div>
        <?php
      }
    ?>


      <div class="center">
        <ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
</div>
</div>
</div>
</div>
</div>

    <div class="footer">
      <?php include ("php/footer.php"); ?>
    </div>

</body>
</html>