<?php

/**
 * @author: Yura Shved (jur.ukr@gmail.com)
 * Date: 29.10.2016 20:17
 */
include_once 'Animal.php';
include_once 'Cat.php';


$cat = new Cat('Garfield');
echo '<br/><pre>';
var_dump($cat);
echo '</pre>';

$cat->voice();
$cat->showName();
$cat->color = 'grey';
echo '<br/><pre>';
var_dump($cat);
echo '</pre>';