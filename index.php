<?php
$lorem = 'lorem ipsum lorem ipsum lorem';

echo $lorem;

echo strlen($lorem);

$badword = $_GET['badword'];

$string_replaced = str_replace($badword, '***', $lorem);

echo $string_replaced;