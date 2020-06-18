<?php
$dbFile = __DIR__ .'/database.json';
$previousInternContent = [];

if(file_exists($dbFile)){
    $previousInternContent = (array) json_decode(file_get_contents($dbFile));
}
