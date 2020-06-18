<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Transactions | HNG Airtime</title>
</head>

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
                            <a class="nav-link" href="./send-airtime.html">Home</a>
                        </li>
                        <li class="nav-item mr-5">
                            <a class="nav-link active" href="add-intern.php">Add Intern</a>
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
                    <h1 class="head">Add A New Intern</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <form action="php/add-intern.php" method="POST">
                        <input type="text" placeholder="Full Name" class="mt-5 pl-3" name="name">
                        <input type="text" placeholder="Track" class="mt-5 pl-3" name="track">
                        <input type="text" placeholder="Mobile Number" class="mt-5 pl-3" name="number">
                        <input type="text" placeholder="Network" class="mt-5 pl-3" name="network">

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary mt-5" type="submit">Add Intern</button>
                        </div>
                    </form>
                </div>
                <div class="circle-img col-md-6"></div>
            </div>

        </section>
    </main>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>