<?php

require 'partials/header.php';
?>
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
                        <div id="intern-details">
                            <input type="text" placeholder="Full Name" class="mt-5 pl-3" name="name[]">
                            <input type="text" placeholder="Track" class="mt-5 pl-3" name="track[]">
                            <input type="text" placeholder="Mobile Number" class="mt-5 pl-3" name="number[]">
                            <input type="text" placeholder="Network" class="mt-5 pl-3" name="network[]">

                        </div>

                        <div class="d-flex justify-content-end mb-5">
                            <a class="btn btn-warning mt-5 " id="add">Add Another Row</a>
                            <button class="btn btn-primary mt-5 ml-5" type="submit">Add Intern</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="./images/circles.png" alt="" class="img-fluid circle-img">
                </div>
            </div>

        </section>
    </main>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>