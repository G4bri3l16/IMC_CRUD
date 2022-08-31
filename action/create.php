<?php
//GABRIEL DE SOUZA RODRIGUES (ALTERADO)

// ******** create ***********
include_once "../inc/connect.php";
session_start(); // Inicia uma sessão de dados

// Requisita a função para tratar o escape de strings
require_once "../action/clearInput.php";

if( isset($_POST['btn-cadastro']) == true ){// botao cadastrar clicado
    
    // Recebe os dados via POST e trata o escape de strings
    $nome = clear($_POST['nome']);
    $senha = clear($_POST['senha']);
    $altura = clear($_POST['altura']);
    $peso = clear($_POST['peso']);
    $d_n = clear($_POST['d_n']);
    $sexo = clear($_POST['sexo']);
    $email = clear($_POST['email']);
    $telefone = clear($_POST['telefone']);

    // Verifica se as variáveis estão vazias
    if( empty($_POST['nome']) || empty($_POST['senha']) || empty($_POST['altura']) || empty($_POST['peso']) || empty($_POST['d_n']) || empty($_POST['sexo']) || empty($_POST['email']) || empty($_POST['telefone'])){// campo vazio 
        echo " erro ao cadastrar ";
    } else {
        // String de inserção de registros
        $sql = " INSERT INTO pessoa (nome,senha,altura,peso,d_n,sexo,email,telefone) VALUES ('$nome','$senha','$altura','$peso','$d_n','$sexo','$email','$telefone')" ;

        if( mysqli_query($connect,$sql)){// inserindo no banco
            echo " inserido com sucesso";
            header("location: ../index.php");
        } else {
            header("location: ../index.php");
        }
    }
}