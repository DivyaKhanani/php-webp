<?php

// Initialise your autoloader (this example is using Composer)
require 'vendor/autoload.php';

use WebPConvert\WebPConvert;

$url =  'https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528__340.jpg';  

$temp =  explode("/",$url);

$filename = "temp/" .$temp[sizeof($temp)-1];

$source = __DIR__ ."/" .$filename; 

if(copy($url, $filename)){
    $destination = $source . '.webp';
    $options = [];
    WebPConvert::convert($source, $destination, $options);
} 
?>
