<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nomePet']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobreNomePet']);
		$email = mysqli_escape_string($connection,$_POST['emailDono']);
		$idade = mysqli_escape_string($connection,$_POST['idadePet']);

		$sql = "INSERT INTO tbPets(nomePet,sobreNomePet,emailDono,idadePet)VALUES('$nome','$sobrenome','$email','$idade')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
