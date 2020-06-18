<?php
require '../db/db.php';

$number = isset($_GET['number']);

if($number){

    foreach ($previousInternContent as $key => $intern){
        $intern = (array) $intern;
        if($intern['number'] == $_GET['number']){
            unset($previousInternContent[$key]);
        }
    }

    file_put_contents($dbFile, json_encode($previousInternContent)."\n");

}

header("Location:../send-airtime.php");

