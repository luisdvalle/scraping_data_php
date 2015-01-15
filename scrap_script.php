<?php

$data = file_get_contents('http://apply.dataprocessors.com.au/');

$regex = '/(\d+)/';

preg_match_all($regex, $data, $matches_out);

//var_dump($match); 
//echo $data;

echo count($matches_out)+"\n";

echo count($matches_out[0])+"\n";

print_r($matches_out[0]);
echo "\n";

print_r($matches_out[1]);
echo "\n";
?>
