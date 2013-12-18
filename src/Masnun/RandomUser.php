<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */

namespace Masnun;
use Guzzle\Http\Client;

class RandomUser
{
    private static $guzzleClient = null;
    const URL = 'http://api.randomuser.me/0.2/';

    public function __construct()
    {
        throw new Exception("Use static method generate() instead");
    }

    public static function  generate($gender = null, $limit = 0)
    {
        if (!self::$guzzleClient) {
            self::$guzzleClient = new Client('http://api.randomuser.me/0.2/');
        }

        $url = "/";
        $params = array();
        if ($gender) {
            $params["gender"] = $gender;
        }

        if ($limit > 0) {
            $params["results"] = $limit;
        }

        if (count($params) > 0) {
            $url .= "?" . http_build_query($params);
        }

        $json = self::$guzzleClient->get($url)->send()->getBody();
        $response = json_decode($json);
        return $response->results;

    }
}