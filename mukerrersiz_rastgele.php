<?php

$resimler = array("resim1.jpg","resim2.jpg","resim3.jpg","resim4.jpg","resim5.jpg","resim6.jpg","resim7.jpg");
$logdosya = $_SERVER['DOCUMENT_ROOT'].'\\array.txt';
$fp = fopen($logdosya,"r");
if ($fp){
$okunan = fread($fp,256);
$resimler = unserialize ($okunan);
fclose($fp);
}

$sayi = array_rand($resimler,1);

echo $resimler[$sayi];
unset ($resimler[$sayi]);
if (count($resimler) == 0) $resimler = array("resim1.jpg","resim2.jpg","resim3.jpg","resim4.jpg","resim5.jpg","resim6.jpg","resim7.jpg");

$fp = fopen($logdosya,"w");
fwrite($fp,serialize($resimler));
fclose($fp);




?>
