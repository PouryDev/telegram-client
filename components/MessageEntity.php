<?php
namespace PK\components;

/**
 * Class MessageEntity
 * @package PK\components
 * @property User user
 */

class MessageEntity {
    public string $language,
        $url,
        $type;
    public int $length,
        $offset;
    public object $user;
}