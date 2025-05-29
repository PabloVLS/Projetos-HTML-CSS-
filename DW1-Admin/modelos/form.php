<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DW1 - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php include "../includes/barra-superior.php"; ?>
    <div class="container">
        <div class="row">
            <?php include "../includes/menu-lateral.php"; ?>
            <div class="col-9 ">
                <h3 class="mt-3">Adicionar - Formulário</h3>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="id-nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="id-nome" name="campo-nome" value="" required minlength="6" maxlength="50" alt="Informe seu nome completo" title="Informe seu nome completo" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="id-email" class="form-label">Email </label>
                            <input type="email" class="form-control" id="id-email" name="campo-email" value="">
                        </div>
                        <div class="col-lg-4 4mb-3">
                            <label for="id-cpf" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="id-cpf" name="campo-cpf" value="" required placeholder="000.000.000-00">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-rg" class="form-label">RG:</label>
                            <input type="text" class="form-control" id="id-rg" name="campo-rg" value="" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-data" class="form-label">Data de Nascimento:</label>
                            <input type="date" class="form-control" id="id-data" name="campo-data" value="" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-sexo" class="form-label">Sexo:</label>
                            <select name="campo-sexo" id="id-sexo" class="form-control" required>
                                <option value="">Selecione o Sexo:</option>
                                <option value="F">Feminino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="" class="form-label">Gosto Musical</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Forró" id="check-1check-2" name="campo-musical">
                                <label class="form-check-label" for="check-1check-2">
                                    Forró
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Heavy Metal" id="check-2" name="campo-musical" checked>
                                <label class="form-check-label" for="check-2">
                                    Heavy Metal
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="" class="form-label">Cor:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="campo-cor" id="radio-1" value="preto">
                                <label class="form-check-label" for="radi0-1">
                                    Preto
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="campo-cor" id="radio-2" value="brancoS" checked>
                                <label class="form-check-label" for="radio-2">
                                    Branco
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="id-obs" class="form-label">Observação:</label>
                            <textarea class="form-control" id="id-obs" name="campo-obs" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/rodape.php"; ?>
</body>

</html>