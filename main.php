<?php
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

// Criando funcionário CLT
$funcionarioCLT = new FuncionarioCLT("João","123.456.789-00","Professor",3000,240,"10","200","30 dias");

// Criando funcionário PJ
$funcionarioPJ = new FuncionarioPJ("Maria","987.654.321-00","Programadora",4000,"12.345.678/0001-00",5000,"Desenvolvimento de sistemas");

echo "\n";

$funcionarioCLT->mostrarDados();
$funcionarioCLT->mostrarPagamento();
$funcionarioCLT->contratar();
$funcionarioCLT->demitir();

echo "\n";

$funcionarioPJ->mostrarDados();
$funcionarioPJ->mostrarPagamento();
$funcionarioPJ->contratar();
$funcionarioPJ->demitir();