<?php
/**
 * Created by PhpStorm.
 * User: osmium
 * Date: 12/01/15
 * Time: 09:48 AM
 */

foreach (glob(PROJECT_DIR . "/views/*.php") as $filename) {
    include_once $filename;
}