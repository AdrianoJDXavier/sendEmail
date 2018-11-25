<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function validaEmail($arq)
    {
        $arquivo = fopen($arq, 'r');
        while (!feof($arquivo)) {
            $linha = fgets($arquivo, 1024);
            echo $linha.'<br />';
        }
        fclose($arquivo);
    }
}
