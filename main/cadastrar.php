<?php require_once "../inc/header.php"; ?><!-- header -->


<body>
    <br>
    <div class="container">
        <h1 style="text-align: center;"> Novo Cliente </h1>
        <br>

        <form action="../action/create.php" method="post" ><!-- formulario -->
        Nome:<input type="text" name="nome" id="nome" placeholder="digite seu nome" maxlength="60" required><br>

        Senha:<input type="password" name="senha" id ="senha" placeholder="digite sua senha" maxlength="12" required><br>

        Altura:<input type="number" name="altura" id="altura" placeholder="digite sua altura (cm)" maxlength="3" required><br>

        Peso:<input type="number" name="peso" id="peso" placeholder="digite seu peso (Kg)" maxlength="3" required><br>

        Data de Nascimento:<input type="date" id="d_n" name="d_n" required><br>

        Sexo:
        <label><input type="radio" name="sexo" id="sexo" value="m" id="masc" required /> Masculino</label>
        <label><input type="radio" name="sexo" id="sexo" value="f" id="fem" required /> Feminino</label><br>

        Email:<input type="email" name="email" id="email" placeholder="digite seu email" maxlength="100" required><br>
        Telefone:<input type="tel" name="telefone" id="telefone" placeholder="digite seu telefone" maxlength="11" required><br><br>

            <button type="submit" class="btn btn-success" name="btn-cadastro" >Cadastrar</button><!-- enviar cadastro-->
            <a href="../index.php" class="btn btn-primary" > Voltar</a><!-- voltar para clientes-->
        </form>
    </div>
</body>

<?php require_once "../inc/footer.php"; ?><!-- footer -->