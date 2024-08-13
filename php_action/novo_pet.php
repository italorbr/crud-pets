<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nomePet']);
		$raca = mysqli_escape_string($connection,$_POST['racaPet']);
		$idade = mysqli_escape_string($connection,$_POST['idadePet']);
		$cor = mysqli_escape_string($connection,$_POST['corPet']);
		$rga = mysqli_escape_string($connection,$_POST['rgaPet']);
		$sexo = mysqli_escape_string($connection,$_POST['sexoPet']);
		

		$sql = "INSERT INTO tbPets(nomePet,racaPet,idadePet,corPet,rgaPet,sexoPet)VALUES('$nome','$raca','$idade','$cor','$rga','$sexo')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
