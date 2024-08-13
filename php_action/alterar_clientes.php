<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$codPet = mysqli_escape_string($connection,$_POST['codPet']);
		$nome = mysqli_escape_string($connection,$_POST['nomePet']);
		$raca = mysqli_escape_string($connection,$_POST['racaPet']);
		$idade = mysqli_escape_string($connection,$_POST['idadePet']);
		$cor = mysqli_escape_string($connection,$_POST['corPet']);
		$rga = mysqli_escape_string($connection,$_POST['rgaPet']);
		$sexo = mysqli_escape_string($connection,$_POST['sexoPet']);
		

		$sql = "UPDATE tbPets SET nomePet = '$nome', racaPet = '$raca', idadePet = '$idade', corPet = '$cor', rgaPet = '$rga', sexoPet = '$sexo' WHERE codPet = '$codPet'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
