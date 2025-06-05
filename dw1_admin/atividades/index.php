<?php
    include "../includes/conexao.php";

    $sql = "select * from atividades";

    $dados = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DW1 - Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include "../includes/barra-superior.php"; ?>
    <div class="container">
        <div class="row">
            <?php include "../includes/menu-lateral.php"; ?>
            <div class="col-9">
                <h3 class="mt-3">Listagem de Atividades</h3>
                <a href="adicionar.php" class="btn btn-success btn-sm">
                    <i class="bi bi-plus-lg"></i> 
                    Adicionar
                </a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id produto</th>
                            <th scope="col">Nome Atividade</th>
                            <th scope="col">Responsavel</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Descricao</th>
                            <th scope="col" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($item = mysqli_fetch_object($dados)) { ?>
                        <tr>
                            <th scope="row"><?php echo $item->id; ?></th>
                            <td><?php echo $item->nome; ?></td>
                            <td><?php echo $item->responsavel; ?></td>
                            <td><?php echo $item->data; ?></td>
                            <td><?php echo $item->hora; ?></td>
                            <td><?php echo $item->descricao; ?></td>
                            <td class="text-center">
                                <a href="editarAtividade.php?id=<?php echo $item->id; ?>" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" 
                                data-bs-placement="top" data-bs-title="Editar Produtos">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" onclick="excluir(<?php echo $item->id; ?>);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" 
                                data-bs-placement="top" data-bs-title="Excluir Atividade">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include "../includes/rodape.php"; ?>
    <script>
        function excluir(id){
            if(confirm("Tem certeza que quer excluir esse registro?")) {
                window.location = "del.php?id=" + id;
            }
        }
    </script>
</body>

</html>