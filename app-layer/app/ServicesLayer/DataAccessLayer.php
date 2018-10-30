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

    public static function request($end_point, $token, $method, $url, $options = [])
    {
        $options["headers"]['TOKEN'] = $token;
        try {
            $client = new \GuzzleHttp\Client();
            $res = $client->request($method, $end_point . $url, $options);
            return $res->getBody()->getContents();
        } catch (\Exception $e) {
            return response()->json("Unauthorized", 401);
        }

    }

}