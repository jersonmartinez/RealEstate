<?php
    include ("../../connect_server/connect_server.php");
    include ("CalcDate.php");
    
    $ConexM = $Conexion->query("SELECT * FROM sus_message ORDER BY id DESC;");

    while ($CoM = $ConexM->fetch_array(MYSQLI_ASSOC)){
        $GetImgArt = $Conexion->query("SELECT folder, src FROM publish_img WHERE id_art='".$CoM['id_art']."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
        ?>
            <a href="#" onclick="LoadMessage(<?php echo $CoM['id']; ?>);">
                <li>
                    <img src="<?php echo "../".$GetImgArt['folder'].$GetImgArt['src']; ?>" width="60px" height="60px" class="profile-img pull-left">
               
                    <div class="message-block">
                        <div><span class="username"><?php echo $CoM['fullname']; ?></span> <span class="message-datetime"><?php echo nicetime(date("Y-m-d H:i", $CoM['date_log_unix'])); ?></span>
                        </div>
                        <div class="message">
                            <?php 
                                echo substr($CoM['message'], 0, 260); 

                                if (strlen($CoM['message']) > 260){
                                    echo "...";
                                }
                            ?>
                        </div>
                    </div>

                </li>
            </a>
        <?php
    }
?>


<form id="SendIdMessage">
    <input type="hidden" id="IdMessage" name="IdMessage" value="" />
</form>