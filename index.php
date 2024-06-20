<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./js/scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- Bootstrap CSS -->
    <title>API ViaCEP</title>
    <style>
        .box {
            width: 500px;
            height: 450px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <h1 class="text-center text-black mb-4"> API ViaCEP </h1>
        <div class="box rounded shadow p-4">
            <form id="form-cep" class="form-floating mb-3 w-100" method="post">
                <input type="" name="cep" id="cep" class="form-control" placeholder="CEP"/>
                <label for="rotulo-flutuante">CEP</label>
                <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 15px;">Procurar CEP</button>
                <div id="form-endereco">
                    <?php include('endereco.php');?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>