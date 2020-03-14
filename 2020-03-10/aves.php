<?php
    include_once "animal.php";
    class Aves extends Animal{
        public $alt_max_voo;

        public function __construct($p, $cp, $h, $c, $e, $av){
            parent::__construct($p, $cp, $h, $c, $e);
            $this->alt_max_voo = $av;
        }
    }
?>