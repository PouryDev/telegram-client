<?php
namespace PK\components;
/**
 * Class Video
 * @package PK\components
 * @property PhotoSize thumb
 */
class Video {
    public string $file_unique_id,
        $file_name,
        $mime_type,
        $file_id;
    public int $height,
        $duration,
        $file_size,
        $width;
    public object $thumb;
}