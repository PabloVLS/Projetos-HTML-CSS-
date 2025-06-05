<?php

include '../includes/conexao.php';

$id = $_POST['campo-id'];
$titulo = $_POST['campo-titulo'];
$autor = $_POST['campo-autor'];
$sintese = $_POST['campo-sintese'];
$data = $_POST['campo-data'];
$categoria = $_POST['campo-categoria'];
$texto = $_POST['campo-texto'];

$sql = "update noticias set titulo='$titulo', autor='$autor', sintese='$sintese', data='$data', categoria='$categoria',
        texto='$texto' where id = $id ";
echo $sql;

$conexao->query($sql);

header("location: index.php");