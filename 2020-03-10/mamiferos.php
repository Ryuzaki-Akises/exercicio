<?php
    include_once "animal.php";
    class Mamiferos extends Animal{
        public $v_max;

        public function __construct($m, $p, $cp, $h, $c, $e){
            $this->v_max = $m;
            $this->peso = $p;
            $this->comprimento = $cp;
            $this->altura = $h;
            $this->cor = $c;
            $this->especie = $e;
        }
    }
?>