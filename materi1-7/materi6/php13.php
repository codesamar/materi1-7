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
        // // --- tipe data array ---
        // $angka = [5, 10, 2, 1, 6];
        // $kotak = array('anjing', 'kurakura', 'koala', 'banteng');
        // $nama = ['Hilman', 'Endy', 'Tiqa'];

        // // print_r($kotak);
        // // echo $nama[0];

        // // --- metode array ---
        // // array_unique, _reverse, shuffle, count, sort
        // // print_r( array_reverse($kotak));
        // sort($angka);
        // print_r( $angka);

        // // echo count($nama);

        // --- Associative array ---
        // key => isi

        $data = array( "nama" => "hilman",
                       "umur" => 21,
                       "kerja" => "pengacara"
                );

        $data2 = array( "istri" => "belum ada",
                        "laptop" => "Chromebook"
                 );

        // print_r($data);
        // $data['nama'] = "Hilman Ramadhan";

        // echo "Nama adalah " . $data["nama"];

        // --- methode assosiatif array ---
        // array =_values, array_keys, array_merge

        // print_r( array_merge($data, $data2));

        // --- multi dimensi array ---
        $data = array(
            array("programmer", "21", "males"),
            array("designer", "24", "rajin"),
            array("manager", "34", "males banget")
        );

        // 00 01 02
        // 10 11 12
        // 20 21 22

        // print_r($data);

        $data [2][0] = "proyek manager";
        echo $data[2][0];

    ?>
    
</body>
</html>