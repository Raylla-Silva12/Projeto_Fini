<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Raylla S.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icon-->
    <link rel="icon" type="image/x-icon" href="assets/logo-fini.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Fini - Cadrastar</title>
</head>

<body id="body-cadastrar">

    <!-- Navigation -->

    <div class="voltar">
        <a href="index.html"><img class="seta-voltar" src="assets/seta.png" alt="voltar"></a>
    </div>

    <!--Conteudo-->

    <form class="form-signin" method="post">
        <img class="mb-4" src="assets/logo-fini.png" alt="" width="160" height="90">

        <label for="inputNome" class="sr-only">Nome</label>
        <input type="name" name="nome" id="inputNome" class="btn-light  form-control" placeholder="Nome" required autofocus>

        <label for="inputSobrenome" class="sr-only">Sobrenome</label>
        <input type="name" name="sobrenome" id="inputSobrenome" class="btn-light form-control" placeholder="Sobrenome" required autofocus>
        <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
        <input type="email" name="email" id="inputEmail" class="btn-light form-control" placeholder="E-mail" required autofocus>

        <label for="inputEmail_confirm" class="sr-only">Confirme o endereço de e-mail</label>
        <input type="email" name="email_con" id="inputEmail_confirm" class="btn-light form-control" placeholder="Confirme o e-mail" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="btn-light form-control" placeholder="Insira a senha" required>

        <label for="inputPassword_confirm" class="sr-only">Confirme a senha</label>
        <input type="password" name="senha_con" id="inputPassword_confirm" class="btn-light form-control" placeholder="Confirme a senha" required>

        <div class="checkbox mb-2">
            <label>
                <input type="checkbox" value="receber"> Receber notificações de novidades.<br>
                <input type="checkbox" value="concordar"> Li e concordo com os <a class="termos" href="termos.html">termos de uso</a>.
            </label>
        </div>
        <button name="enviar" class="btn btn-lg btn-block" type="submit"><b>Cadastrar</b></button>
        <a class="link-cadastrar" href="entrar.html">Já é cadastrado? Faça login aqui.</a>
        <br>

    </form>
    <?php
    if (isset($_POST['enviar'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $email_con = $_POST['email_con'];
        $senha = $_POST['senha'];
        $senha_con = $_POST['senha_con'];

    ?>

        <center>
            <div class="col-md-3" id="resposta">
                <?php if ($email != $email_con) {
                    echo "email's diferentes. Por favor, utilize email's iguais.";
                } elseif ($senha != $senha_con) {
                    echo "senhas diferentes. Por favor, utilize senhas iguais";
                } else { ?>
                    <br>
                    <h4>Informações:</h4>
                    <p>Nome completo: <?php echo $nome . " " . $sobrenome ?></p>
                    <p>Email: <?php echo $email ?></p>
                    <br>
                    <a href="index.html"><button name="confirmar" id="button" class="btn btn-lg" type="submit"><b style="color: black; font-size: 15px">Confirmar</b></button></a>
                    <a href="cadastro.php"><button name="corrigir" id="button" class="btn btn-lg" type="reset"><b style="color: black; font-size: 15px">Corrigir</b></button></a>
                    <br><br>
            </div>
        </center><br>
<?php
                }
            }
?>

</body>

</html>

<style type="text/css">
    #resposta {
        background-color: linear-gradient(#FFD5D5, #ff6176);
        text-align: center;
        border-radius: 10px;
        color: white;
    }

    #button {
        background-color: #fcd3d9;
    }
</style>