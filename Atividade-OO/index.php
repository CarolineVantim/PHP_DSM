<?php

require_once 'Pessoa.php';
require_once 'Salavirtual.php';

$p1 = new Pessoa('Fernando', 11123433345, "Rua teste, 189 - Araras"); 
$p2 = new Pessoa('Gabriel', 12345678900, "Rua teste2, 321 - Leme"); 
$p3 = new Pessoa('Mateus', 11122233345, "Rua teste3, 687 - Araras"); 
$p4 = new Pessoa('Carol', 11122233345, "Rua teste4, 179 - Araras"); 
$p5 = new Pessoa('Luiza', 11122233345, "Rua teste5, 265 - Leme"); 

$p1->addCaracteristica('Matematica', 40);
$p1->addCaracteristica('Engenharia', 30);
// $p2->addCaracteristica('Aula 2', 'Algoritmo');
// $p3->addCaracteristica('Aula 3', 'Desenvolvimento WEB');
$p4->addCaracteristica('Algoritmo', 40);
$p4->addCaracteristica('Desenvolvimento WEB', 30);


 foreach ($p1->getCaracteristicas() as $c){ 
     print '  Nome da Sala: ' . $c->getNome() . ' -  '. 'Capacidade de: ' . $c->getQtdmembro() . "<br>\n"; 
 }
 print "Nome: " . $p1->getNome() . " <br> \n";

 echo "<br>";

 foreach ($p4->getCaracteristicas() as $c){
    print '  Nome da Sala: ' . $c->getNome() . ' -  '. 'Capacidade de: ' . $c->getQtdmembro() . "<br>\n";
    print "Nome: " . $p4->getNome() . " <br> \n";
 }
 