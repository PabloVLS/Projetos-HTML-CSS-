<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DW1 - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include "../includes/barra-superior.php"; ?>
    <div class="container">
        <div class="row">
            <?php include "../includes/menu-lateral.php"; ?>
            <div class="col-9">
                <h3 class="mt-3">Adicionar cliente</h3>
                <form action="add.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="id-nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="id-nome" name="campo-nome" value="" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="id-email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="id-email" name="campo-email" value="">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-cpf" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="id-cpf" name="campo-cpf" value="" required maxlength="11" >
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-salario" class="form-label">Salário:</label>
                            <input type="text" class="form-control" id="id-salario" name="campo-salario" value="" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="id-data" class="form-label">Data de Nascimento:</label>
                            <input type="date" class="form-control" id="id-data" name="campo-data" value="" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label class="form-label" for="id-sexo">Sexo</label>
                            <select class="form-control" name="campo-sexo" id="id-sexo" require>
                                <option value="">Selecione o sexo</option>
                                <option value="F">Feminino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </div>
                        <div class="col-lg-8 mb-3">
                            <label for="id-obs" class="form-label">Observação:</label>
                            <textarea class="form-control" id="id-obs" rows="3" name="campo-obs"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Gravar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/rodape.php"; ?>
</body>

</html>