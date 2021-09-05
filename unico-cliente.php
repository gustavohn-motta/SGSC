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
                        class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                    </svg>
                    Dados do Cliente
                </h1>
            </div>
            <form class="row g-3">
                <?php 
                require_once 'conn.php';
                $id = $_GET["id"];
               $resultado = unicoCliente($id);
                ?>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome</label>
                    <input type="text" class="form-control" value="<?=$resultado[0]['nome']?>" name="nome" readonly>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Sobre nome</label>
                    <input type="text" class="form-control" value="<?=$resultado[0]['sobreNome']?>" name="sobreNome"
                        readonly>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">CPF/CNPJ</label>
                    <input type="text" class="form-control" value="<?=$resultado[0]["cpfCnpj"]?>" name="cpfCnpj"
                        readonly>
                </div>

                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Endereço</label>
                    <div class="input-group">
                        <input type="text" class="form-control" style="width: 60%;"
                            value="<?=$resultado[0]['endereco']?>" name="endereco" readonly>
                        <span class="input-group-text" id="inputGroupPrepend">nº</span>
                        <input type="text" class="form-control" value="Nº <?=$resultado[0]['numResid']?>"
                            name="numResidencia" aria-describedby="inputGroupPrepend" readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">Bairro</label>
                    <input type="text" class="form-control" value="<?=$resultado[0]['bairro']?>" name="bairro" readonly>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Estado</label>
                    <input type="text" class="form-control" value="<?=$resultado[0]['estado']?>" name="estado" readonly>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="cidade" value="<?=$resultado[0]['cidade']?>" readonly>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Tel.1</label>
                    <div class="input-group">
                        <input type="text" class="form-control" style="width: 50%;"
                            value="<?=$resultado[0]['telefone']?>" name="telefone" readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name="email" value="<?=$resultado[0]['email']?>" readonly>
                </div>
                <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary">Alterar Dados</button>
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