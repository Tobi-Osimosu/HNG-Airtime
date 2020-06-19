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

require '../partials/header.php';

?>

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
                <th scope="col">NETWORK</th>
                <th scope="col">MESSAGE</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($previousInternContent as $key => $intern) {
            $message = @json_decode($output[$key])->Message;
            $key++;

            echo <<<START
            <tr>
                <th scope="row"> $key</th>
                <td>$intern->name</td>
                <td>$intern->number</td>
                <td>$intern->network</td>
                <td>$message</td>
            </tr>
START;
            }
            ?>
            </tbody>
        </table>
