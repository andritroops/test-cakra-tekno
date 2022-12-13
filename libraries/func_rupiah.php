<?php

function format_rupiah($text)
{
    $keywords = array(100000,100000000);

    foreach($keywords as $keyword) {
        $text2 = str_replace($keyword, " Rp. ".number_format($keyword, 0,",","."), $text);
        
    }

    return $text2;
}