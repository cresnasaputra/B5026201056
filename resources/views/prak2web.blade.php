<html>
    <head>
        <title>Praktikum 2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            input {
                width: 95%;
            }

            textarea {
                width: 95%;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>


                <div class="col-lg-6" style="border-style: solid;">
                    <center><h1>Form Registration</h1></center>

                    <form action="https://my.its.ac.id" class="needs-validation" novalidate>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="userid">Username</label>
                                </div>
                                <div class="col-sm-10">:
                                    <input type="text" id="userid" name="userid" minlength="5" maxlength="12" required>
                                    <div class="invalid-feedback">Required and must be of length 5 to 12</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col-sm-10">:
                                    <input type="password" id="password" name="password" minlength="7" maxlength="12" required>
                                    <div class="invalid-feedback">Required and must be of length 7 to 12</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-sm-10">:
                                    <input type="text" id="name" name="name" pattern="[a-zA-Z\s]+" required>
                                    <div class="invalid-feedback">Required and alphabet only</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="address">Address</label>
                                </div>
                                <div class="col-sm-10">:
                                    <input type="text" id="address" name="address">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="country">Country</label>
                                </div>
                                <div class="col-sm-10">:
                                    <select id="country" name="country" required>
                                        <option value="" disabled selected>Select Country</option>
                                        <option value="indonesia">Indonesia</option>
                                        <option value="singapore">Singapore</option>
                                        <option value="malaysia">Malaysia</option>
                                        <option value="thailand">Thailand</option>
                                    </select>
                                    <div class="invalid-feedback">Required</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="zipcode">Zip Code</label>
                                </div>
                                <div class="col-sm-10">:
                                    <input type="number" id="zipcode" name="zipcode" required>
                                    <div class="invalid-feedback">Required and must be numeric only</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-sm-10">:
                                    <input type="email "id="email" name="email" required>
                                    <div class="invalid-feedback">Required and must be valid email</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="sex">Sex</label>
                                </div>
                                <div class="col-sm-10">:
                                    <div class="form-check-inline">
                                        <div class="form-check-inline">
                                          <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="sex" style="width: fit-content;">Male
                                          </label>
                                        </div>
                                        <div class="form-check-inline">
                                          <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="sex" style="width: fit-content;">Female
                                          </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    Language
                                </div>
                                <div class="col-sm-10">:
                                    <div class="checkbox-group required">
                                        <input type="checkbox" name="english" style="width: min-content;">
                                        <label for="english">Englih</label>
                                        <input type="checkbox" name="nonenglish" style="width: min-content;">
                                        <label for="nonenglish">NonEnglish</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-2">
                                    About
                                </div>
                                <div class="col-sm-10">:
                                    <textarea name="about"></textarea>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-outline-dark">
                    </form>

                </div>


                <div class="col-lg-3"></div>
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
