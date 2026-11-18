<?php

class Segitiga {
    private $alas, $tinggi;
    function setAlas($a){
        $this->alas = $a;
    }
    function setTinggi($t){
        $this->tinggi = $t;
    }
    function getAlas(){
        return $this->alas;
    }
    function getTinggi(){
        return $this->tinggi;
    }
    function luas(){
        return ($this->alas * $this->tinggi)/2;
    }
}


class SegitigaSikuSiku extends Segitiga {

    function sisiMiring(){
        return sqrt(pow($this->getAlas(), 2) + pow($this->getTinggi(), 2));
    }
    function keliling(){
        return $this->getAlas() + $this->getTinggi() + $this->sisiMiring();
    }
}


class SegitigaSamaKaki extends Segitiga {
    private $kaki;
   
    function setSisi($alas, $kaki){
        $this->kaki = $kaki;
        $this->setAlas($alas);
        $this->setTinggi(sqrt(pow($kaki, 2) - pow($alas / 2, 2)));
    }
    function getKaki(){
        return $this->kaki;
    }
    function keliling(){
        return $this->getAlas() + (2 * $this->kaki);
    }
}


class SegitigaSamaSisi extends Segitiga {
    private $sisi;
    
    function setSisi($s){
        $this->sisi = $s;
        $this->setAlas($s);
        $this->setTinggi(($s * sqrt(3)) / 2);
    }
    function getSisi(){
        return $this->sisi;
    }
    function keliling(){
        return 3 * $this->sisi;
    }
}




$siku = new SegitigaSikuSiku();
$siku->setAlas(3);
$siku->setTinggi(4);

echo "Tipe Segitiga : " . get_class($siku) . "<br/>";
echo "Alas segitiga adalah : " . $siku->getAlas() . "<br/>";
echo "Tinggi segitiga adalah : " . $siku->getTinggi() . "<br/>";
echo "Sisi miring adalah : " . $siku->sisiMiring() . "<br/>";
echo "Luas segitiga adalah : " . $siku->luas() . "<br/>";
echo "Keliling segitiga adalah : " . $siku->keliling() . "<br/>";

echo "<br/><br/>";


$kaki = new SegitigaSamaKaki();
$kaki->setSisi(6, 5);

echo "Tipe Segitiga : " . get_class($kaki) . "<br/>";
echo "Alas segitiga adalah : " . $kaki->getAlas() . "<br/>";
echo "Kaki segitiga adalah : " . $kaki->getKaki() . "<br/>";
echo "Tinggi segitiga adalah : " . $kaki->getTinggi() . "<br/>";
echo "Luas segitiga adalah : " . $kaki->luas() . "<br/>";
echo "Keliling segitiga adalah : " . $kaki->keliling() . "<br/>";

echo "<br/><br/>";


$sisi = new SegitigaSamaSisi();
$sisi->setSisi(6);

echo "Tipe Segitiga : " . get_class($sisi) . "<br/>";
echo "Sisi segitiga adalah : " . $sisi->getSisi() . "<br/>";
echo "Tinggi segitiga adalah : " . round($sisi->getTinggi(), 2) . "<br/>";
echo "Luas segitiga adalah : " . round($sisi->luas(), 2) . "<br/>";
echo "Keliling segitiga adalah : " . $sisi->keliling() . "<br/>";
?>