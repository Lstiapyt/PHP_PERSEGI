<?php
    //aritmatika biasa
    $sisi_1 = 10;
    $hasil = $sisi_1 * $sisi_1;
    echo "Hasil dari luas persegi dengan sisi $sisi_1 adalah = $hasil";

    echo"<br>";
    //function
    function rumus_persegi($sisi_1)
    {
        $hasil = ($sisi_1 * $sisi_1);
        return $hasil;
    }

    $fungsi_persegi = rumus_persegi(30);
    echo "hasil dari luas persegi dengan sisi 30 menggunakan function dadalah  = $fungsi_persegi";

    echo"<br>";
    //class
    $sisi_1 = 10;
    class Rumus_matematika{
        function rumus_persegi($sisi_1)
        {
            $hasil = ($sisi_1 * $sisi_1);
            return $hasil;
        }
    }

    $persegi = new Rumus_matematika();
    echo"hasil dari luas persegi dengan sisi 5 menggunakan class dadalah = ";
    echo $persegi->rumus_persegi(5);

?>