<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Venta & Alquiler</h3>
    <div class="searchbar">

    <form action="buysalerent.php" method="GET">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" name="search" class="form-control" placeholder="Búsqueda de propiedades">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select name="business_type" class="form-control">
                <!-- <option>Buy</option> -->
                <option value="Alquiler" onclick="chg_alquiler();">Alquiler</option>
                <option value="Venta" onclick="chg_venta();">Venta</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select name="price" class="form-control price_change">
                <option>Precio</option>
                <option value="100">$100.00 - $200.00</option>
                <option value="200">$200.00 - $300.00</option>
                <option value="300">$300.00 - $400.00</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
            <select name="property_type" class="form-control">
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
              <button class="btn btn-success">Encontrar</button>
              </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>