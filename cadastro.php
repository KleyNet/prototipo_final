
<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro de Usuário</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
	<script>
            //adiciona mascara ao CPF
function formatar(mascara, documento){
    var i = documento.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(i)
        if (texto.substring(0,1)!= saida){
                    documento.value += texto.substring(0,1);
        }
}
        </script>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>
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

                                    <form method="post" action="conecta.php?acao=cadastrar" class="form-horizontal" role="form">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" name="nome" placeholder="Digite seu nome" maxlength="50"  id="inputName" required>
									</div>
								</div>

								<div class="form-group">
									<label for="radioPerfil" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Perfil:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<label class="btn btn-primary">
                                                                                    <input type="radio" name="optionPerfil" id="optionProfessor" required="" value="professor"> Professor
										</label>
											
										<label class="btn btn-primary">
                                                                                    <input type="radio" name="optionPerfil" id="optionCoordenador" required="" value="coordenador"> Coordenador
										</label>

										<label class="btn btn-primary">
                                                                                    <input type="radio" name="optionPerfil" id="optionSecretaria" required="" value="secretaria"> Secretária
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
										<input type="text" name="cpf" placeholder="000.000.000-00" maxlength="14" onkeypress="formatar('###.###.###-##',this)">
									</div>
								</div>

								<div class="form-group">
									<label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data de Nascimento:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<input type="date" class="form-control" id="inputNasc" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputPhone" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                            <input type="text" name="tel" maxlength="12" placeholder="00-0000-0000" onkeypress="formatar('##-####-####', this);" />
									</div>
								</div>

								<div class="form-group">
									<label for="inputEndereco" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Endereço:</label>
									<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" id="inputEndereco" size="30" maxlength="50" placeholder="Digite endereço" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputComplemento" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Complemento:</label>
									<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" placeholder="Complemento endereço..." size="30" maxlength="20"  id="inputComplemento" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputCidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Cidade:</label>
									<div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
										<input type="text" class="form-control" size="30" maxlength="30" placeholder="Sua cidade" id="inputCidade" required>
									</div>
								</div>

								<div class="form-group">
									<label for="optionEstado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Estado:</label>
									<div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
										<select name="selectEstado" id="selectEstado" class="form-control" required>
                                                                                    <option value=""></option>
											<option value="AC">AC</option>
											<option value="AM">AM</option>
											<option value="AP">AP</option>
											<option value="BA">BA</option>
											<option value="CE">CE</option>
											<option value="ES">ES</option>
											<option value="MA">MA</option>
											<option value="RS">RS</option>
                                                                                        <option value="DF">DF</option>
                                                                                        <option value="SP">SP</option>
                                                                                        <option value=""></option>
                                                                                        <option value=""></option>
										</select>
									</div>
								</div>

								<div class="pull-right">
                                                                    <button type="submit" class="btn btn-success">Cadastrar</button>
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