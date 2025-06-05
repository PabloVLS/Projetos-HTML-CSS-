<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DW1 - Adicionar Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include "../includes/barra-superior.php"; ?>
    <div class="container">
        <div class="row">
            <?php include "../includes/menu-lateral.php"; ?>
            <div class="col-9">
                <h3 class="mt-3">Adicionar Livros</h3>
                <form action="addLivros.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="id-titulo" class="form-label">Titulo:</label>
                            <input type="text" class="form-control" id="id-titulo" name="campo-titulo" value="" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="id-autor" class="form-label">Autor:</label>
                            <input type="text" class="form-control" id="id-autor" name="campo-autor" value="">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-paginas" class="form-label">Numero de paginas:</label>
                            <input type="numeric" class="form-control" id="id-paginas" name="campo-paginas" value="" required maxlength="11" >
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-lancamento" class="form-label">Data lançamento:</label>
                            <input type="date" class="form-control" id="id-lancamento" name="campo-lancamento" value="" required>
                        </div>
                        <div class="col-lg-8 mb-3">
                            <label for="id-sintese" class="form-label">Sintese:</label>
                            <textarea class="form-control" id="id-sintese" rows="3" name="campo-sintese"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Salvar Livro</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/rodape.php"; ?>
</body>

</html>