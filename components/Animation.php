<?php
namespace PK\components;
/**
 * Class Animation
 * @property PhotoSize thumb
 * @package PK\components
 */

class Animation {
    public string $file_name,
        $mime_type,
        $file_unique_id,
        $file_id;
    public int $height,
        $duration,
        $file_size,
        $width;
    public object $thumb;
}