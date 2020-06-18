<?php
require '../db/db.php';

$previousInternContent[] = [
    'name' => $_POST['name'],
    'track' => $_POST['track'],
    'network' => $_POST['network'],
    'number' => $_POST['number']
];

file_put_contents($dbFile, json_encode($previousInternContent)."\n");

header("Location:../send-airtime.php");
?>