<?php

include '../includes/conexao.php';

$id = $_POST['campo-id'];
$titulo = $_POST['campo-titulo'];
$autor = $_POST['campo-autor'];
$paginas = $_POST['campo-paginas'];
$lancamento = $_POST['campo-lancamento'];
$sintese = $_POST['campo-sintese'];

$sql = "update livros set titulo='$titulo', autor='$autor', numero_paginas='$paginas', data_lancamento='$lancamento',
        sintese='$sintese' where id = $id ";
echo $sql;

$conexao->query($sql);

header("location: index.php");