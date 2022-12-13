<?php

function replace($value, $string)
{

    if ($value == "seratus" && strpos($string, "seratus ribu") !== false) {
        $string = str_ireplace($value . " ribu", " 100000", $string);
    } else if ($value == "ribu" && strpos($string, "10 ribu") !== false) {

        $string = str_ireplace("10 ribu", "10000", $string);
    } else if ($value == "seratus" && strpos($string, "seratus juta") !== false) {
        $string = str_replace([$value . " juta","rupiah"], ["100000000",""], $string);
    } else if (strpos($string, 'kosong lima kali') !== false) {
        $string = str_replace("kosong lima kali", "00000", $string);
    } else if (strpos($string, 'delapan tiga kali') !== false) {
        $string = str_replace("delapan tiga kali", "888", $string);
    }  else if ($value == "triple" && strpos($string, 'triple delapan') !== false) {
        $string = str_replace("triple delapan", "888", $string);
    } else {
        $string = str_ireplace($value,  convertNumber($value), $string);
    }

    return $string;
}

function convertNumber($angka)
{
    if ($angka == "kosong" || $angka == "nol") {

        $angka = 0;
    } elseif ($angka == "satu") {
        $angka = 1;
    } elseif ($angka == "dua") {

        $angka = 2;
    } elseif ($angka == "tiga") {
        $angka = 3;
    } elseif ($angka == "empat") {

        $angka = 4;
    } elseif ($angka == "lima") {

        $angka = 5;
    } elseif ($angka == "enam") {

        $angka = 6;
    } elseif ($angka == "tujuh") {

        $angka = 7;
    } elseif ($angka == "delapan") {
        $angka = 8;
    } elseif ($angka == "sembilan") {

        $angka = 9;
    } elseif ($angka == "sepuluh") {

        $angka = 10;
    } elseif ($angka == "sebelas") {

        $angka = 11;
    }

    return $angka;
}