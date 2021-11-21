<!DOCTYPE html>
<html>
    <head>
        <style>
        .descendants * {
            display: block;
            color: rgb(211, 71, 71);
            padding: 10px;
            margin: 20px;
            text-align: center;
        }
        </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $("div").find("span").css({
                            "color": "blue",
                            "border": "2px solid green",
                            "text-align": "right"

                        });
    });
    </script>
    </head>
<body>

<div class="descendants" style="width:700px;">div (current element)
    <h1>Judul Suatu Artikel (h1)</h1>
    <h2>Sub Judul Suatu Artikel (h2)</h2>
    <p>pada artikel ini kita akan menjelaskan mengenai Jqeury Traversing Descendant dimana div adalah (parent), dimana keturunannya disini akan
        dipanggil yaitu span dimana akan berbeda sendiri stylenya,yang dimana kalimat ini menggunakan (p).
        <span>Kalimat ini menggunakan function jquery traversing descendant dimana span merupakan keturunan/descendant dari
            div dan telah diatur dengan method find agar span ini memiliki style yang berbeda dengan keturunan div lainnya!</span>
      </p>

</div>

</body>
</html>
