<?php
class pengurusBEM
{
   public $nama;
   public $nim;
   public $angkatan;
   private $jabatan;
   private $foto;
   public function setNama($nama)
   {
      $this->nama = $nama;
   }
   public function getNama()
   {
      echo "$this->nama";
   }
   public function setJabatan($jabatan)
   {
      $this->jabatan = $jabatan;
   }
   public function getJabatan()
   {
      echo "$this->jabatan";
   }
   public function setAngkatan($angkatan)
   {
      $this->angkatan = $angkatan;
   }
   public function getAngkatan()
   {
      echo "$this->angkatan";
   }
   public function setNIM($nim)
   {
      $this->nim = $nim;
   }
   public function getNIM()
   {
      echo "$this->nim";
   }
   public function setFoto($foto)
   {
      $this->foto = $foto;
   }
   public function getFoto()
   {
      echo "$this->foto";
   }
}

// $pengurus1 = new pengurusBEM;
// $pengurus1->setNama('Dwiyashanta');
// $pengurus1->setNIM('225150707111003');
// $pengurus1->setAngkatan('2022');
// $pengurus1->setJabatan('Staf Kominfo');
// $pengurus1->setFoto(' - ');

// echo "Nama: ";
// $pengurus1->getNama();
// echo "<br>NIM: ";
// $pengurus1->getNIM();
// echo "<br>Angkatan: ";
// $pengurus1->getAngkatan();
// echo "<br>Jabatan: ";
// $pengurus1->getJabatan();
// echo "<br>Foto: ";
// $pengurus1->getFoto();

?>