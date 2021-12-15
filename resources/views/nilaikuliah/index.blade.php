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
        <h3>Tabel Nilai Kuliah EAS PWEB 2021</h3>

        <a href="/nilaikuliah/tambah"> + Tambah Nilai Kuliah Baru</a><br>

        <table class="table table-success table-striped">
            <tr style="text-align: center">
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
            @foreach ($nilaikuliah as $nk)
            <tr style="text-align: center">
                <td>{{ $nk->ID }}</td>
                <td>{{ $nk->NRP }}</td>
                <td>{{ $nk->NilaiAngka }}</td>
                <td>{{ $nk->SKS }}</td>
                <td>
                        <?php
                            if($nk->NilaiAngka <=40){
                                echo "D";
                            } elseif ($nk->NilaiAngka >=41 && $nk->NilaiAngka <=60) {
                                echo "C";
                            } elseif ($nk->NilaiAngka >=61 && $nk->NilaiAngka <=80) {
                                echo "B";
                            } else{
                                echo "A";
                            }
                            ?>


                </td>
                <td>
                    {{ number_format($nk->NilaiAngka * $nk->SKS, 0, ',', '.') }}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
