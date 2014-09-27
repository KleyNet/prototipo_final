<!doctype html>
<html lang="pt-BR">
    <?php session_start(); ?>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Cadastro de Usuário</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">{Logo}</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Menu 1</a></li>
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 3</a></li>
                        <li><a href="#">Menu 4</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['perfil']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
							<li class="divider"></li>
                                <li><a href="../logado.php?logout=acessar">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper" roel="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Usuário</h3>
                        </div>

                        <form method="post" action="" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" placeholder="Digite seu nome completo" maxlength="50" id="inputName" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="radioPerfil" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Perfil:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionProfessor" value="professor"> Professor
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionCoordenador" value="coordenador"> Coordenador
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionSecretaria" value="secretaria"> Secretária
                                            </label>

                                            <!--<label class="radio-inline">
                                                    <input type="radio" name="optionPerfil" id="optionProf" value="professor">Professor</input>
                                            </label>

                                            <label class="radio-inline">
                                                    <input type="radio" name="optionPerfil" id="optionCoord" value="coordenador">Coordenador</input>
                                            </label>

                                            <label class="radio-inline">
                                                    <input type="radio" name="optionPerfil" id="optionSecret" value="secretaria">Secretária</input>
                                            </label>-->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputCPF" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">CPF:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputCPF" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data de Nascimento:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputNasc" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPhone" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputPhone" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEndereco" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Endereço:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputEndereco" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputComplemento" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Complemento:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputComplemento" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputCidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Cidade:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputCidade" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="optionEstado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Estado:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectEstado" id="selectEstado" class="form-control" required>
                                                <option></option>
                                                <option>AM</option>
                                                <option>PA</option>
                                                <option>BA</option>
                                                <option>TO</option>
                                                <option>DF</option>
                                                <option>MA</option>
                                                <option>CE</option>
                                                <option>RJ</option>
                                                <option>SP</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success">Cadastrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="wrapper" role="main">
                <div class="container container-fluid">
                        <div class="row affix-row">
                                <div id="menu" class="col-xs-12 col-sm-3 col-md-2 affix-sidebar">
                                        <div class="sidebar-nav">
                                                <div class="navbar navbar-default">
                                                        <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                                                <ul class="nav navbar-nav">
                                                                        <li class="active">
                                                                                <a href="#" data-toggle="collapse"><h4>Menu</h4></a>
                                                                        </li>

                                                                        <li>
                                                                                <a href="#" data-toggle="collapse" data-target="#toggleSidebar" data-parent="#sidenav01" class="collapsed">
                                                                                        <span>Submenu 1 <span class="caret pull-right"></span></span>
                                                                                </a>

                                                                                <div class="collapse" id="toggleSidebar" style="height: 0px;">
                                                                                        <ul class="nav nav-list">
                                                                                                <li><a href="#">Submenu 1.1</a></li>
                                                                                                <li><a href="#">Submenu 1.2</a></li>
                                                                                                <li><a href="#">Submenu 1.3</a></li>
                                                                                        </ul>
                                                                                </div>
                                                                        </li>

                                                                        <li>
                                                                                <a href="#" data-toggle="collapse" data-target="#toggleSidebar2" data-parent="#sidenav02" class="collapsed">
                                                                                        <span>Submenu 2 <span class="caret pull-right"></span></span>
                                                                                </a>

                                                                                <div class="collapse" id="toggleSidebar2" style="height: 0px;">
                                                                                        <ul class="nav nav-list">
                                                                                                <li><a href="#">Submenu 2.1</a></li>
                                                                                                <li><a href="#">Submenu 2.2</a></li>
                                                                                                <li><a href="#">Submenu 2.3</a></li>
                                                                                        </ul>
                                                                                </div>
                                                                        </li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <div id="conteudo" class="col-xs-12 col-sm-9 col-md-10 affix-content">
                                        <div class="container container-fluid">
                                                <div class="page-header">
                                                        <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Usuário</h3>
                                                </div>

                                                <form method="post" action="" class="form-horizontal" role="form">
                                                        <div class="row">
                                                                <div class="col-md-8">
                                                                        <div class="form-group">
                                                                                <label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
                                                                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                        <input type="text" class="form-control" id="inputName" required>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label for="radioPerfil" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Perfil:</label>
                                                                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                        <label class="radio-inline">
                                                                                                <input type="radio" name="optionPerfil" id="optionProf" value="professor">Professor</input>
                                                                                        </label>

                                                                                        <label class="radio-inline">
                                                                                                <input type="radio" name="optionPerfil" id="optionCoord" value="coordenador">Coordenador</input>
                                                                                        </label>

                                                                                        <label class="radio-inline">
                                                                                                <input type="radio" name="optionPerfil" id="optionSecret" value="secretaria">Secretária</input>
                                                                                        </label>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label for="inputCPF" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">CPF:</label>
                                                                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                        <input type="text" class="form-control" id="inputCPF" required>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data de Nascimento:</label>
                                                                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                        <input type="text" class="form-control" id="inputNasc" required>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label for="inputPhone" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone:</label>
                                                                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                        <input type="text" class="form-control" id="inputPhone" required>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label for="inputEndereco" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Endereço:</label>
                                                                                <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                                                                        <input type="text" class="form-control" id="inputEndereco" required>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label for="inputComplemento" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Complemento:</label>
                                                                                <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                                                                        <input type="text" class="form-control" id="inputComplemento" required>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label for="inputCidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Cidade:</label>
                                                                                <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                                                                        <input type="text" class="form-control" id="inputCidade" required>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label for="optionEstado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Estado:</label>
                                                                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                        <select name="selectEstado" id="selectEstado" class="form-control" required>
                                                                                                <option></option>
                                                                                                <option>AM</option>
                                                                                                <option>PA</option>
                                                                                                <option>BA</option>
                                                                                                <option>TO</option>
                                                                                                <option>DF</option>
                                                                                                <option>MA</option>
                                                                                                <option>CE</option>
                                                                                                <option>RJ</option>
                                                                                                <option>SP</option>
                                                                                        </select>
                                                                                </div>
                                                                        </div>

                                                                        <div class="pull-right">
                                                                                <button type="button" class="btn btn-success">Cadastrar</button>
                                                                                <button type="button" class="btn btn-warning">Editar</button>
                                                                                <button type="button" class="btn btn-danger">Excluir</button>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>--> <br /> <br />
        <?php require_once '../inc/rodape.php'; ?>
    </body>
</html>