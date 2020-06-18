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
                        <h1 class="head">Send Airtime To Interns</h1>
                    </div>
                </div>

                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NAME</th>
                            <th scope="col">TRACK</th>
                            <th scope="col">MOBILE NUMBER</th>
                            <th scope="col">NETWORK</th>
                            <th scope="col">AMOUNT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($previousInternContent as $key => $intern) {
                            $key++;
                            echo <<<START
                            <tr>
                                <th scope="row"> $key</th>
                                <td>$intern->name</td>
                                <td>$intern->track</td>
                                <td>$intern->number</td>
                                <td>$intern->network</td>
                                <td><input type="number" class="amount-input"></td>
                                <td><a href="#"><img src="./images/trash.svg" alt="" class="action"></a></td>
                            </tr>
START;
                        }
                    ?>
                    </tbody>
                </table>

                <div class="row mt-5">
                    <div class="col-md-12 d-flex justify-content-center">
                        <a class="btn btn-outline-primary mr-5">Add Intern</a>
                        <a class="btn btn-primary">Send Airtime</a>
                    </div>
                </div>
            </section>
        </main>

        <script src="./js/jquery-3.4.1.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</body>

</html>