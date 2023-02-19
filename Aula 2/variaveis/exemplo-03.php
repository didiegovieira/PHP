<?php 

//string
	$nome = "Hcode";
	$site = 'www.hcode.com.br';
//integer
	$ano = 1990;
//double
	$salario = 5500.99;
//booleano
	$bloqueado = false;

////////////////////////

//array
	$frutas = array('abacaxi', 'laranja', 'manga');
//acessando o array:
//	echo $frutas[2];

//////////////////////////

// POO
	$nascimento = new DateTime();
//var_dump() para mostrar o tipo da var e seus atributos:
//	var_dump($nascimento);

///////////////////////////

	$arquivo = fopen("exemplo-03.php", "r");

//	var_dump($arquivo);
// essas duas tem diferença, o nulo tem ausensia de valor e o vazio tem valor, ja foi reservado espaço na memoria.
// nulo nao existe, vazio existe mas nao é apresentado.
	$nulo = NULL;
	$nulo = "";

?>