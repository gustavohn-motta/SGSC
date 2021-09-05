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
                <h1 class="display-5 fw-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd"
                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    Novo cliente
                </h1>
            </div>
            <form class="row g-3" method="POST" action="cadastrar-cliente.php">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Sobre nome</label>
                    <input type="text" class="form-control" name="sobreNome" required>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">CPF/CNPJ</label>
                    <input type="text" class="form-control" name="cpfCnpj" required>
                </div>

                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Endereço</label>
                    <div class="input-group">
                        <input type="text" class="form-control" style="width: 60%;" name="endereco" required>
                        <span class="input-group-text" id="inputGroupPrepend">nº</span>
                        <input type="text" class="form-control" name="numResidencia" aria-describedby="inputGroupPrepend"
                            required>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="bairro" required>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Estado</label>
                    <select class="form-select" name="estado" required>
                    <option selected disabled value="">Selecione um estado</option>
                        <?= require_once 'utility/uf-selects.php'?>
                        <?php foreach($estadosBrasileiros as $uf): ?>
                        <option><?=$uf ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="cidade" placeholder="" required>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Tel.1</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">(DDD)</span>
                        <input type="text" class="form-control" aria-describedby="inputGroupPrepend" name="ddd" placeholder="XX" required>
                        <input type="text" class="form-control" style="width: 50%;" placeholder="XXXXXXXXX" name="telefone" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="Cliente@Cliente.com.br" required>
                </div>
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