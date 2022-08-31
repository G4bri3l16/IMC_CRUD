<?php
//GABRIEL DE SOUZA RODRIGUES (ALTERADO)

// Requisita o cabeçalho da página e a conexão com o banco de dados
require_once "inc/header.php";
require_once "inc/connect.php"; ?>

<body>
    <br>
    <div class="container">
        <h1 class="mx-auto" style="width: 200px;"> Clientes </h1>
        <br>

        <table class="table">
            <thead class="thead-dark">
                <!-- Cabeçalho da tabela-->
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Altura</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Data_Nasc</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                </tr>
            </thead>

            <!-- Requisita a página de visualização dos registros -->
            <?php require_once "action/read.php"; ?>            
        </table>        

        <!-- Botão para o cadastro-->
        <a href="main/cadastrar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Cadastrar</a>

        <!-- Requisita a página de rodapé -->
        <?php require_once "inc/footer.php"; ?>
        