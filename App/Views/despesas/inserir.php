<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeSistema ?></title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--CSS-->
    <link href="./css/style-dashboard.css" rel="stylesheet">
    <!--Icon-->
    <link href="./img/dolar.png" rel="shortcut icon" type="image/x-icon">
    <!--Icones da tela-->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>

    <?php require("menu_lateral.php"); ?>
    <div class="container" style="margin-left:300px">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./img/despesa.png" class="img-fluid" alt="image">
            </div>
                <div class="col-md-6">
                    <h2 class="signin-text mb-3" style="margin-top:100px;">Despesas</h2>
                    <p>Cadastro de despesas</p>
                    <br/>
                    <div class="wrapper">
                        <form method="post">
                            <label for="tran_data">Data Transação</label>
                            <input type="date" name="tran_data" id="tran_data" class="form-control" style="width: 500px;" required><br>
                            <label for="tran_valor">Valor Transação</label>
                            <input type="number" name="tran_valor" id="tran_valor" class="form-control" style="width: 500px;" required><br>
                            <label for="tran_descricao">Descrição</label>
                            <input type="text" name="tran_descricao" id="tran_descricao" class="form-control" style="width: 500px;" required><br>
                            <br/>
                            <input type="submit" name="enviar" value="Inserir" class="btn btn-primary w100">
                        </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>