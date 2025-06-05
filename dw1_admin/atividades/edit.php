<?php

include '../includes/conexao.php';

$id = $_POST['campo-id'];
$nome = $_POST['campo-nome'];
$responsavel = $_POST['campo-responsavel'];
$descricao  = $_POST['campo-desc'];
$data  = $_POST['campo-data'];
$hora = $_POST['campo-hora'];

$sql = "update atividades set nome='$nome', responsavel='$responsavel', descricao='$descricao', data='$data',
        hora='$hora' where id = $id ";
echo $sql;

$conexao->query($sql);

header("location: index.php");