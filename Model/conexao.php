<?php

global $link;

$utf8 = header("content-type: text/html; charset=utf-8");
$link = new mysqli ('localhost:3306','root','','biblioteca');
$link -> set_charset ('utf8')
?>
