<?php
/**
 * Created by PhpStorm.
 * User: JoseD
 * Date: 07/01/2015
 * Time: 2:17
 */

if (!defined("send_data")) {
    /*
     * $data es un array de los datos a enviar
     * return el json
     */
    function send_data($data)
    {
        $data_string = json_encode($data);
        $result = file_get_contents('http://api.local/rest/users', null, stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json' . "\r\n" . 'Content-Length: ' . strlen($data_string) . "\r\n",
                'content' => $data_string,
            ),
        )));
        return json_decode($result);
    }

}

