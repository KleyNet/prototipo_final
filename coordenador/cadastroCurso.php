
<!DOCTYPE html>
<html lang="pt-BR">
    <?php session_start(); ?>
	<?php include_once '../inc/rodape.php'; ?>
	<title>Cadastro de Curso</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container container-fluid">
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
					<li><a href="../coordenador/cursos.php">Cursos</a></li>
					<li><a href="../coordenador/usuarios.php">Usuários</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['perfil'];?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-cog">Editar Perfil</span></a></li>
							<li class="divider"></li>
                                                        <li><a href="../logado.php?lougout=acessar"><span class="glyphicon glyphicon-log-out">Sair</span></a></li>
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
						<h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Curso</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group row">
									<label for="inputNome" class="col-md-1 control-label">Nome:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputNome" required>
									</div>

									<label for="selectTipo" class="col-md-1 control-label">Tipo:</label>
									<div class="col-md-2">
										<select name="selectTipo" id="selectTipo" class="form-control" required>
											<option value=""></option>
											<option value="">Presencial</option>
											<option value="">Semipresencial</option>
											<option value="">EaD</option>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputOrientador" class="col-md-1 control-label">Orientador:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputOrientador" required>
									</div>

									<label for="numberCH" class="col-md-1 control-label">Carga Horária:</label>
									<div class="col-md-2">
										<input type="number" class="form-control" id="inputCarga" required>
									</div>
								</div>

								<div class="col-md-offset-5">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user-success">Cadastrar</button>
										<div class="modal fade" id="user-success" tabindex="-1" role="dialog" aria-labelledby="user-success" aria-hidden="true">
											<div class="modal-dialog modal">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
													</div>
													<div class="modal-body">
														<p>Curso cadastrado com sucesso!</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
													</div>
												</div>
											</div>
										</div>
									<a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-primary">Cancelar</button></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <?php include_once '../inc/rodape.php'; ?>
</body>
</html>