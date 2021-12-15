<html>
<head>
	<title>EAS PWEB E5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3>Data Nilai Kuliah</h3>

        <a href="/nilaikuliah"> Kembali</a><br>

        <form  action="/nilaikuliah/store" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-2">
                    NRP <br>
                    NilaiAngka <br>
                    SKS <br>
                </div>
                <div class="col-sm-1">
                    : <br>
                    : <br>
                    : <br>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="nrp" required="required"> <br/>
                    <input type="number" name="nilaiangka" required="required"> <br/>
                    <input type="number" name="sks" required="required"> <br/>
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-outline-primary">
        </form>
    </div>

</body>
