<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Cadastro</h3>
			
			<form action="php_action/novo_pet.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nomePet" id="nomePet">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="racaPet" id="racaPet">
					<label for="raca">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="idadePet" id="idadePet">
					<label for="idade">Idade</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="corPet" id="corPet">
					<label for="cor">Cor</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="rgaPet" id="rgaPet">
					<label for="rga">RGA</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="sexoPet" id="sexoPet">
					<label for="sexo">Sexo</label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>