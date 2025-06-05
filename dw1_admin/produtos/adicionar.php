<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DW1 - Adicionar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include "../includes/barra-superior.php"; ?>
    <div class="container">
        <div class="row">
            <?php include "../includes/menu-lateral.php"; ?>
            <div class="col-9">
                <h3 class="mt-3">Adicionar produtos</h3>
                <form action="addProduto.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="id-nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="id-nome" name="campo-nome" value="" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="id-valor" class="form-label">Valor:</label>
                            <input type="text" class="form-control" id="id-valor" name="campo-valor" value="">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-codigo" class="form-label">Codigo:</label>
                            <input type="text" class="form-control" id="id-codigo" name="campo-codigo" value="" required maxlength="11" >
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-quantidade" class="form-label">Quantidade:</label>
                            <input type="number" class="form-control" id="id-quantidade" name="campo-quantidade" value="" required>
                        </div>
                        <div class="col-lg-8 mb-3">
                            <label for="id-desc" class="form-label">Descricao:</label>
                            <textarea class="form-control" id="id-desc" rows="3" name="campo-desc"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Salvar Produto</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/rodape.php"; ?>
</body>

</html>