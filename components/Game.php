<?php
namespace PK\components;

/**
 * Class Game
 * @package PK\components
 * @property Animation animation
 */

class Game {
    public string $description,
        $title;
    /**
     * @var PhotoSize[]
     */
    public array $photo;

    public string $text;

    /**
     * @var MessageEntity[]
     */
    public array $text_entities;

    public object $animation;
}