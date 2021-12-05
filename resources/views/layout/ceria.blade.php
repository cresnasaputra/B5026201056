<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
            .footer {
              position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              background-color:#111;
              color: #f1f1f1;
              text-align: center;
            }

            .header {
                background-color: #111;
                color: #f1f1f1;
                text-align: right;
                padding: 20px;
                width: 100%;
            }
            .sidenav {
              height: 100%;
              width: 160px;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              padding-top: 20px;
            }

            .sidenav a {
              padding: 6px 8px 6px 16px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
            }

            .sidenav a:hover {
              color: #f1f1f1;
            }
            .main {
            margin-left: 160px; /* Same as the width of the sidenav */
            font-size: 20px; /* Increased text to enable scrolling */
            padding: 0px 10px;
            }

            @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }

        </style>
</head>
<body>
<div class="header">
   <div class="row">
       <div class="col-xl-4">
        <img src="" alt="Foto Cresna">
       </div>
       <div class="col-xl-8">
           <p>I Dewa Gede Cresna Saputra<br>
                5026201056
            </p>
       </div>
   </div>
</div>

<div class="sidenav">
  <a href="/pegawai">Pegawai</a>
  <a href="/tugas">Tugas</a>
  <a href="/absen">Absen</a>
</div>

<div class="main">
@section('isikonten')
@show
</div>

<div class="footer">
    <p>Hak Cipta Oleh I Dewa Gede Cresna Saputra - 5026201056</p>
  </div>

</body>
</html>
