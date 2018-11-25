<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('addEmail');
});

$router->get('/emails/add', function () use ($router) {
    $arq = $_REQUEST['emails'];

    $ar = str_replace(';', ',', $arq);
    $ar1 = str_replace(array("\r\n", "\r", "\n"), ',', $ar);
    $ar2 = str_replace(' ', ',', $ar1);

    $arr = explode(',', $ar2);

    foreach ($arr as $email) {
        // Validar email
        $arquivo_data = 'emails.txt';
        $fo = fopen($arquivo_data, 'a+');
        $linha = fgets($fo, 1024);
        echo $linha.'<br>';
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            fwrite($fo, $email);
            fwrite($fo, "\n");
            fclose($fo);
        } else {
            echo "$arq não é um email valido <br>";
        }
    }
});
