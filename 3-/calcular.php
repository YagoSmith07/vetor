<?php


$m = array("ola minha dama." , "voce é bonita");
$h = array("ola meu rapaz." , "voce tem testosterona");
$f1 = $h[rand(0, count($h)-1)];
$f2 = $m[rand(0, count($m)-1)];



$o = $_POST ["o"];

if ($o == 1)
{
    echo ($f1);
}
else if ($o == 2)
{
    echo ($f2);
}
?>