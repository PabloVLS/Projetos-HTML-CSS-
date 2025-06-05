<?php

include '../includes/conexao.php';

$nome = $_POST['campo-nome'];
$responsavel = $_POST['campo-responsavel'];
$descricao  = $_POST['campo-desc'];
$data  = $_POST['campo-data'];
$hora = $_POST['campo-hora'];


$sql = "insert into atividades (nome, responsavel, descricao, data, hora)
        values('$nome', '$responsavel', '$descricao', '$data', '$hora')";

$conexao->query($sql);

header("location: index.php");