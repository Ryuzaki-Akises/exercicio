<?php
    include_once "animal.php";
    class Anfibios extends Animal{
        public $t_max_submerso;

        public function __construct($an, $p, $cp, $h, $c, $e){
            $this->t_max_submerso = $an;
            $this->peso = $p;
            $this->comprimento = $cp;
            $this->altura = $h;
            $this->cor = $c;
            $this->especie = $e;
        }
    }
?>