<?php
/**
 * Created by PhpStorm.
 * User: osmium
 * Date: 09/01/15
 * Time: 01:50 PM
 */
foreach (glob(PROJECT_DIR . "/include/*.inc") as $filename) {
    include_once $filename;
}