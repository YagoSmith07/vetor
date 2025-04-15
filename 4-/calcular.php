<?php


$c = array("avante timao" , "depay du grau");
$sao = array("bem vindo ao morumBIS" , "temos o calleri");
$s = array("vamos peixao" , "voce tem 60 anos");
$p = array("somos porcada" , "veiga me da seu manguito");
$f1 = $c[rand(0, count($c)-1)];
$f2 = $sao[rand(0, count($sao)-1)];
$f3 = $s[rand(0, count($s)-1)];
$f4 = $p[rand(0, count($p)-1)];
$o = $_POST ["o"];

if ($o == 1)
{
    echo($f1);
}
else if ($o == 2)
{
    echo($f2);
}
 else if ($o == 3)
{
    echo($f3);
}
else if ($o == 4)
{
    echo($f4);
}
?>