<?php

//$umur = 19;
//$bts = array("jk", "taehyung", "suga");


class mobil {
    public $warna;
    public $harga;
    public $model;
    
    
    public function __construct($warna, $harga, $model){
        $this->warna = $warna;
        $this->harga = $harga;
        $this->model = $model;

    }

    public function showMobil(){
        return 
        "model $this->model
        <br> 
        Harga $this->harga
        <br>
        Warna $this->warna
        <br>";

    }
   
}

$mobil = new Mobil("merah", "200.000.000", "toyota");
print $mobil->showMobil();




?>