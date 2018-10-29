<?php
/**
 * Created by PhpStorm.
 * User: mahmoud
 * Date: 10/28/18
 * Time: 6:08 PM
 */

namespace App\ServicesLayer;

class DataAccessLayer
{

    public static function request($method, $url, $options = [])
    {
        $options["headers"]['TOKEN'] = EVENTS_TOKEN;
        $client = new \GuzzleHttp\Client();
        $res = $client->request($method, EVENTS_KEY_CONNECTION . $url, $options);
        return $res->getBody()->getContents();
    }

}