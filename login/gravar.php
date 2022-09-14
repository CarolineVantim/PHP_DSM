<?php

require_once 'valida.php';

$filename = "msg.txt";
if(!file_exists("msg.txt")){
    $arquivo = fopen("msg.txt", 'w');
}else{
    $arquivo = fopen("msg.txt", 'a');
}

$textoPublicar = "CPF: ".$_POST['cpf']. " NOME: ".$_POST['nome']. PHP_EOL;

fwrite($arquivo, $textoPublicar);
fclose($arquivo);
header('Location: cadastro.php');
