<?php

class HewanMamalia
{
    public $warna;
    public $namahewan;
    public $habitat;

    function makan()
    {
        return "Mamalia makan";
    }

    function minum()
    {
        return "Mamalia minum";
    }

    function menyusui()
    {
        return "Mamalia menyusui";
    } 
}

$mamalia = new HewanMamalia();
$mamalia ->namahewan ="lumba-lumba";
echo $mamalia ->namahewan;
echo "<br>";
echo $mamalia ->warna ="abu-abu";
echo "<br>";
echo $mamalia ->habitat ="laut";
echo "<br>";
echo $mamalia ->makan();
echo "<br>";
echo $mamalia ->minum();
echo "<br>";
echo $mamalia ->menyusui();




?>