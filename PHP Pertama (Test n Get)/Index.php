<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pertama</title>
</head>
<body>
    <?php
        // PHPinfo();

        // Print
        print "<h2>Belajar PHP</h2>";
        print "Hello world <br>";
        print "Sedang mempelajari PHP";
        echo "<br>"

        // Variabel
        $txt = "Hello world";
        $x = 5;
        $y = 10.5;
        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br><br>";

        // Operator pada string
        $txt1 = "Hello world";
        $txt2 = "What a nice day";
        echo $txt1." ".$txt2;
        echo "<br> Panjang $txt1: ";
        echo strlen($txt1)." sama dengan ".strlen("Hello world");
        echo "<br>Kata world, ada di posisi ke-";
        echo strpos("Hello world", "world");
        echo "<br><br>";

        // Operator aritmatika
        $x = 10;
        $y = 6;
        $tambah = $x+$y;
        echo $x."+".$y." = ".$tambah;
        echo "<br><br>";

        // Operator assignment
        $x = 10;
        echo "nilai x = $x";
        $x += 100;
        echo "<br>nilai x = $x";
        echo "<br><br>";

        // Operator komparasi
        $x = 100;
        $y = "100";
        // Bernilai true karena nilainya sama
        echo "<br> x == y: ";
        var_dump($x==$y)
        // Bernilai true karena nilainya beda
        echo "<br> x === y: ";
        var_dump($x===$y)

        // echo itu cetak biasa
        // var_dump itu cetak tapi mengetahui informasi pada suatu nilai variabel

        // Operator logika
        $x = 100;
        $y = 50;
        if($x == 100 and $y == 50){
            echo "Benar x=$x dan y=$y";
        }
        echo "<br><br>";

        // If
        $d = date("D");
        if($d=="Mon") echo "Hari Senin";
        elseif($d=="Sun") echo "Hari Minggu";
        else{
            echo "Bukan hari Minggu / Senin";
            echo "<br>Bye"
        }

        // Looping while do
        $i = 1;
        while($i<=5){
            echo "Bilangan: $i <br>";
            $i++;
        }
        echo "<br><br>";

        // Looping do while
        $i = 1;
        do{
            $i++;
            echo "Bilangan: $i <br>";
        }while($i<=5)
        echo "<br><br>";

        // For each
        $x = array("Mangga", "Jeruk", "Apel");
        foreach($x as $value){
            echo $value."<br>";
        }
    ?>
</body>
</html>