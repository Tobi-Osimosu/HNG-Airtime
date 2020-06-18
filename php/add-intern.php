<?php
require '../db/db.php';

$name = $_POST['name'];
$track = $_POST['track'];
$numbers = $_POST['number'];
$network = $_POST['network'];

foreach ($numbers as $key => $number) {

    $previousInternContent[] = [
        'name' => $name[$key],
        'track' => $track[$key],
        'network' => $network[$key],
        'number' => $number
    ];

}

file_put_contents($dbFile, json_encode($previousInternContent)."\n");

header("Location:../send-airtime.php");
?>