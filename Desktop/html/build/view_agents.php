<div class="container-fluid">
    <div class="side-body padding-top">
    	<div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                        	<div class="title">
                        		Registro de agentes
                        	</div>
                        	<div class="icon-addAgent-right">
                        		<i class="fa fa-user-plus fa-2x" aria-hidden="true" title="Agregar agente" onclick="javascript: addAgentNow();" ></i>
                        	</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Nº Claro</th>
                                    <th>Nº Movistar</th>
                                    <th>Email</th>
                                    <th>Localidad</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Nº Claro</th>
                                    <th>Nº Movistar</th>
                                    <th>Email</th>
                                    <th>Localidad</th>
                                </tr>
                            </tfoot>

                            <tbody id="tbody_listAgents">
                                <?php
                                    $GetAgents = $Conexion->query("SELECT * FROM agents;");

                                    while ($RAgents = $GetAgents->fetch_array(MYSQLI_ASSOC)){
                                        ?>
                                            <tr onclick="javascript: OnItemClickTrAgent(this);">
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
			<?php include ("build/modals.php"); ?>
        </div>
    </div>
</div>