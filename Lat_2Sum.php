<html>
    <head>
        <title>Variabel</title>
    </head>
    <body>
        <?php
        //Penulisan array dapat dibaut seperti berikut
        $nama[] = "MMMMAnies";
        $nama[] = "Praroro";
        $nama[] = "Bang_Ganj";

        echo $nama[1]." ".$nama[2]." ".$nama[0];
        echo "<br>";
        //menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "Jumlah elemen array = ".$jum_array;
        ?>
    </body>
</html>