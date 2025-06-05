<?php

include '../includes/conexao.php';

$nome = $_POST['campo-nome'];
$valor = $_POST['campo-valor'];
$codigo = $_POST['campo-codigo'];
$quantidade = $_POST['campo-quantidade'];
$descricao = $_POST['campo-desc'];


$sql = "insert into produtos (nome, valor, codigo, quantidade, descricao)
        values('$nome', '$valor', '$codigo', '$quantidade', '$descricao')";

$conexao->query($sql);

header("location: index.php");