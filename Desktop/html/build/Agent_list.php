<?php
    
    include ("../../connect_server/connect_server.php");

    $GetAgents = $Conexion->query("SELECT * FROM agents;");

    while ($RAgents = $GetAgents->fetch_array(MYSQLI_ASSOC)){
        ?>
            <tr>
                <td><?php echo $RAgents['names']; ?></td>
                <td><?php echo $RAgents['lastnames']; ?></td>
                <td><?php echo $RAgents['phone_claro']; ?></td>
                <td><?php echo $RAgents['phone_movistar']; ?></td>
                <td><?php echo $RAgents['email']; ?></td>
                <td><?php echo $RAgents['location']; ?></td>
            </tr>
        <?php
    }

?>