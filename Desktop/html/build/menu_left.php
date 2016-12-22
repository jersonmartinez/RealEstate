<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div class="icon fa fa-paper-plane"></div>
                    <div class="title">Bienes Raíces</div>
                </a>
                <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                    <i class="fa fa-times icon"></i>
                </button>
            </div>
            <ul class="nav navbar-nav">
                <li class="one__item">
                    <a href="index">
                        <span class="icon fa fa-tachometer"></span><span class="title">Espacio de trabajo</span>
                    </a>
                </li>

                <li class="panel panel-default dropdown option_article__item">
                    <a data-toggle="collapse" href="#dropdown-option-articles">
                        <span class="icon fa fa-pencil-square-o"></span><span class="title">Artículos</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-option-articles" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="create_article">Escribir artículo</a></li>
                                <li><a href="articles">Listar artículos</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                 <li class="panel panel-default dropdown agents__item">
                    <a data-toggle="collapse" href="#dropdown-option-agents">
                        <span class="icon fa fa-user-secret"></span><span class="title">Agentes</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-option-agents" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="#" onclick="javascript: addAgentNow();">Nuevo agente</a></li>
                                <li><a href="agents">Listar agentes</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="panel panel-default dropdown two__item">
                    <a data-toggle="collapse" href="#dropdown-table">
                        <span class="icon fa fa-users"></span><span class="title">Usuarios</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-table" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="#" onclick="javascript: CreateUserNow();">Crear usuario</a></li>
                                <li><a href="users">Lista de usuarios</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="add_property__item">
                    <a href="#" onclick="javascript: AddNewPropertyType();">
                        <span class="icon fa fa-tasks"></span><span class="title">Agregar propiedad</span>
                    </a>
                </li>

               <!--  <li class="config_slider">
                    <a href="slider">
                        <span class="icon fa fa-sliders"></span><span class="title">Configurar Slider</span>
                    </a>
                </li> -->

                 <li class="about_us__item">
                    <a href="about_us">
                        <span class="icon fa fa-pencil"></span><span class="title">Escribir sobre nosotros</span>
                    </a>
                </li>

                <li class="contact_us__item">
                    <a href="contact_us">
                        <span class="icon fa fa-slack"></span><span class="title">Contacto y redes sociales</span>
                    </a>
                </li>

                <li class="panel panel-default dropdown three__item">
                    <a data-toggle="collapse" href="#dropdown-icon">
                        <span class="icon fa fa-cogs"></span><span class="title">Configuración de mi cuenta</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-icon" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="#" onclick="javascript: ChgUserPerfil();">Nombre de usuario</a>
                                </li>
                                <li><a href="#" onclick="javascript: ChgEmailModal();">Correo Electrónico</a>
                                <li><a href="#" onclick="javascript: ChgPasswordModal();">Contraseña</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="four__item">
                    <a href="view_desktop">
                        <span class="icon fa fa-desktop"></span><span class="title">Pantalla de escritorio</span>
                    </a>
                </li>
                <li class="five__item">
                    <a href="view_mobile">
                        <span class="icon fa fa-mobile"></span><span class="title">Vista teléfono y tablet</span>
                    </a>
                </li>
                <li class="last__item">
                    <a href="license">
                        <span class="icon fa fa-thumbs-o-up"></span><span class="title">Licencia</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>