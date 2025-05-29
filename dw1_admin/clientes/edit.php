<?php

include '../includes/conexao.php';

$id = $_POST['campo-id'];
$nome = $_POST['campo-nome'];
$email = $_POST['campo-email'];
$cpf = $_POST['campo-cpf'];
$salario = $_POST['campo-salario'];
$sexo = $_POST['campo-sexo'];
$data = $_POST['campo-data'];
$obs = $_POST['campo-obs'];

$sql = "update clientes set nome='$nome', email='$email', cpf='$cpf', salario='$salario',
        sexo='$sexo', data='$data', obs='$obs' where id = $id ";
echo $sql;

$conexao->query($sql);

header("location: index.php");