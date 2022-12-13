<?php

include_once "./libraries/func_replace.php";

function string_replace($string)
{

    $arr = explode(" ", $string);

    foreach ($arr as $value) {

        $string = replace($value, $string);
    }

    $string = str_replace(['  '], '', preg_replace('/(?<=\d)(?=\D)/', ' ', $string));
    $string = preg_replace('/(?<=\d)(?=\D)/', ' ', $string);

    return $string;
}
