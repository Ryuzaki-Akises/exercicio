<?php
    include_once "animal.php";
    class Peixes extends Animal{
        public $tm_sobrevive;

        public function __construct($tms, $p, $cp, $h, $c, $e){
            $this->tm_sobrevive = $tms;
            $this->peso = $p;
            $this->comprimento = $cp;
            $this->altura = $h;
            $this->cor = $c;
            $this->especie = $e;
        }
    }

?>