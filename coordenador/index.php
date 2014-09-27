<!doctype html>
<html lang="pt-BR">
     <?php session_start(); ?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coordenação</title>

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
                                    <li class="active"><a href="../logado.php">Home</a></li>
					<li><a href="../coordenador/alunos.php">Alunos</a></li>
					<li><a href="../coordenador/turmas.php">Turmas</a></li>
					<li><a href="../coordenador/disciplinas.php">Disciplinas</a></li>
                                        <li><a href="../coordenador/cadastroUsuario.php">Usuários</a></li>
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
						<h3><span class="glyphicon glyphicon-th-list"></span> Home</h3>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="well">
								<h1>Bem Vindo(a) Coordenador(a)</h1>
							</div>
						</div>
					</div>
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
										<a href="#" data-toggle="collapse">
											<h4>Menu</h4>
										</a>
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
				<div class="container">
					<div class="page-header">
						<h3><span class="glyphicon glyphicon-th-list"> Navigation</span></h3>
					</div>

					<form class="form-horizontal" role="form">
						<form class="form-group">
							<label for="inputName">Nome: </label>
							<input type="name" class="form-control" id="inputName">
						</form>
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