<?php
    include_once "animal.php";
    class Mamiferos extends Animal{
        public $v_max;

        public function __construct($p, $cp, $h, $c, $e, $m){
            parent::__construct($p, $cp, $h, $c, $e);
            $this->v_max = $m;
        }
        
        /*public function __construct($p, $cp, $h, $c, $e, $m){
            $this->peso = $p;
            $this->comprimento = $cp;
            $this->altura = $h;
            $this->cor = $c;
            $this->especie = $e;
            $this->v_max = $m;
        }
        ou podia ser assim em all pgs de especies e sem construct no animal.php*/
    }
?>