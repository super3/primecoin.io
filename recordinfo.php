<?php

// Configuration values
define('DATA_PATH', 'records.txt');

function record_info() {    
    $info = json_decode(file_get_contents(DATA_PATH));
    return $info;
}

$latestrecord = record_info()[count(record_info()) - 1];

echo '<p>Latest Record: We found a ' . $latestrecord -> type . ' of length ' . $latestrecord -> length . '! ' 
         .' It has an origin of ' . $latestrecord -> origin . ' digits, and was in block'
         .' <a href="https://bchain.info/XPM/block/' . $latestrecord -> block . '">' . $latestrecord -> block
  . '</a>. (<a href="https://primes.zone/">view all records</a>)<p/>'


?>
