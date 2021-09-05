<!doctype html>
<html lang="en">

<head>
    <!-- readonly meta tags -->
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
                <h1 class="display-5 fw-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-truck-flatbed" viewBox="0 0 16 16">
                        <path
                            d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.732 0h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4a2 2 0 0 1 1.732 1z" />
                    </svg>
                    Novo serviço
                </h1>
            </div>
            <form class="row g-3" method="POST" action="cadastrar-servico.php">
                <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Cliente</label>
                    <input type="text" class="form-control" name="cliente" placeholder="" readonly>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Responsavel no local</label>
                    <input type="text" class="form-control" name="responsavel" readonly>
                </div>

                <div class="col-md-4">
                    <label for="data" class="form-label">Data</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="dia" placeholder="Dia" readonly>
                        <input type="text" class="form-control" name="mes" placeholder="Mês" readonly>
                        <input type="text" class="form-control" name="ano" placeholder="Ano" readonly>
                    </div>
                </div>

                <hr class="mt-5">

                <div class="col-md-5">
                    <label for="validationCustomUsername" class="form-label">Endereço</label>
                    <div class="input-group">
                        <input type="text" class="form-control" style="width: 60%;" name="endereco" readonly>
                        <span class="input-group-text" id="inputGroupPrepend">nº</span>
                        <input type="text" class="form-control" name="numResidencia"
                            aria-describedby="inputGroupPrepend" readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="bairro" readonly>
                </div>
                <div class="col-md-2">
                <label for="validationCustom03" class="form-label">Estado</label>
                    <input type="text" class="form-control" name="estado" placeholder="" readonly>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom03" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="cidade" placeholder="" readonly>
                </div>

                <div class="col-8">
                    <label for="validationCustom03" class="form-label">Descrição</label>
                    <input type="text" class="form-control" name="descricao"
                        placeholder="ex: Caminhão pipa, para abastecimento de piscina" readonly>
                </div>
                
                <div class="col-4">
                    <label for="validationCustom03" class="form-label">Categoria</label>
                    <select class="form-select" name="categoria" readonly>
                        <option selected disabled value="">Selecione uma categoria</option>
                        <?php require_once 'conn.php'; $resultado = selectCatgoria();?>
                        <?php foreach($resultado as $cliente): ?>
                        <option><?= $cliente['nome'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <hr class="mt-5">

                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">hora inicio</label>
                    <input type="text" class="form-control" name="horaInicial" readonly>
                    <label for="validationCustom02" class="form-label"> hora termino</label>
                    <input type="text" class="form-control" name="horaFinal" readonly>
                </div>
                <div class="col-md-1">
                    <label for="validationCustom01" class="form-label">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" placeholder="1, 2, 3.5..." readonly>
                    <label for="validationCustom01" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="tipo" aria-describedby="cifrao" readonly>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Valor</label>
                    <div class="input-group">
                        <span class="input-group-text" id="cifrao">R$</span>
                        <input type="text" class="form-control" name="valor" aria-describedby="cifrao" readonly>
                    </div>
                    <label for="validationCustom01" class="form-label">Total</label>
                    <div class="input-group">
                        <span class="input-group-text" id="cifrao">R$</span>
                        <input type="text" class="form-control" name="total" aria-describedby="cifrao" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label"> Metodo de pagamento</label>
                    <input type="text" class="form-control" name="pagamento" readonly>
                </div>
                <hr class="">
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>


        <?php require_once 'template/Footer.php'?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>