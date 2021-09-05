<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php require_once 'template/Navbar.php';?>
    <div class="container py-4">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Ultimos Serviços</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">Data</th>
                            <th scope="col">Local</th>
                            <th scope="col">Valor (R$)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Iterar daqui -->
                        <?php
                        require_once 'conn.php';
                        $resultado = selectFulllimited('servicos');
                        foreach($resultado as $servico):?>
                        <tr>
                            <th scope="row"><?= NomeById($servico['cliente_id']) ?></th>
                            <td><?= $servico['dt_serv']?></td>
                            <td><?= $servico['endereco_serv']?></td>
                            <td>R$ <?= number_format($servico['valor_total'], 2,',','.')?></td>
                        </tr>
                        <?php endforeach;?>
                        <!-- Até aqui -->
                    </tbody>
                </table>
                <a class="btn btn-primary btn-lg" href="forms_servico.php">Adcionar Serviço</a>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-primary rounded-3">
                    <?php $total = somaServico();?>
                    <h2>Faturamento Total</h2>
                    <h1 class="display-1">R$ <?= number_format(somaServico(), 2,',','.')?></h1>
                </div>
            </div>  
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Demanda</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Limpeza Fossa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php require_once 'template/Footer.php'?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>