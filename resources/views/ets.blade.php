<html>
    <head>
        <title>ETS PWEB B Cresna 5026201056</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            body {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

            }

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

            input {
                width: 100%;
            }

            select {
                width: 100%;
            }

            button {
                width: 70%;
            }

            h2 {
                text-align: center;
                color: black;
                padding-top: 20px;
                padding-bottom: 20px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">

                </div>


                <div class="col-lg-8" style="border-style: solid;">
                    <div style="padding-top: 20px;">
                        I Dewa Gede Cresna Saputra<br>
                        Cresna<br>
                        5026201056<br>
                    </div>

                    <div>
                        <h2>Form Input Data Barang</h2>
                    </div>
                    <div style="padding-top: 20px; padding-bottom: 20px;">
                        <form action="https://my.its.ac.id" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-sm-2"></div>

                                <div class="col-sm-8">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="namabarang">Nama Barang</label>
                                            </div>
                                            <div class="col-sm-1">
                                                :
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" id="namabarang" name="namabarang" minlength="10" required>
                                                <div class="invalid-feedback">Required and must be of length 10 or more</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="harga">Harga</label>
                                            </div>
                                            <div class="col-sm-1">
                                                :
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="number" id="harga" name="harga" min="5000" required>
                                                <div class="invalid-feedback">Required and minimum price is 5000</div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="jenisbarang">Jenis Barang</label>
                                            </div>
                                            <div class="col-sm-1">
                                                :
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="costum-select" id="jenis barang" name="jenisbarang"   required>
                                                    <option value="" disabled selected>Pilih jenis barang</option>
                                                    <option value="makanan">Makanan</option>
                                                    <option value="minuman">Minuman</option>
                                                    <option value="nonmamin">Non Mamin</option>
                                                </select>
                                                <div class="invalid-feedback">Required</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group" style="padding-bottom: 20px;">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="kodebarcode">Kode Barcode</label>
                                            </div>
                                            <div class="col-sm-1">
                                                :
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="number" id="kodebarcode" name="kodebarcode" minlength="10" required>
                                                <div class="invalid-feedback">Required and must be of length 10 or more</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                           <center><button type="submit" class="btn btn-outline-info">Submit</button></center>
                                        </div>
                                        <div class="col-sm-6">
                                            <center><button type="reset" value="Reset" class="btn btn-secondary">Reset</button></center>
                                        </div>

                                    </div>

                                </div>


                                <div class="col-sm-2"></div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-lg-2">

                </div>
            </div>
        </div>

        <script>
            // Disable form submissions if there are invalid fields
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
            </script>

    </body>
</html>
