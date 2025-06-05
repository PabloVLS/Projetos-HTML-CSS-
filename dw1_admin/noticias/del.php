<?php

include '../includes/conexao.php';

$id = $_GET['id'];

$sql = "delete from noticias where id = $id ";

$conexao->query($sql);

header("location: index.php");