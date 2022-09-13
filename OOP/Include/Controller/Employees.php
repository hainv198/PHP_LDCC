<?php

class Employees {
    public $users;
    public $role;

    function __construct($users, $role) {
        $this ->users = $users;
        $this -> role = $role;
    }

 /*   function __destruct ($user, $role) {
        $this -> users = $user;
        $this -> role =$role;
    }*/


}