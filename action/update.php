<?php
//GABRIEL DE SOUZA RODRIGUES (ALTERADO)

// ************* update **************
require_once "../inc/connect.php";
require_once "../action/clearInput.php";

if( isset($_POST['btn-editar']) ){// botao editar
    
    // Recupera o id do registro selecionado
    $id = mysqli_escape_string($connect, $_POST['id']);

    // Preenche a tabela com os dados do registro selecionado
    $nome = clear($_POST['nome']);
    $senha = clear($_POST['senha']);
    $altura = clear($_POST['altura']);
    $peso = clear($_POST['peso']);
    $d_n = clear($_POST['d_n']);
    $sexo = clear($_POST['sexo']);
    $email = clear($_POST['email']);
    $telefone = clear($_POST['telefone']);

    // String sql de atualização
    $sql = "UPDATE pessoa SET nome = '$nome' , senha = '$senha' , altura = '$altura' , peso = '$peso', d_n = '$d_n', sexo = '$sexo', email = '$email', telefone = '$telefone' WHERE id = '$id' ";

    // Executa a string
    if(mysqli_query($connect , $sql) ){// enviar edit
        echo " editado com sucesso";
        header("location: ../index.php");
    }    
}