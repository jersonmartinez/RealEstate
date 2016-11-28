<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Venta & Renta</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Búsqueda de propiedades">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control">
                <!-- <option>Buy</option> -->
                <option>Renta</option>
                <option>Ventas</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Precio</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
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
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success" onclick="window.location.href='buysalerent.html'">Encontrar</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>