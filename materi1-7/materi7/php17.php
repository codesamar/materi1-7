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

        $hewan = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];

        // for($i = 0; $i < count($hewan) -1; $i++){
        //     echo "-----";
        //     echo  $hewan[$i];
        //     echo "----- <br>";
        // }

        // ---- Foreach ----
        // foreach($hewan as $h){
        //     echo "-------";
        //     echo $h;
        //     echo "------- <br>";
        // }

        // $data = [ 'nama' => 'hilman',
        //           'umur' => 24, 
        //           'sifat'=> 'malas'];

        // foreach($data as $key => $value){
        //     echo $value . "<br>";
        // }

        // ---- while & do while ---
        // while(syarat)

        $i = 0;

        // while( $i < count($hewan) ){
        //     echo $hewan[$i]. "<br>";
        //     $i++;
        // }

        do{
            echo "----";
            echo $hewan[$i]. "<br>";
            $i++;
        }while( $i < count($hewan));

    ?>
</body>
</html>