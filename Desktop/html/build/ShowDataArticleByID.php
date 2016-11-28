<?php
    include ("../../connect_server/connect_server.php");
    include ("CalcDate.php");

    $id = $_POST['ValueArticleByID'];

    $Data = $Conexion->query("SELECT * FROM article WHERE id_art='".$id."';");
    
    if ($Data->num_rows == 1){
      $Data = $Data->fetch_array(MYSQLI_ASSOC);

      echo $Data['content_es'];

    }

?>