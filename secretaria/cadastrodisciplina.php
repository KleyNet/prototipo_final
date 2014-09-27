<!doctype html>
<html lang="pt-BR">
     <?php session_start(); ?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de Aluno</title>

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
					<li><a href="../secretaria/index.php">Home</a></li>
					<li><a href="../secretaria/alunos.php">Alunos</a></li>
					<li><a href="../secretaria/turmas.php">Turmas</a></li>
					<li><a href="../secretaria/disciplinas.php">Disciplinas</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['perfil']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
							<li class="divider"></li>
							<li><a href="logado.php?logout=acessar">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>
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
						<h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Disciplina</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="inputCod" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Código Disciplina:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputCod" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputDisciplina" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disciplina:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputDisciplina" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputCarga" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Carga Horária:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputCarga" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Período Letivo:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputPeriodo" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selectSerie" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Série:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<select name="selectSerie" id="selectSerie" class="form-control" required>
											<option value=""></option>
											<option value="1">1º</option>
											<option value="2">2º</option>
											<option value="3">3º</option>
											<option value="4">4º</option>
											<option value="5">5º</option>
											<option value="6">6º</option>
											<option value="7">7º</option>
											<option value="8">8º</option>
											<option value="9">9º</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
									<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
										<select name="selectDependencia" id="selectDependencia" class="form-control" required>
											<option value=""></option>
											<option value="rdr">RDR</option>
											<option value="str">STR</option>
											<option value="gtr">GTR</option>
											<option value="trt">TRT</option>
											<option value="ster">STER</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputProfessor" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Professor:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<select name="selectProfessor" id="selectProfessor" class="form-control" required>
											<option></option>
											<option>Guilherme Costa</option>
											<option>Fernando Gonçalves</option>
											<option>Wesley Tschiedel</option>
											<option>Welton Dias</option>
										</select>
									</div>
								</div>

								<div class="pull-right">
									<button type="button" class="btn btn-success">Cadastrar</button>
									<a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--<div class="wrapper" role="main">
		<div class="container container-2">
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
					<div class="container container-2">
						<div class="page-header">
							<h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Disciplina</h3>
						</div>

						<form method="post" action="" class="form-horizontal" role="form">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="inputCod" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Código Disciplina:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<input type="text" class="form-control" id="inputCod" required>
										</div>
									</div>

									<div class="form-group">
										<label for="inputDisciplina" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disciplina:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<input type="text" class="form-control" id="inputDisciplina" required>
										</div>
									</div>

									<div class="form-group">
										<label for="inputCarga" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Carga Horária:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<input type="text" class="form-control" id="inputCarga" required>
										</div>
									</div>

									<div class="form-group">
										<label for="inputPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Período Letivo:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<input type="text" class="form-control" id="inputPeriodo" required>
										</div>
									</div>

									<div class="form-group">
										<label for="selectSerie" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Série:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<select name="selectSerie" id="selectSerie" class="form-control" required>
												<option value=""></option>
												<option value="1">1º</option>
												<option value="2">2º</option>
												<option value="3">3º</option>
												<option value="4">4º</option>
												<option value="5">5º</option>
												<option value="6">6º</option>
												<option value="7">7º</option>
												<option value="8">8º</option>
												<option value="9">9º</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
										<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
											<select name="selectDependencia" id="selectDependencia" class="form-control" required>
												<option value=""></option>
												<option value="rdr">RDR</option>
												<option value="str">STR</option>
												<option value="gtr">GTR</option>
												<option value="trt">TRT</option>
												<option value="ster">STER</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="inputProfessor" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Professor:</label>
										<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
											<select name="selectProfessor" id="selectProfessor" class="form-control" required>
												<option></option>
												<option>Guilherme Costa</option>
												<option>Fernando Gonçalves</option>
												<option>Wesley Tschiedel</option>
												<option>Welton Dias</option>
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
	</div>-->

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
</body>
</html>