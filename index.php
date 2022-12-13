<?php

include_once "./libraries/string_replace.php";
include_once "./libraries/func_rupiah.php";

// Level 1 Test
$text1 = "beli gorengan sepuluh";
$text2 = "beli kacang sepuluh ribu";
$text3 = "transfer ke rekening tiga tiga lima sembilan dua satu enam lima dua dua sebesar seratus juta";
$text4 = "isi pulsa ke nomor kosong delapan satu dua tiga empat lima enam tujuh delapan sembilan seratus ribu";

$text1 = string_replace($text1);
$text2 = string_replace($text2);
$text3 = string_replace($text3);
$text4 = string_replace($text4);

echo $text1 ."\n";
echo $text2 ."\n";
echo $text3 ."\n";
echo $text4 ."\n";

// Level 2 Test
$text5 = "transfer ke rekening satu dua tiga kosong lima kali tujuh tujuh delapan tiga kali seratus juta";
$text6 = "transfer ke rekening satu dua tiga kosong lima kali tujuh tujuh delapan tiga kali seratus juta rupiah";

$text5 = format_rupiah(string_replace($text5));
$text6 = format_rupiah(string_replace($text6));

echo $text5 ."\n";
echo $text6 ."\n";

// Level 3 Test
$text7 = "transfer seratus juta ke rekening satu dua tiga kosong lima kali tujuh tujuh triple delapan";

$text7 = format_rupiah(string_replace($text7));

echo $text7 ."\n";