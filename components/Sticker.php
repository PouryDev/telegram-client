<?php
namespace PK\components;
/**
 * Class Sticker
 * @package PK\components
 * @property PhotoSize thumb
 * @property MaskPosition mask_position
 */
class Sticker {
    public string $file_id,
        $emoji,
        $set_name,
        $file_unique_id;
    public int $height,
        $file_size,
        $width;
    public bool $is_animated;
    public object $thumb;
    public object $mask_position;
}