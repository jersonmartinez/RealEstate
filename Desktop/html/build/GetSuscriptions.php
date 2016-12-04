<?php

	include ("../../connect_server/connect_server.php");

	?>
        <div>
            <ul class="list-group">

            <?php
            	$wh = $Conexion->query("SELECT DISTINCT email, viewed FROM suscriptions ORDER BY id ASC;");
            	while ($RU = $wh->fetch_array(MYSQLI_ASSOC)){

            		if ($RU['viewed'] == "No"){
            			?>
            				<li class="list-group-item" style="cursor: pointer;" onclick="MarcarAhora(this);">
            					<input type="hidden" id="email_of_the_suscription" value="<?php echo $RU['email']; ?>" />
            					<span class="badge">Sin marcar</span><?php echo $RU['email']; ?>
            				</li>
            			<?php
            		} else {
            			?>
		               		<li class="list-group-item disabled">
		                    	<span class="badge">Visto</span> <?php echo $RU['email']; ?>
		                	</li>
            			<?php
            		}
            	}
            ?>

                <form id="SendEmailOfTheSuscription">
                	<input type="hidden" id="AhiVaElEmail" name="AhiVaElEmail">
                </form>

            </ul>
        </div>
	<?php
?>