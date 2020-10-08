<?php

class Lingkaran
{
    public function __construct($jari2)
    {
        $hasil = 22/7 * ($jari2 * $jari2);

        echo "<script>alert('Luas Lingkaran = $hasil !');</script>";

    }
}