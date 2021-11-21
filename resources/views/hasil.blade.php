<?php declare(strict_types=1); // strict requirement ?>'
<html>
    <head>
        <title>Web Hitung Luas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
                h2 {
                padding-top: 30px;
                padding-bottom: 30px;
                text-align: center;
                text-decoration: underline;
            }

        </style>
    </head>
    <body>

        <div class="container">
            <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6" style="border : solid;">
                <h2>Luas persegi panjang dengan data :</h2>
                <div class="row">
                    <div class="col-lg-3">
                        Panjang
                    </div>
                    <div class="col-lg-1">
                        :
                    </div>
                    <div class="col-lg-2">
                        <?php echo $_POST["panjang"];?>
                    </div>
                    <div class="col-lg-6">
                        cm
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        Lebar
                    </div>
                    <div class="col-lg-1">
                        :
                    </div>
                    <div class="col-lg-2">
                        <?php echo $_POST["lebar"] ; ?>
                    </div>
                    <div class="col-lg-6">
                        cm
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        Luas
                    </div>
                    <div class="col-lg-1">
                        :
                    </div>
                    <div class="col-lg-2">
                        <?php
                        $panjang = $_POST["panjang"];
                        $lebar = $_POST["lebar"];
                        function luas_persegi($panjang, $lebar) {
                            return $panjang * $lebar;
                        }
                        $luaspersegi = luas_persegi($panjang, $lebar)
                        ?>
                        <?php echo $luaspersegi?>
                    </div>
                    <div class="col-lg-6">
                        cm
                    </div>
                </div>

            </div>
            <div class="col-lg-3"></div>
            </div>
        </div>
    </body>

</html>
