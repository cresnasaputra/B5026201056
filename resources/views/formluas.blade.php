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
            /* untuk menghilangkan kursor di form tipe number (tidak berlaku di mozila)*/
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

            /* untuk menghilangkan kursor di form tipe number (mozilla firefox) */
            input[type=number] {
            -moz-appearance: textfield;
            }

            h1 {
                padding-top: 30px;
                padding-bottom: 30px;
                font-size: 25px;
                text-align: center;
            }

            input {
                width: 80%;
            }

            p {
                text-align: left;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" style="border: solid;">
                    <h1>Penghitung Luas Persegi Panjang</h1>
                    <form action="hasilpenjumlahan" method="post" name="luaspersegipanjang">
                    @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="panjang">Panjang</label>
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-5">
                                    <input type="number" id="panjang" name="panjang">
                                </div>
                                <div class="col-sm-2">
                                    <p>cm</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="lelbar">Lebar</label>
                                </div>
                                <div class="col-sm-1">
                                    :
                                </div>
                                <div class="col-sm-5">
                                    <input type="number" id="lebar" name="lebar">
                                </div>
                                <div class="col-sm-2">
                                    <p>cm</p>
                                </div>
                            </div>
                        </div>

                        <center><button type="submit" class="btn btn-outline-info">Submit</button></center>


                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </body>
</html>
