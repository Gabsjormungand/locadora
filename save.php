<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$veiculo = $_POST["veiculo"];

echo $nome, $email, $veiculo;

$arquivo = fopen("ReservaCliente.csv", "a");
fwrite($arquivo, $nome . ";" . $email . ";" . $veiculo . "\n");
fclose($arquivo);

header('location:index.php?mensegem=ok');
?>