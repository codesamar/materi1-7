<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
        /*
        berapa baris
        komentar
        terserah teman2
        */

        // variabe pada php
        // tipe data string
        $nama = "Sekolah koding";
        $nama2 = "Bermain koding";

        echo "selamat datang di $nama <br>";

        // tipe data angka/number
        // 1. Integer 2. Float

        $angka = 1000;
        $angka2 = 3;
        $angka3 = 2.64;

        // ----operator aritmatik----
        // + - * / % ++ --

        // nama = nilai
        // $angka = $angka + $angka2;
        // $angka *= $angka2;

        /// ----- Math method -----
        // math method
        // round rand(min,max) max min
        // echo "Angka hari ini adalah ". min($angka3, $angka, $angka2)

        // ---- string method ----
        // strlen && str_word_count
        // str_replace(find,replace,string)
        // str_repeat(text, times); str_shuffle(text)

        $text = "Hai semuanya di sini";
        echo str_repeat( str_replace( "Hai", "Hallo" ,$text), 10);

    ?>
    
</body>
</html>