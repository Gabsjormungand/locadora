<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loçadora de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-warning">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 col-12 text-center bg-light shadow">
                <i class="bi bi-car-front-fill text-warning" style="font-size: 3rem;"></i>
                <h1>Encontre o veícilo certo para você</h1>
                <p>Preencha as informações abaixo</p>
                <form action="save.php" method="post">
                    <div class="mb-3 text-start">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" name="nome" type="text">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="from-label" for="email">E-mail</label>
                        <input class="form-control" name="email" id="email" type="email">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label" for="veiculo">Selecione o tipo de veículo</label>
                        <select class="form-select" name="veiculo" id="veiculo" onchange="Trocar();">
                            <option value="Básico">Básico</option>
                            <option value="Esporte">Esporte</option>
                            <option value="Completo">Completo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-warning w-100 text-light fw-bolder roumded-0">FAZER MINHA RESERVA</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 col-md-6 col-12">
                <h1 class="ms-3">VOCÊ PODE ALUGAR ESTE VEÍCULO POR R$ <Span id="valor" class="text-primary fw-bolder">99</span> / DIA</h1>
                <p class="ms-3 lead">Válido para todo território nacional</p>
                <div class="text-start">
                    <img id="imagem" src="basíco.png" class="img-fluid w-75" alt="Carro básico">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="funcoes.js"></script>
</body>
</html>