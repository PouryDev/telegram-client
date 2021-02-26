<?php
namespace PK\components;
/**
 * Class VideoNote
 * @package PK\components
 * @property PhotoSize thumb
 */
class VideoNote {
    public string $file_unique_id,
         $file_id;
    public int $duration,
        $file_size,
        $length;
    public object $thumb;
}