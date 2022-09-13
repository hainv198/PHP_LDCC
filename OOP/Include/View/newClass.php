<?php

class Employee {
    public $public = "truy cap o bat ki dau";
    private $private = "truy cap du lieu o trong class";
    protected $protected = "truy cap du lieu o trong class va class ke thua";

    function get_private() {
        return $this -> private;
    }

    function get_protected() {
        return $this -> protected;
    }
}

class Products extends Employee {
    function extends_protected() {
        return $this -> get_protected();
    }
}

?>