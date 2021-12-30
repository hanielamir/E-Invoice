<?php

function hex_to_ascii($hex)
{
    $str = '';
    $str .= chr(hexdec($hex));
    return $str;
}
function ascii_to_base64($ascii)
{
    return base64_encode($ascii);
}
function prepareInvoiceQRCode($data){
    $string='';
    $number1='01';
    $string.=hex_to_ascii($number1);
    $string1=dechex(strlen($data['name']));
    $string1=strlen($string1)== 1?hex_to_ascii('0'.$string1):hex_to_ascii($string1);
    $string.=$string1;
    $string.=$data['name'];

    $number2='02';
    $string.=hex_to_ascii($number2);
    $string2=dechex(strlen($data['vat_number']));
    $string2=strlen($string2)== 1?hex_to_ascii('0'.$string2):hex_to_ascii($string2);
    $string.=$string2;
    $string.=$data['vat_number'];

    $number3='03';
    $string.=hex_to_ascii($number3);
    $string3=dechex(strlen($data['date']));
    $string3=strlen($string3)== 1?hex_to_ascii('0'.$string3):hex_to_ascii($string3);
    $string.=$string3;
    $string.=$data['date'];

    $number4='04';
    $string.=hex_to_ascii($number4);
    $string4=dechex(strlen($data['total']));
    $string4=strlen($string4)== 1?hex_to_ascii('0'.$string4):hex_to_ascii($string4);
    $string.=$string4;
    $string.=$data['total'];

    $number5='05';
    $string.=hex_to_ascii($number5);
    $string5=dechex(strlen($data['vat']));
    $string5=strlen($string5)== 1?hex_to_ascii('0'.$string5):hex_to_ascii($string5);
    $string.=$string5;
    $string.=$data['vat'];

    $string=ascii_to_base64((string)$string);
    echo $string;
    //return $string;
}
?>