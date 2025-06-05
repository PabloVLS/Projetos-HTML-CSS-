<?php
$id = $_GET['id'];

include "../includes/conexao.php";

$dados = $conexao->query("select * from atividades where id=$id");

$item = mysqli_fetch_object($dados);

?>

<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DW1 - Edição Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include "../includes/barra-superior.php"; ?>
    <div class="container">
        <div class="row">
            <?php include "../includes/menu-lateral.php"; ?>
            <div class="col-9">
                <h3 class="mt-3">Editar Atividade</h3>
                <form action="edit.php" method="post">
                    <input type="hidden" name="campo-id" value="<?= $item->id; ?>">
                    <div class="row">
                    <div class="col-lg-6 mb-3">
                            <label for="id-nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="id-nome" name="campo-nome" value="<?= $item->nome; ?>" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="id-responsavel" class="form-label">Responsavel:</label>
                            <input type="text" class="form-control" id="id-responsavel" name="campo-responsavel" value="<?= $item->responsavel; ?>">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-data" class="form-label">Data:</label>
                            <input type="date" class="form-control" id="id-data" name="campo-data" value="<?= $item->data; ?>" required maxlength="11" >
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-hora" class="form-label">Hora:</label>
                            <input type="time" class="form-control" id="id-hora" name="campo-hora" value="<?= $item->hora; ?>" required>
                        </div>
                        <div class="col-lg-8 mb-3">
                            <label for="id-desc" class="form-label">Descricao:</label>
                            <textarea class="form-control" id="id-desc" rows="3" name="campo-desc"><?= $item->descricao; ?></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Salvar Atividade</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/rodape.php"; ?>
</body>

</html>