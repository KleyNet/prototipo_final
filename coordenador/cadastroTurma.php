<!doctype html>
<html lang="pt-BR">
    <?php session_start(); ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de Turma</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">{Logo}</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../coordenador/index.php">Home</a></li>
                        <li><a href="../coordenador/alunos.php">Alunos</a></li>
                        <li><a href="../coordenador/turmas.php">Turmas</a></li>
                        <li><a href="../coordenador/disciplinas.php">Disciplinas</a></li>
                        <li><a href="../coordenador/usuarios.php">Usuários</a></li>
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

        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Turma</h3>
                        </div>

                        <form method="post" action="" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control"  id="inputName" placeholder="Digite seu nome completo" maxlength="50" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Date" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <div class="input-group date">
                                                <input type="date" class="form-control">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Hora" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Hora:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <div class="input-group time">
                                                <input type="time" class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="form-group">
                                        <label for="inputDisponibilidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disponibilidade:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectDisponibilidade" id="selectDisponibilidade" class="form-control" required="">
                                                <option>Tutores Disponíveis</option>
                                                <option value="uilherme Costa">Guilherme Costa</option>
                                                <option value="Fernando Gonçalves">Fernando Gonçalves</option>
                                                <option value="Wesley Tschiedel">Wesley Tschiedel</option>
                                                <option value="Welton Dias">Welton Dias</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectDependencia" id="selectDependencia" class="form-control" required>
                                                <option>Tipos de Dependência</option>
                                                <option value="RDR">RDR</option>
                                                <option value="STR">STR</option>
                                                <option value="GTR">GTR</option>
                                                <option value="TRT">TRT</option>
                                                <option value="STER">STER</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectHabilitado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Habilitado:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectHabilitado" id="selectHabilitado" class="form-control">
                                                <option>Componentes Curriculares</option>
                                                <option value="Programação Estruturada">Programação Estruturada</option>
                                                <option value="Programação Orientado a Objetos">Programaçaõ Orientada a Objetos</option>
                                                <option value="Redes de Computadores">Redes de Computadores</option>
                                                <option value="Programação Comercial">Programação Comercial</option>
                                                <option value="Sistems Operacionais">Sistemas Operacionais</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                        <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="navbar navbar-fixed-bottom">
            <div class="copyright">
                <div class="container container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy; Todos os direitos reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap-datetimepicker.min.js"></script>
    </body>
</html>