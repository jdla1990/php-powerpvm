<?php
/**
 * Created by PhpStorm.
 * User: osmium
 * Date: 1/12/15
 * Time: 7:08 PM
 */

class Post
{
    var $db;

    function __construct(){
        global $database;
        $this->db = $database;
    }

    function get(){
        $this->db->select('');
    }
}