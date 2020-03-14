<?php
    class Animal{
        public $peso;
        public $comprimento;
        public $altura;
        public $cor;
        public $especie;

        public function __construct($p, $cp, $h, $c, $e){
            $this->peso = $p;
            $this->comprimento = $cp;
            $this->altura = $h;
            $this->cor = $c;
            $this->especie = $e;
        }
    }
?>