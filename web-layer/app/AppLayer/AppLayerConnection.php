<?php
/**
 * Created by PhpStorm.
 * User: mahmoud
 * Date: 10/28/18
 * Time: 6:53 PM
 */

namespace App\AppLayer;


class AppLayerConnection
{


    public static function connect($method, $url)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request($method, $url);
        return json_decode($res->getBody()->getContents());
    }

}