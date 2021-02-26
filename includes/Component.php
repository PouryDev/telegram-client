<?php
namespace PK;

use JetBrains\PhpStorm\ArrayShape;
use PK\components\Chat;

class Component {
    public function __construct($array)
    {
        foreach ($array as $key => $item) {
            $key = MainLibrary::dashesToCamelCase($key);
            if (!is_array($item))
                $this->{$key} = $item;
            else {
                $this->{$key} = (object) $item;
            }
        }
    }
}