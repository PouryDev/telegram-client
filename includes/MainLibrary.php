<?php
namespace PK;

class MainLibrary {
    public static function sendRequest(string $url)
    {
        return json_decode(file_get_contents($url));
    }

    public static function dashesToCamelCase($string, $capitalizeFirstCharacter = false)
    {

        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));

        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }

        return $str;
    }
}