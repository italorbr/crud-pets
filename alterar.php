<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbPets WHERE codPet = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Pet</h3>
			
			<form action="php_action/alterar_clientes.php" method="POST">

				<input type="hidden" name = "codPet" value="<?php echo $dados['codPet']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nomePet" id="nomePet" value="<?php echo $dados['nomePet']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="racaPet" id="racaPet" value="<?php echo $dados['racaPet']; ?>"
					>
					<label for="raca">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="idadePet" id="idadePet" value="<?php echo $dados['idadePet']; ?>">
					<label for="idade">Idade</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="corPet" id="corPet" value="<?php echo $dados['corPet']; ?>">
					<label for="cor">Cor</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="rgaPet" id="rgaPet" value="<?php echo $dados['rgaPet']; ?>">
					<label for="rga">RGA</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="sexoPet" id="sexoPet" value="<?php echo $dados['sexoPet']; ?>">
					<label for="sexo">Sexo</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>