<?php 
	session_start();
	require_once('estados.php');
	$id = '';
	$nome = '';
	$idade = '';
	$telefone = '';
	$endereco = '';
	$cidade = '';
	$estado = '';

	if(count($_GET)){
		$id = $_GET['id'];
		$nome = $_SESSION['cadastropessoal'][$id]['nome'];
		$idade = $_SESSION['cadastropessoal'][$id]['idade'];
		$telefone = $_SESSION['cadastropessoal'][$id]['telefone'];
		$endereco = $_SESSION['cadastropessoal'][$id]['endereco'];
		$cidade = $_SESSION['cadastropessoal'][$id]['cidade'];
		$estado = $_SESSION['cadastropessoal'][$id]['estado'];
	}
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro de Pessoas</title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Cadastro de Pessoas</a>
      
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="listar.php">Listar <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="cadastrar.php">Cadastrar</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
				<form action="salvar.php" method="post" style="text-align: left;" >
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" placeholder="Nome da pessoa" id="nome" value="<?php echo $nome; ?>">
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="idade">Idade</label>
							<input type="number" class="form-control" name="idade" placeholder="Idade da pessoa" id="idade" value="<?php echo $idade; ?>">
						</div>
						<div class="form-group col-md-8">
							<label for="telefone">Telefone</label>
							<input type="text" class="form-control" name="telefone" placeholder="Telefone da pessoa" id="telefone" value="<?php echo $telefone; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="endereco">Endereco</label>
						<input type="text" class="form-control" name="endereco" placeholder="Endereco da pessoa" id="endereco" value="<?php echo $endereco; ?>">
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="cidade">Cidade</label>
							<input type="text" class="form-control" name="cidade" placeholder="cidade da pessoa" id="cidade" value="<?php echo $cidade; ?>">
						</div>
						<div class="form-group col-md-4">
							<label for="estado">Estado</label>
							<select name="estado" id="estado" class="form-control">
<?php 
								$uf_sel = $estados[0];
								if ($estado != '')
									$uf_sel = $estado;

								foreach($estados as $i => $uf){
									if ($i == $uf_sel)
										echo "<option value='$i' selected>" . $uf . "</option>";
									else
									echo "<option value='$i'>" . $uf . "</option>";
										
								}							
							
?>
								</select>
						</div>
					</div>
					<br>
					<br>
					<button type="submit" class="btn btn-primary">Salvar</button>
					<button type="reset" class="btn btn-warning">Limpar</button>
				</form>
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
