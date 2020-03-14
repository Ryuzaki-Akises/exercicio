<?php
    include_once "animal.php";
    class Anfibios extends Animal{
        public $t_max_submerso;

        public function __construct($p, $cp, $h, $c, $e, $an){
            parent::__construct($p, $cp, $h, $c, $e);
            $this->t_max_submerso = $an;
        }
    }
?>