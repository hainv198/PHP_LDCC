<?php

class Category_Static {
    public static $username;

     function set_name($username) {
        Category_Static::$username = $username;
    }
    function get_name() {
        return Category_Static::$username;
    }
}