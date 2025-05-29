<?php

include '../includes/conexao.php';

$nome = $_POST['campo-nome'];
$email = $_POST['campo-email'];
$cpf = $_POST['campo-cpf'];
$salario = $_POST['campo-salario'];
$sexo = $_POST['campo-sexo'];
$data = $_POST['campo-data'];
$obs = $_POST['campo-obs'];

$sql = "insert into clientes (nome, email, cpf, salario, sexo, data, obs)
        values('$nome', '$email', '$cpf', '$salario', '$sexo', '$data', '$obs')";

$conexao->query($sql);

header("location: index.php");