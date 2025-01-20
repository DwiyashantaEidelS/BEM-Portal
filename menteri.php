<?php

include "pengurusBEM.php";

class menteri extends pengurusBEM {
  
  public function __construct($nama){
     $this->nama = $nama;
     }

  function setJabatan($jabatan) { // method
     $this->jabatan = $jabatan;
  }

  public function getJabatan() {
     echo "$this->jabatan";
  }
}

// $pengurus1 = new menteri('Eidel Safira');
// $pengurus1->setNIM('225150707111234');
// $pengurus1->setJabatan('Menteri Komunikasi dan Informasi');
// echo "<br><br>";
// $pengurus1->getNama();
// echo "<br>";
// $pengurus1->getJabatan();
// echo "<br>";
// $pengurus1->getNIM();