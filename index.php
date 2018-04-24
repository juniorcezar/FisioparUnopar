<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'vendor/autoload.php';

    use Unopar\Core\ValidadorUrl;

    $page = filter_input(INPUT_GET, 'page');

    if (!ValidadorUrl::validar($page)) {
        $page = 'home';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Unopar Fisioterapia</title>
    <meta charset="utf-8">
    <link rel="icon" href="Public/img/icon3.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" type="text/css" href="Public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Public/css/estilo.css" />
    <link rel="stylesheet" href="Public/css/sweetalert.css">
    <script src="Public/js/jquery.min.js" type="text/javascript"></script>
    <script src="Public/js/bootstrap.min.js"></script>
    <script src="Public/js/sweetalert.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar col-right col-left"><!-- #### Ínicio da Sidebar #### -->
                <div class="sidebar-desc">
                    <h1><img src="Public/img/profile.png" alt="" width="45px" height="45px"></h1>
                    <p class="titulo-side">Isadora Pinto</p>
                </div>
                <div class="sidebar-menu"><!-- #### Menu #### -->
                    <ul>
                        <li>
                            <a href="Home">
                            <i class="fa fa-dashboard"></i>
                            <span class="titulo">Inicio</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#menu_paciente" data-toggle="collapse">
                            <i class="fa fa-users"></i>
                            <span class="titulo">Pacientes</span>
                            <span class="arrow"></span>
                            </a>
                            <ul id="menu_paciente" class="sidebar-sub-menu collapse">
                            <li><a href="CadastroPaciente">Novo<i class="fa fa-plus"></i></a></li>
                            <li><a href="#">Alterar<i class="fa fa-edit"></i></a></li>
                            <li><a href="#">Excluir<i class="fa fa-trash"></i></a></li>
                            <li><a href="#">Listar<i class="fa fa-list"></i></a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#menu_medico" data-toggle="collapse">
                            <i class="fa fa-user-md"></i>
                            <span class="titulo">Medicos</span>
                            <span class="arrow"></span>
                            </a>
                            <ul id="menu_medico" class="sidebar-sub-menu collapse">
                            <li><a href="CadastroMedico">Novo<i class="fa fa-plus"></i></a></li>
                            <li><a href="#">Alterar<i class="fa fa-edit"></i></a></li>
                            <li><a href="#">Excluir<i class="fa fa-trash"></i></a></li>
                            <li><a href="#">Listar<i class="fa fa-list"></i></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#menu_agenda" data-toggle="collapse">
                            <i class="fa fa-calendar"></i>
                            <span class="titulo">Funcionarios</span>
                            <span class="arrow"></span>
                            </a>
                            <ul id="menu_agenda" class="sidebar-sub-menu collapse">
                            <li><a href="CadastroFuncionario">Novo</a></li>
                            </ul>
                            </li>
                        <li>
                            <a href="#menu_servico" data-toggle="collapse">
                            <i class="fa fa-tasks"></i>
                            <span class="titulo">Consulta</span>
                            <span class="arrow"></span>
                            </a>
                            <ul id="menu_servico" class="sidebar-sub-menu collapse">
                            <li><a href="AgendamentoConsulta">Novo</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- #### Fim do Menu #### -->
                </div><!-- #### Fim da Sidebar #### -->
                <div class="col-md-10 conteudo">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- #### Os Formulários serão chamados aqui #### -->
                            <?php
                                require_once sprintf('App/Pages/%s.php', ucfirst($page));
                            ?>    
                            <!-- #### Formulários #### -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>