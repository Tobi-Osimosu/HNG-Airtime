<?php
require '../db/db.php';

$url = 'https://sandbox.wallets.africa/bills/airtime/purchase';
$secretKey = 'hfucj5jatq8h';
$publicKey = 'uvjqzm5xl6bw';

// create curl resource
$ch = curl_init();

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $publicKey
));

curl_setopt($ch, CURLOPT_URL, $url);


$numbers = $_POST['number'];
$network = $_POST['network'];
$amount = $_POST['amount'];

foreach ($numbers as $key => $number) {

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'PhoneNumber' => $number,
        'Amount' => $amount[$key],
        'Code' => strtolower($network[$key]),
        'SecretKey' => $secretKey
    ]));

    $output[] = curl_exec($ch);

}

// close curl resource to free up system resources
curl_close($ch);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Send Airtime | HNG Airtime</title>
</head>

<body>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./images/hng_logo.svg" alt="" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link active" href="./send-airtime.html">Home</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#">Add Intern</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./transactions.html">Transactions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <section class="container mt-5">
        <div class="row mt-3">
            <div class="col-md-12">
                <h1 class="head">Success Page</h1>
            </div>
        </div>

        <table class="table mt-3">
            <thead class="thead-dark">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">NAME</th>
                <th scope="col">MOBILE NUMBER</th>
                <th scope="col">STATUS CODE</th>
                <th scope="col">MESSAGE</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($previousInternContent as $key => $intern) {
            $key++;
            $status = @json_decode($output[$key])->ResponseCode;
            $message = @json_decode($output[$key])->Message;
            echo <<<START
            <tr>
                <th scope="row"> $key</th>
                <td>$intern->name</td>
                <td>$intern->number</td>
                <td>$status</td>
                <td>$message</td>
            </tr>
START;
            }
            ?>
            </tbody>
        </table>
