<?php

include '../includes/conexao.php';

$id = $_GET['id'];

$sql = "delete from produtos where id = $id ";

$conexao->query($sql);

header("location: index.php");