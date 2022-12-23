<?php
class opoiki
{

    private $panjang; //alas di segitiga 
    private $lebar; //ini tinggi segitiga
    private $sisi; //ini untuk sisi persegi / diameter di lingkaran


    function __construct($panjang, $lebar, $sisi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->sisi = $sisi;
    }

    function seter($panjang, $lebar, $sisi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->sisi = $sisi;
    }

    function panjang()
    {
        return $this->panjang;
    }
    function lebar()
    {
        return $this->lebar;
    }
    function sisi()
    {
        return $this->sisi;
    }

    function segitiga()
    {
        $a = $this->panjang;
        $t = $this->lebar;
        $luas = $a * $t / 2;
        return $luas;
    }
    function persegi()
    {
        $s = $this->sisi;
        $luas = $s * $s;
        return $luas;
    }
    function lingkaran()
    {
        $r = $this->sisi / 2;
        $luas = pi() * $r * $r;
        return $luas;
    }
}

$hilih = new opoiki(2, 3, 14);
echo "<br>panjang / alas segitiga = " . $hilih->panjang();
echo "<br>lebar / tinggi segitiga = " . $hilih->lebar();
echo "<br>sisi persegi / diameter lingkaran = " . $hilih->sisi();
echo "<br>Luas wajik = " . $hilih->segitiga();
echo "<br>Luas kotak = " . $hilih->persegi();
echo "<br>Luas bunder = " . $hilih->lingkaran();

echo "<br>----------------------------";

$hilih->seter(4, 5, 9);
echo "<br>panjang / alas segitiga = " . $hilih->panjang();
echo "<br>lebar / tinggi segitiga = " . $hilih->lebar();
echo "<br>sisi persegi / diameter lingkaran = " . $hilih->sisi();
echo "<br>Luas wajik = " . $hilih->segitiga();
echo "<br>Luas kotak = " . $hilih->persegi();
echo "<br>Luas bunder = " . $hilih->lingkaran();
