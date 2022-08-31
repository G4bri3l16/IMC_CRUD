<?php require_once "../inc/header.php"; //GABRIEL DE SOUZA RODRIGUES (ALTERADO)
require_once "../inc/connect.php";

if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect , $_GET['id']) ;
    $sql = "SELECT * FROM pessoa WHERE id = '$id' ";
    $resultado = mysqli_query($connect , $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<body>
    <br>
    <div class="container">
        <h1 style="text-align: center;"> Editar Cliente </h1>
        <br>

        <form action="../action/update.php" method="post"><!-- formulario -->
            <input type="hidden"  value="<?php echo $id;?>" name="id">

            Nome:<input type="text" name="nome" id="nome" placeholder="digite seu nome" maxlength="60" required value="<?php echo $dados['nome']?>"><br>

            Senha:<input type="password" name="senha" id ="senha" placeholder="digite sua senha" maxlength="12" required value="<?php echo $dados['senha']?>"><br>

            Altura:<input type="number" name="altura" id="altura" placeholder="digite sua altura (cm)" maxlength="3" required value="<?php echo $dados['altura']?>"><br>

            Peso:<input type="number" name="peso" id="peso" placeholder="digite seu peso (Kg)" maxlength="3" required value="<?php echo $dados['peso']?>"><br>

            Data de Nascimento:<input type="date" id="d_n" name="d_n" required value="<?php echo $dados['d_n']?>"><br>

            Sexo:
            <label><input type="radio" name="sexo" id="sexo" value="m" id="masc" required /> Masculino</label>
            <label><input type="radio" name="sexo" id="sexo" value="f" id="fem" required /> Feminino</label><br>

            Email:<input type="email" name="email" id="email" placeholder="digite seu email" maxlength="100" required value="<?php echo $dados['email']?>"><br>
            Telefone:<input type="tel" name="telefone" id="telefone" placeholder="digite seu telefone" maxlength="11" required value="<?php echo $dados['telefone']?>"><br><br>


            <button type="submit" class="btn btn-success" name="btn-editar">Editar</button><!-- enviar edicao-->
            <a href="../index.php" class="btn btn-primary"> Voltar</a><!-- voltar para clientes-->
        </form>
    </div>
</body>

<?php require_once "../inc/footer.php"; ?>
<!-- footer -->