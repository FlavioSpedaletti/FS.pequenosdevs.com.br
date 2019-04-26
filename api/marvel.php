<?php

try {

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // $limit = 40;
    // $ts = 1;
    // $apikey = '5245988a669f48994963bb5ea36264e8';
    // $hash = '93c7794eec9d2aad36bf1b749fb7cd3c';
    // $url = 'https://gateway.marvel.com/v1/public/characters?limit=' . $limit . '&ts=' . $ts . '&apikey=' . $apikey . '&hash=' . $hash;

    //método 1 para juntar arrays
    // $json_returned = json_decode(file_get_contents($url . '&offset=' . rand(1, 1490)), true);
    // $encode1 = $json_returned['data']['results'];

    // $json_returned = json_decode(file_get_contents($url . '&offset=' . rand(1, 1490)), true);
    // $encode2 = $json_returned['data']['results'];

    // echo json_encode(array_merge($encode1, $encode2));

    //método 2 para juntar arrays
    // for ($x = 0; $x <= 1; $x++) {
    //     $json_returned = json_decode(file_get_contents($url . '&offset=' . rand(1, 1490)), true);
    //     $user[] = $json_returned['data']['results'];
    // }

    // echo json_encode($user);

    //método 3
    $arr[] = array(
        "nome" => "Mystique",
        "imagem" => "http://i.annihil.us/u/prod/marvel/i/mg/5/03/5390dc2225782.jpg"
    );
    $arr[] = array(
        "nome" => "Human Torch (Jim Hammond)",
        "imagem" => "http://i.annihil.us/u/prod/marvel/i/mg/c/70/53176bed3fe4c.jpg"
    );
    $arr[] = array(
        "nome" => "Hulk",
        "imagem" => "http://i.annihil.us/u/prod/marvel/i/mg/5/a0/538615ca33ab0.jpg"
    );
    $arr[] = array(
        "nome" => "Professor X",
        "imagem" => "http://i.annihil.us/u/prod/marvel/i/mg/3/e0/528d3378de525.jpg"
    );

    echo json_encode($arr);
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>