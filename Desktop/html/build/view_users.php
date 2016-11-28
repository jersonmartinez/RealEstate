<div class="container-fluid">
    <div class="side-body padding-top">
    	<div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                        	<div class="title">
                        		Registro de usuarios
                        	</div>
                        	<div class="icon-addAgent-right">
                        		<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" title="Crear un nuevo artículo" onclick="javascript: CreateUserNow();" ></i>
                        	</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre de usuario</th>
                                    <th>Correo electrónico</th>
                                    <th>Fecha de registro</th>
                                    <th>Registrado</th>
                                    <th>Contraseña cifrada</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Nombre de usuario</th>
                                    <th>Correo electrónico</th>
                                    <th>Fecha de registro</th>
                                    <th>Registrado</th>
                                    <th>Contraseña cifrada</th>
                                </tr>
                            </tfoot>

                            <tbody id="tbody_listArticle">
                                <?php

                                	$GetUser = $Conexion->query("SELECT * FROM admin_info;");

                                	while ($GetDataU = $GetUser->fetch_array(MYSQLI_ASSOC)){
                                		?>
                                			<tr onclick="javascript: OnItemClickTrUser(this);">
                                                <td><?php echo $GetDataU['username']; ?></td>
                                                <td><?php echo $GetDataU['email']; ?></td>
                                                <td><?php echo $GetDataU['date_log']; ?></td>
                                                <td><?php echo $GetDataU['date_log_unix']; ?></td>
                                                <?php
                                                	$GetPass = $Conexion->query("SELECT password FROM user_admin WHERE username='".$GetDataU['username']."';")->fetch_array(MYSQLI_ASSOC);
                                                ?>
                                                <td><?php echo $GetPass['password']; ?></td>
                                             </tr>
                                		<?php
                                	}
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <form id="ShowImgPerfilUser">
                    	<input type="hidden" name="nombre_de_usuario" id="nombre_de_usuario" />
                    </form>
                </div>
            </div>
			<?php include ("build/modals.php"); ?>
        </div>
    </div>
</div>