<?php

    class Aritmatika {
        private $angkaSatu = "10";
        protected $angkaDua = "5";
        public $angkaTiga = "3";

        public function kali(){
            echo " Operasi Perkalian Dari 10 x 5 = ", 
            $this -> angkaSatu * $this -> angkaDua;
        }

        public function kurang(){
            echo " Operasi Pengurangan Dari 10 - 5 = ", 
            $this -> angkaSatu - $this -> angkaDua;
        }

        public function bagi(){
            echo " Operasi Pembagian Dari 10 / 5 = ", 
            $this -> angkaSatu / $this -> angkaDua;
        }

        public function modulus(){
            echo " Operasi Modulus Dari 10 % 5 = ", 
            $this -> angkaSatu % $this -> angkaDua;
        }

        public function tambah(){
            echo " Operasi Penjumlahan Dari 10 + 5  = ", 
            $this -> angkaSatu + $this -> angkaDua;
        }
    }

    $operasi = new Aritmatika ();
    echo "Hasilnyaa Yaaaa <br>";
    echo " = <br>";
    echo $operasi -> kali(), "<br>";
    echo $operasi -> kurang(), "<br>";
    echo $operasi -> bagi(), "<br>";
    echo $operasi -> modulus(), "<br>";
    echo $operasi -> tambah();

?>