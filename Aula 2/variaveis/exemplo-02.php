<?php 

	/*
	$anoNascimento = 1990;

	$nomeCompleto = "";
	*/

	// na linha de baixo temos uma variavel com número no nome
	$nome1 = "João";

	$sobrenome = "Rangel";

	// concatenação: aqui se faz com "." diferente do java que se usa "+"
	$nomeCompleto = $nome1 . " " . $sobrenome;
	echo $nomeCompleto;

	echo "<br/>";

// aqui mostramos a variavel na tela
	echo $nome1;
// aqui quebramos uma linha na tela
	echo "<br/>";
// aqui apagamos a memoria dentro da variavel (seu conteudo)
	unset ($nome1);
// aqui tentamos exibir oq tem dentro da variavel, mas como apagamos o conteudo, será exibido na tela um "erro".

// este comando "isset" diz: só será exibido se tiver conteudo dentro desta variavel. Voce chamou uma variavel que nao foi definida.
	if (isset($nome1)) {
		// code...
		echo $nome1;
	}

?>