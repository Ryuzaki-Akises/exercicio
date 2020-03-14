<?php
    include_once "animal.php";
    class Repteis extends Animal{
        public $t_max_submerso;

        public function __construct($p, $cp, $h, $c, $e, $t){
            parent::__construct($p, $cp, $h, $c, $e);
            $this->t_max_submerso = $t;
        }
    }
?>