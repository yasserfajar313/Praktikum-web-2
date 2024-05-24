<?php

class kendaraan 
{
    public $nama;
    public $warna;
    public $tempatoperasi;

    function __construct($nama, $warna, $tempatoperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatoperasi = $tempatoperasi;
    }
}

$kendaraan = new kendaraan("mobil", "merah", "darat");
echo $kendaraan->nama;
echo $kendaraan->warna;
echo $kendaraan->tempatoperasi;

?>