<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nomePet']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobreNomePet']);
		$email = mysqli_escape_string($connection,$_POST['emailDono']);
		$idade = mysqli_escape_string($connection,$_POST['idadePet']);
		$codCli = mysqli_escape_string($connection,$_POST['codPet']);

		$sql = "UPDATE tbPets SET nomePet = '$nome', sobreNomePet = '$sobrenome', emailDono = '$email', idadePet = '$idade' WHERE codPet = '$codCli'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
