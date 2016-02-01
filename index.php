<?php

require_once 'app/init.php';

$longUrl = "http://wiadomosci.onet.pl/swiat/bialorus-rosnie-poparcie-dla-lukaszenki-i-chec-zjednoczenia-z-rosja/z1nch";
$goo = new GoogleUrlShortener();
$r = $goo->setShortUrl($longUrl);
var_dump($r);
echo '<br /><br />';
echo 'Long Url: <br />'.$longUrl.'<br />';
echo 'Short Url: <br />'.$r['id'];