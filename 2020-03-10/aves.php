<?php
    include_once "animal.php";
    class Aves extends Animal{
        public $alt_max_voo;

        public function __construct($av, $p, $cp, $h, $c, $e){
            $this->alt_max_voo = $av;
            $this->peso = $p;
            $this->comprimento = $cp;
            $this->altura = $h;
            $this->cor = $c;
            $this->especie = $e;
        }
    }
?>