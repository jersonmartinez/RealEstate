<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include ("php/head.php"); ?>
  </head>

  <body>

    <?php include ("php/header.php"); ?>

    <div class="inside-banner">
      <div class="container"> 
        <span class="pull-right"><a href="./">Principal</a> / Acerca de</span>
        <h2>Acerca de</h2>
      </div>
    </div>

    <div class="container">
      <div class="spacer">
        <div class="row">
          <div class="col-lg-8  col-lg-offset-2">
          <img src="images/about.jpg" class="img-responsive thumbnail"  alt="realestate"><hr>
            <?php 
              echo $Conexion->query("SELECT content FROM about_us ORDER BY id DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC)['content'];
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <?php include ("php/footer.php"); ?>
    </div>

  </body>
</html>