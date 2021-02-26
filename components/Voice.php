<?php
namespace PK\components;

class Voice {
    public string $file_id,
        $mime_type,
        $file_unique_id;
    public int $file_size,
        $duration;
}