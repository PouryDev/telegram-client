<?php
namespace PK\components;

/**
 * Class Document
 * @package PK\components
 * @property PhotoSize thumb
 */

class Document {
    public string $mime_type,
        $file_name,
        $file_unique_id,
        $file_id;
    public int $file_size;
    public object $thumb;
}