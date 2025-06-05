<?php

include '../includes/conexao.php';

$id = $_POST['campo-id'];
$nome = $_POST['campo-nome'];
$valor = $_POST['campo-valor'];
$codigo = $_POST['campo-codigo'];
$quantidade = $_POST['campo-quantidade'];
$descricao = $_POST['campo-desc'];

$sql = "update produtos set nome='$nome', valor='$valor', codigo='$codigo', quantidade='$quantidade',
        descricao='$descricao' where id = $id ";
echo $sql;

$conexao->query($sql);

header("location: index.php");