<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $nomeSistema ?> </title>
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
            <?php
            if (!empty($login_err)) {
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }
            ?>
            <div class="col-md-6 mb-3">
                <img src="./img/LogoNuAzulMaior.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3" style="padding: 5px;"> Login </h3>
                <br>
                <form method="post">
                    <div>
                        <label for="login">Usuário</label>
                        <input type="text" name="username" class="form-control" id="login" required>
                    </div>
                    <br></br>
                    <div>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" required>
                    </div>
                    <br></br>
                    <button class="btn btn-class">Entrar</button>
                    <br></br>
                    <br></br>
                    <p>Não possui uma conta? <a href="register.php">Criar conta</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>