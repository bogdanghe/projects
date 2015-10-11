<?php

use Main\Article\Article;
use Main\JSONwriter\JSONwriter;
use Main\XMLWriter\XMLWriter;
use Main\Writer\Writer;
use Main\Factory\Factory;

require_once "vendor/autoload.php";


$articole= new Article('Ion', 'Livu R.', '10/12/1867', 'roman');

try{

	$writer= Factory::getWriter();

}catch(\Exception $e){

	$writer= new XMLWriter();
}