<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include ("php/head.php"); ?>
  </head>

  <body>

    <div class="navbar-wrapper">
        <?php include ("php/header.php"); ?>

    <div class="inside-banner">
      <div class="container"> 
        <span class="pull-right"><a href="./">Principal</a> / Contacto</span>
        <h2>Contáctanos</h2>
      </div>
    </div>

    <div class="container">
      <div class="spacer">
      <div class="row contact">
        <div class="col-lg-6 col-sm-6 ">

        <form action="php/SendMessageForm.php" method="post">
          <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nombre completo">
          <input type="text" name="email" id="email" class="form-control" placeholder="Dirección de correo">
          <input type="text" name="phone" id="phone" class="form-control" placeholder="Número telefónico">
          <textarea rows="6" name="message" id="message" class="form-control" placeholder="Escriba su mensaje"></textarea>
          <button type="submit" class="btn btn-success" name="Submit">Enviar Mensaje</button>
        </form>
                  
      </div>
        <div class="col-lg-6 col-sm-6 ">
          <div class="well"><<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1894.4214568774878!2d-87.11516547129483!3d12.6189282968651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d83808018877848!2sDilectus!5e0!3m2!1sen!2sus!4v1481925097199" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
      </div>
      </div>
    </div>

    <div class="footer">
      <?php include ("php/footer.php"); ?>
    </div>

  </body>
</html>