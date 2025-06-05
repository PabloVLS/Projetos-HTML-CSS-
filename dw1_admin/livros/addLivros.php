<?php

include '../includes/conexao.php';

$titulo = $_POST['campo-titulo'];
$autor = $_POST['campo-autor'];
$paginas = $_POST['campo-paginas'];
$lancamento = $_POST['campo-lancamento'];
$sintese = $_POST['campo-sintese'];


$sql = "insert into livros (titulo, autor, numero_paginas, data_lancamento, sintese)
        values('$titulo', '$autor', '$paginas', '$lancamento', '$sintese')";

$conexao->query($sql);

header("location: index.php");