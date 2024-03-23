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
            <div class="col-lg-12 col-md-12 col-12 text-center bg-light shadow">
                <i class="bi bi-car-front-fill text-warning" style="font-size: 3rem;"></i>
                <h1>Registro de Interesse</h1>
                <p>Pessoas que demonstraram interesse no aluguel de carro.</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Tipo do veículo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomearquivo = "ReservaCliente.csv";
                        $arquivo = fopen($nomearquivo, "r");
                        while(!feof($arquivo)){
                            $linha = fgets($arquivo, 1000);
                            if($linha != ""){
                                $conteudo = explode(";",$linha);
                                echo "<tr>";
                                echo "<td>$conteudo[0]</td>";
                                echo "<td>$conteudo[1]</td>";
                                echo "<td>$conteudo[2]</td>";
                                echo "</tr>";
                            }
                        }
                        fclose($arquivo)
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="funcoes.js"></script>
</body>
</html>
