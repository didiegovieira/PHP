<?php  
// toda informaçao que vier por get ou por post, sempre vai ser string/texto
// para fazer a conversao do string para numero é como abaixo, usando (int) antes do comando
    $nome = (int)$_GET["A"];

    //var_dump($nome);

    //ip do provedor de acesso do usuario, ele pega do ambiente
//    $ip = $_SERVER["REMOTE_ADDR"];
    //pega o diretorio em que meu arquivo está
    // log de acesso, bom para saber onde está acessando
    $ip = $_SERVER["SCRIPT_NAME"];
// usado para saber quem logou, mudar a tela baseado em quem logou, etc.

    echo $ip;
?>