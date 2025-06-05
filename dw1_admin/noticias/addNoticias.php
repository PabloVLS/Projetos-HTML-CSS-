<?php

include '../includes/conexao.php';

$titulo = $_POST['campo-titulo'];
$autor = $_POST['campo-autor'];
$sintese = $_POST['campo-sintese'];
$data = $_POST['campo-data'];
$categoria = $_POST['campo-categoria'];
$texto = $_POST['campo-texto'];


$sql = "insert into noticias (titulo, autor, sintese, data, categoria, texto)
        values('$titulo', '$autor', '$sintese', '$data', '$categoria' ,'$texto')";

$conexao->query($sql);

header("location: index.php");