<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>\
    <h1>Array PHP</h1>

    <?php
        // --- tipe data array ---
        $angka = [5, 10, 2, 1, 6];
        $kotak = array('anjing', 'kurakura', 'koala', 'banteng');
        $nama = ['Hilman', 'Endy', 'Tiqa'];

        // print_r($kotak);
        // echo $nama[0];

        // --- metode array ---
        // array_unique, _reverse, shuffle, count, sort
        // print_r( array_reverse($kotak));
        sort($angka);
        print_r( $angka);

        // echo count($nama);
    ?>
    
</body>
</html>