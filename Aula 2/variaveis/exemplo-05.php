<?php


    $nome = "Glaucio";

// escopo de variavel
    function teste() {
        // isto nao vai funcionar pois o escopo nao entende que tem uma variavel fora dele, para ele ouvir que tem uma variavel fora do escopo é necessario o codigo abaixo:
        global $nome;
        echo $nome;

    }

// outro escopo de variavel
    function teste2() {
        // oq foi escrito acima descreve o porq aqui nao funciona
        echo $nome. " agora no teste2";

    }

    teste();
    teste2();

?>