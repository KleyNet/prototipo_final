<!DOCTYPE html>
<html lang="en">
    <?php session_start(); ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dados Alunos</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                        <li class="active"><a href="../secretaria/alunos.php">Alunos</a></li>
                        <li><a href="../secretaria/turmas.php">Turmas</a></li>
                        <li><a href="../secretaria/disciplinas.php">Disciplinas</a></li>
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
        </div>

        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Alunos Cadastrados</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="../secretaria/cadastroAluno.php"><button type="button" class="btn btn-success">Novo Aluno</button></a>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-lg-4">
                                <input type="search" id="container-search" class="form-control" placeholder="Search...">
                            </div>
                        </div>

                        <div class="table-responsive" id="table">
                            <table class="table bordered">
                                <thead class="h4">
                                    <tr>
                                        <th>Nome</th>
                                        <th>RA</th>
                                        <th>Disciplina</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <tr>
                                        <td>Reuel Scarabele Cardoso</td>
                                        <td>1158387827</td>
                                        <td>Trabalho de Conclusão de Curso II</td>
                                        <td><button type="button" class="btn btn-warning btn-xs">Alterar</button> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>
                                <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                    <tr>
                                        <td>Fernando de Jesus Ribeiro</td>
                                        <td>2547450767</td>
                                        <td>Trabalho de Conclusão de Curso II</td>
                                        <td><button type="button" class="btn btn-warning btn-xs">Alterar</button> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>
                                    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Tem certeza que deseja remover esse aluno?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                    <button type="button" class="btn btn-danger">Sim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </tr>
                                    </tbody>
                                    <tbody class="h5">
                                        <tr>
                                            <td>Thiago Couto Godoy</td>
                                            <td>1183386900</td>
                                            <td>Trabalho de Conclusão de Curso II</td>
                                            <td><button type="button" class="btn btn-warning btn-xs">Alterar</button> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>
                                    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Tem certeza que deseja remover esse aluno?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                    <button type="button" class="btn btn-danger">Sim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>

                        <div class="text-center">
                            <ul class="pagination pagination-large">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <footer class="navbar navbar-inverse navbar-fixed-bottom">
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
	<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
            
            <script>
            $(function() {
                $('#table').searchable({
                    searchField: '#container-search',
                })
            });
        </script>
    </body>
</html>