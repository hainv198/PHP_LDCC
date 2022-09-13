<?php

class user {
    public $firstname;
    public $lastname;

    function info_user($firstname, $lastname) {
        $this -> firstname = $firstname;
        $this -> lastname = $lastname;
    }
}