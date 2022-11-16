<?php
    class Mahasiswa {
        public $nim;
        public $nama;
        public $thn_angkatan;
        public $prodi;
        public $ipk;

        public function __construct($nim,$nama,$prodi,$thn_angkatan,$ipk) {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->prodi = $prodi;
            $this->thn_angkatan = $thn_angkatan;
            $this->ipk = $ipk; 
        }

        function predikat_ipk() {
            if ($this->ipk < 2.0) return "Cukup";
            elseif ($this->ipk < 3.0) return "Baik";
            elseif ($this->ipk < 3.75) return "Memuaskan";
            elseif ($this->ipk <= 4) return "Cumlaude";
        }

    }
?>