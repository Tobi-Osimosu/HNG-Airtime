<?php

require 'db/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Send Airtime | HNG Airtime</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="./images/hng_logo.svg" alt="" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="../add-intern.php">Add Intern</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="../send-airtime.php">Send Airtime</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../transactions.php">Transactions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>