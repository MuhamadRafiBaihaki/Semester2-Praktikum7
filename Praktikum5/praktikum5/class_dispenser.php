<?php
    class Dispenser{
        protected $volume = 0 ;
        protected $hargaSegelas;
        private $volumeGelas;
        public $namaMinuman;

        public function __construct($nama){
            $this->namaMinuman = $nama;
        }

        public function isi($vol){
            $this->volume = $this->volume + $vol;
            
        }

        public function cetakDurian(){
            echo "Nama minuman : ".$this->namaMinuman;
            echo "<br>Volume air(ml) : ".$this->volume;
            $this->hargaSegelas = 15000;
            echo "<br>Harga : ".$this->hargaSegelas;
        }

        public function cetakAlpukat(){
            echo "Nama minuman : ".$this->namaMinuman;
            echo "<br>Volume air(ml) : ".$this->volume;
            $this->hargaSegelas = 12000;
            echo "<br>Harga : ".$this->hargaSegelas;
        }

        public function cetakJambu(){
            echo "Nama minuman : ".$this->namaMinuman;
            echo "<br>Volume air(ml) : ".$this->volume;
            $this->hargaSegelas = 9000;
            echo "<br>Harga : ".$this->hargaSegelas;
        }

        public function ambilDurian(){
            echo "Nama minuman : ".$this->namaMinuman;
            echo "<br>Volume air(ml) : ".$this->volume;
            $this->hargaSegelas = 15000;
        }

        public function ambilAlpukat(){
            echo "Nama minuman : ".$this->namaMinuman;
            echo "<br>Volume air(ml) : ".$this->volume;
            $this->hargaSegelas = 12000;
        }

        public function ambilJambu(){
            echo "Nama minuman : ".$this->namaMinuman;
            echo "<br>Volume air(ml) : ".$this->volume;
            $this->hargaSegelas = 9000;
        }
    }