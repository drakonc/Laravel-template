<?php

namespace App\Helpers;

class Helper {

    public static function formatLatinDate(){
        return now()->format('d-m-Y');
    }

    public static function Estado(){
        return ['0' => 'Inactivo','1' => 'Activo'];
    }

}