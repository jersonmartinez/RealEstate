<?php
	include ("../../connect_server/connect_server.php");
	$ExAgentUser = $Conexion->query("SELECT DISTINCT username FROM agents;");
	while ($RExAgentUser = $ExAgentUser->fetch_array(MYSQLI_ASSOC)){
    ?>
        <optgroup label="Registrado por <?php echo $RExAgentUser['username']; ?>">

        <?php
            $NewQAgents = $Conexion->query("SELECT * FROM agents WHERE username='".$RExAgentUser['username']."';");

            while ($RNewQAgents = $NewQAgents->fetch_array(MYSQLI_ASSOC)){
                ?>
                    <option value="<?php echo $RNewQAgents['id_agent']; ?>"><?php echo $RNewQAgents['names']; ?></option>
                <?php

            }
        ?>
        </optgroup>
    <?php
}
?>