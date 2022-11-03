<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Loop PHP</h1>

    <?php
        // --- Pengulangan ---
        //for(variabelawal(mulai); batas(syarat); perubahan)

        $hewan = ['anjing', 'babi', 'cicak', 'domba'];

        for($i = 0; $i < count($hewan); $i++){
            echo "-----";
            echo  $hewan[$i];
            echo "----- <br>";
        }
    ?>
</body>
</html>