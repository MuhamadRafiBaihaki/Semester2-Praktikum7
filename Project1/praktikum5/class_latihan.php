<?php
    class Fruit{
        public $nama;
        public $color;
        public function __construct($nama, $color){
            $this->nama = $nama;
            $this->color = $color;
        }

        protected function intro(){
            echo "<br>buahnya adalah ".$this->nama." dan warnanya adalah ".$this->color;
        }

    }

    class strawberry extends Fruit{
        public $weight;
        public function __construct($nama, $color, $weight){
            $this->nama = $nama;
            $this->color = $color;
            $this->weight = $weight;
        }
        public function message(){
            echo "<br>berat buahnya adalah ".$this->weight;
            $this->intro();
        }

        public function tes($nama="nurul"){
            echo "Selamat datang $nama";
        }

    }

    $strawberry = new strawberry ("strawberry", "red", "80");
    $strawberry->message();
    echo "<br>";
    $strawberry->tes();
    // $strawberry->intro();
    

    
?>  