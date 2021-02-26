<?php
namespace PK\components;
/**
 * Class Audio
 * @package PK\components
 * @property PhotoSize thumb
 */
class Audio {
    public string $file_ame,
        $mime_type,
        $file_unique_d,
        $performer,
        $title,
        $fileId;
    public int $file_size,
        $duration;
    public object $thumb;
}