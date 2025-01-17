<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeSistema ?></title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--CSS-->
    <link href="./css/style.css" rel="stylesheet">
    <!--Icon-->
    <link href="./img/dolar.png" rel="shortcut icon" type="image/x-icon">
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><img src="./img/logoBranca3.png" alt=""></label>
        <ul>
            <li><a href="./index.php">Sair</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./img/imgRegister2.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <h2 class="signin-text mb-3"> Criar Conta</h2>
                <p>Por favor, preencha os campos do formulário para criar a sua conta</p>
                <div>
                    <form method="post">
                        <div>
                            <label for="login">Usuário*</label>
                            <input type="text" placeholder="Username" name="username" id="login" class="form-control required <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>
                        </br>
                        <div>
                            <label for="login">E-mail*</label>
                            <input type="email" placeholder="email@gmail.com" name="email" id="email" class="form-control required <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                        </div>
                        </br>
                        <div>
                            <label for="senha">Senha*</label>
                            <input type="password" placeholder="Mínimo 6 dígitos" name="senha" id="senha" class="form-control required <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        </br>
                        <div>
                            <label for="senha">Confirme sua senha*</label>
                            <input type="password" placeholder="Mínimo 6 dígitos" name="confirma_senha" id="senha" class="form-control required <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        </div>
                        </br>
                        </br>
                        <div>
                            <label for="estado">Estado*</label>
                            <select class="form-select form-control" name="estado" id="estado" required>
                                <option value="0"> Escolha seu estado</option>
                                <option value="ac" <?= $estado === "ac" ? "selected" : "" ?>>Acre</option>
                                <option value="al" <?= $estado === "al" ? "selected" : "" ?>>Alagoas</option>
                                <option value="am" <?= $estado === "am" ? "selected" : "" ?>>Amazonas</option>
                                <option value="ap" <?= $estado === "ap" ? "selected" : "" ?>>Amapá</option>
                                <option value="ba" <?= $estado === "ba" ? "selected" : "" ?>>Bahia</option>
                                <option value="ce" <?= $estado === "ce" ? "selected" : "" ?>>Ceará</option>
                                <option value="df" <?= $estado === "df" ? "selected" : "" ?>>Distrito Federal</option>
                                <option value="es" <?= $estado === "es" ? "selected" : "" ?>>Espírito Santo</option>
                                <option value="go" <?= $estado === "go" ? "selected" : "" ?>>Goiás</option>
                                <option value="ma" <?= $estado === "ma" ? "selected" : "" ?>>Maranhão</option>
                                <option value="mt" <?= $estado === "mt" ? "selected" : "" ?>>Mato Grosso</option>
                                <option value="ms" <?= $estado === "ms" ? "selected" : "" ?>>Mato Grosso do Sul</option>
                                <option value="mg" <?= $estado === "mg" ? "selected" : "" ?>>Minas Gerais</option>
                                <option value="pa" <?= $estado === "pa" ? "selected" : "" ?>>Pará</option>
                                <option value="pb" <?= $estado === "pb" ? "selected" : "" ?>>Paraíba</option>
                                <option value="pr" <?= $estado === "pr" ? "selected" : "" ?>>Paraná</option>
                                <option value="pe" <?= $estado === "pe" ? "selected" : "" ?>>Pernambuco</option>
                                <option value="pi" <?= $estado === "pi" ? "selected" : "" ?>>Piauí</option>
                                <option value="rj" <?= $estado === "rj" ? "selected" : "" ?>>Rio de Janeiro</option>
                                <option value="rn" <?= $estado === "rn" ? "selected" : "" ?>>Rio Grande do Norte</option>
                                <option value="ro" <?= $estado === "ro" ? "selected" : "" ?>>Rondônia</option>
                                <option value="rs" <?= $estado === "rs" ? "selected" : "" ?>>Rio Grande do Sul</option>
                                <option value="rr" <?= $estado === "rr" ? "selected" : "" ?>>Roraima</option>
                                <option value="sc" <?= $estado === "sc" ? "selected" : "" ?>>Santa Catarina</option>
                                <option value="se" <?= $estado === "se" ? "selected" : "" ?>>Sergipe</option>
                                <option value="sp" <?= $estado === "sp" ? "selected" : "" ?>>São Paulo</option>
                                <option value="to" <?= $estado === "to" ? "selected" : "" ?>>Tocantins</option>
                            </select>
                        </div>
                        </br>
                        <div>
                            <label for="cep">CEP*</label>
                            <input type="text" placeholder="87624-457" name="cep" class="form-control" required id="cep" value="<?php echo $cep; ?>">
                        </div>
                        </br>
                        <div>
                            <label for="cidade">Cidade*</label>
                            <input type="text" placeholder="Cidade" name="cidade" class="form-control" required id="cidade" value="<?php echo $cidade; ?>">
                        </div>
                        </br>
                        <div>
                            <label for="logradouro">Logradouro*</label>
                            <input type="text" placeholder="Rua Joaquim" name="logradouro" class="form-control" required id="logradouro" value="<?php echo $logradouro; ?>">
                        </div>
                        </br>
                        <div>
                            <label for="numero">Número*</label>
                            <input type="text" placeholder="102" name="numero" class="form-control" required id="numero" value="<?php echo $numero; ?>">
                        </div>
                        </br>
                        <div>
                            <label for="bairro">Bairro*</label>
                            <input type="text" placeholder="Bairro" name="bairro" class="form-control" required id="bairro" value="<?php echo $bairro; ?>">
                        </div>
                        </br></br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Enviar">
                            <input type="reset" class="btn btn-secondary" value="Limpar">
                        </div>
                        </br>
                        <p>Possui uma conta? <a href="login.php">Fazer login</a></p>
                    </form>
</body>

</html>