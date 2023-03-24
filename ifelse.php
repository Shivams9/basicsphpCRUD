<?php
$a=$_GET["a"];
$b=$_GET["b"];
if ($a>$b)
{
    $max=$a;
}
else
{
    $max=$b;
}
echo "Max=$max<br>";
$min=($a<=$b)?$a:$b;
echo "Min=$min<tbr>";
?>