<?php

require 'partials/header.php';
?>

        <main>
            <section class="container mt-5">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h1 class="head">Send Airtime To Interns</h1>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table shadow-sm mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">NAME</th>
                                <th scope="col">TRACK</th>
                                <th scope="col">MOBILE NUMBER</th>
                                <th scope="col">NETWORK</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <form action="php/process.php" id="airtime-form" method="POST">
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
                                    <td><input type="number" class="amount-input" name="amount[]"></td>
                                    <input type="hidden" name="number[]" value="$intern->number">
                                    <input type="hidden" name="network[]" value="$intern->network">
                                    <td><a href="/php/delete-intern.php?number=$intern->number"><img src="./images/trash.svg" alt="" class="action"></a></td>
                                </tr>
    START;
                            }
                        ?>
                        </form>
                        </tbody>
                    </table>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12 d-flex justify-content-center">
                        <a class="btn btn-outline-primary mr-5" href="/add-intern.php">Add Intern</a>
                        <button class="btn btn-primary" onclick="$('#airtime-form').submit()">Send Airtime</button>
                    </div>
                </div>
            </section>
        </main>

        <script src="./js/jquery-3.4.1.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>

</html>