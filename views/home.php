<?php
/**
 * Created by PhpStorm.
 * User: osmium
 * Date: 12/01/15
 * Time: 10:26 AM
 */

function index() {
    global $twig;
    echo $twig->render('index.html', array('name' => 'Jose'));
}