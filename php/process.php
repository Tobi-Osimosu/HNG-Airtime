<?php

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

echo json_encode($output);


// close curl resource to free up system resources
curl_close($ch);