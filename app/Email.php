<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    private $email;

    public function Email()
    {
    }

    public static function filter($s)
    {
        $array = explode('\n', $s);

        return $array;
    }

    public static function sort($array)
    {
        $ordenado = natcasesort($array);

        return $ordenado;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
