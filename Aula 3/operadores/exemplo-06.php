<?php   

    $a = NULL;

    $b = NULL;

    $c = 10;

    // valida se uma contem valor "??" se nao tiver passa reto
    // aqui só irá parar no $c pois é oq tem valor
    echo $a ?? $b ?? $c;

////////////////////////////

    $d = NULL;

    $e = 8;

    $f = 10;

    // nesta ele ja para no $e pois ele contem valor antes do $f
    echo $d ?? $e ?? $f;

?>