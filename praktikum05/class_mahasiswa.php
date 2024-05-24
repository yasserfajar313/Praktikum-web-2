<?php

class mahasiswa 
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5){
            echo "cumlaude";
        } else {
            echo "you did a great job!";
        }
    }
}

$mahasiswa = new Mahasiswa("nuradawiyah", "432022718026", "lampung", "farmasi", "3.75");
echo "nama Lengkap :"$mahasiswa->namaMahasiwa;
echo "<br>";
echo "NIM : "$mahasiswa->nim;
echo "<br>";
echo "Domisili : "$mahasiswa->domisli;
echo "<br>";
echo "Prodi : "$mahasiswa->prodi;
echo "<br>";
echo "IPK : "$mahasiswa->ipk;
echo "<br>"
$mahasiswa->setPredikatIPK($mahasiswa->ipk);