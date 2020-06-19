<?php

require 'partials/header.php';


$url = 'https://api.wallets.africa/self/transactions';
$secretKey = '9dnk3o7267g0';
$publicKey = '5wufpu7o7lpw';

// create curl resource
$ch = curl_init();


curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{\r\n  \"skip\": 0,\r\n  \"take\": 15,\r\n  \"dateFrom\": \"2020-01-01\",\r\n  \"dateTo\": \"2021-06-15\",\r\n  \"transactionType\": 3,\r\n  \"secretKey\": \"9dnk3o7267g0\",\r\n  \"currency\": \"NGN\"\r\n}\r\n",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: Bearer " . $publicKey
    ),
));

$response = curl_exec($ch);

curl_close($ch);
$response = json_decode($response);

?>
    <main>
        <section class="container mt-5">
            <div class="row mt-3">
                <div class="col-md-12">
                    <h1 class="head">Transactions</h1>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table shadow-sm mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Currency</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Category</th>
                            <th scope="col">Narration</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $key = 1;

                    foreach($response->Data->Transactions as $data){

                        echo <<<HELLO
                        <tr>
                            <th scope="row">$key</th>
                            <td>$data->Currency</td>
                            <td>$data->Amount</td>
                            <td>$data->Category</td>
                            <td>$data->Narration</td>
                            <td>$data->DateTransacted</td>
                        </tr>
HELLO;
                    $key++;

                    }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>