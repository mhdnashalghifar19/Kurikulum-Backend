<?php

class Segitiga
{
    public function __construct($alas, $tinggi)
    {
        $luas = 0.5 * $alas * $tinggi;

        echo "<script>alert('Luas Segitiga = $luas !');</script>";
    }
}

