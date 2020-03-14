<?php
    include_once "animal.php";
    class Peixes extends Animal{
        public $tm_sobrevive;

        public function __construct($p, $cp, $h, $c, $e, $tms){
            parent::__construct($p, $cp, $h, $c, $e);
            $this->tm_sobrevive = $tms;
        }
    }

?>