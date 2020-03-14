<?php
    include_once "animal.php";
    class Repteis extends Animal{
        public $t_max_submerso;

        public function __construct($t, $p, $cp, $h, $c, $e){
            $this->t_max_submerso = $t;
            $this->peso = $p;
            $this->comprimento = $cp;
            $this->altura = $h;
            $this->cor = $c;
            $this->especie = $e;
        }
    }
?>