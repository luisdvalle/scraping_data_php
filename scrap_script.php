<?php

$data = file_get_contents('http://apply.dataprocessors.com.au/');

$regex = '/Question:.*/';

preg_match($regex, $data, $match);

var_dump($match); 

echo $data;
?>
